<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Form\ApplicationType;


class ApplicationController extends Controller
{
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();
    $lastApplications = $em
      ->getRepository('OCPlatformBundle:Application')
      ->getApplicationsWithAdvert(3);

    return $this->render('@OCPlatform/Application/index.html.twig',
      array('lastApplications' => $lastApplications)
    );
  }

  public function addAction($advertId, Request $request)
  {
    $application = new Application();
    $form = $this->get('form.factory')->create(ApplicationType::class, $application);

    if($request->isMethod("POST")){

      $form->handleRequest($request);

      $em = $this->getDoctrine()->getManager();

      $advert = $em
        ->getRepository('OCPlatformBundle:Advert')
        ->find($advertId)
      ;

      $author = $this->getUser();
      if($author === null) {
        throw new NotFoundHttpException("Il n'y a pas d'auteur ?!");
      }

      if($form->isValid()) {
        $application->setAuthor($author);
        $application->setDate(new \DateTime());
        $application->setAdvert($advert);
        $em->persist($application);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Application recorded');
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }
    return $this->redirectToRoute("oc_platform_homepage");
  }

  public function editAction($applicationId, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $application = $em->find('OCPlatformBundle:Application', $applicationId);

    if(null === $application)
    {
      throw new NotFoundHttpException("Application with id ".$applicationId." doesn't exist.");
    }

    $this->denyAccessUnlessGranted('edit', $application);

    $form = $this->get('form.factory')->create(ApplicationType::class, $application);

    if($request->isMethod('POST'))
    {
      $form->handleRequest($request);

      if($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($application);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Application recorded');
        return $this->redirectToRoute('oc_platform_view', array('id' => $application->getAdvert()->getId()));
      }
    }

    return $this->render('@OCPlatform/Application/edit.html.twig', array('form' => $form->createView()));
  }

  public function deleteAction($applicationId, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $application = $em->find('OCPlatformBundle:Application', $applicationId);

    if(null === $application)
    {
      throw new NotFoundHttpException("Application with id ".$applicationId." doesn't exist.");
    }

    $this->denyAccessUnlessGranted('delete', $application);

    $form = $this->get('form.factory')->create();

    if($request->isMethod('POST') && $form->handleRequest($request))
    {
      $advertId = $application->getAdvert()->getId();
      $em->remove($application);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Application deleted');
      return $this->redirectToRoute('oc_platform_view', array("id" => $advertId));
    }

    return $this->render('@OCPlatform/Application/delete.html.twig',
      array('application' => $application, 'form' => $form->createView())
    );
  }
}

?>

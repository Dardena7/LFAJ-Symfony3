<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Form\AdvertType;
use OC\PlatformBundle\Form\AdvertEditType;

class AdvertController extends Controller
{

  //Page platform
  public function indexAction($page)
  {
    if($page < 1)
    {
      throw new NotFoundHttpException('Page "'.$page.'" introuvable');
    }

    $nbPerPage = 3;

    $em = $this
      ->getDoctrine()
      ->getManager()
    ;

    $listAdverts = $em
      ->getRepository('OCPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;

    $nbPages = ceil(count($listAdverts)/$nbPerPage);

    return $this->render('@OCPlatform/Advert/index.html.twig',
      array(
        'page' => $page,
        'nbPages' => $nbPages,
        'listAdverts' => $listAdverts
      )
    );
  }


  //Page platform/advert/id
  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em
      ->getRepository('OCPlatformBundle:Advert')
      ->find($id)
    ;

    if(null === $advert) {
      throw new NotFoundHttpException("L'annonce avec l'id ".$id." n'existe pas !");
    }

    $listApplications = $advert->getApplications();
    $listCategories = $advert->getCategories();

    $listAdvertSkills = $em
      ->getRepository('OCPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert))
    ;

    return $this->render('@OCPlatform/Advert/view.html.twig',
      array(
        'advert' => $advert,
        'listApplications' => $listApplications,
        'listCategories' => $listCategories,
        'listAdvertSkills' => $listAdvertSkills
      )
    );
  }


  //Page platform/add
  public function addAction(Request $request)
  {
    $advert = new Advert();
    $form = $this->get('form.factory')->create(AdvertType::class, $advert);

    if($request->isMethod('POST'))
    {
      $form->handleRequest($request);

      if($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }

    return $this->render('@OCPlatform/Advert/add.html.twig',
      array('form' => $form->createView())
    );
  }


  //Page platform/edit/id
  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->find('OCPlatformBundle:Advert', $id);

    if(null === $advert)
    {
      throw new NotFoundHttpException("L'annonce avec l'id ".$id." n'existe pas.");
    }

    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

    if($request->isMethod('POST'))
    {
      $form->handleRequest($request);

      if($form->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }
    }

    return $this->render('@OCPlatform/Advert/edit.html.twig', array('form' => $form->createView()));
  }


  //Page platform/delete/id
  public function deleteAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->find('OCPlatformBundle:Advert', $id);

    if(null === $advert)
    {
      throw new NotFoundHttpException("L'annonce avec l'id ".$id." n'existe pas.");
    }

    $form = $this->get('form.factory')->create();

    if($request->isMethod('POST') && $form->handleRequest($request))
    {
      $em->remove($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien supprimée');
      return $this->redirectToRoute('oc_platform_homepage');
    }

    return $this->render('@OCPlatform/Advert/delete.html.twig',
      array('advert' => $advert, 'form' => $form->createView())
    );
  }


  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listAdvert = $em
      ->getRepository("OCPlatformBundle:Advert")
      ->findBy(
        array(),
        array('date' => 'desc'),
        $limit,
        0
      )
    ;

    return $this->render("@OCPlatform/Advert/menu.html.twig");
  }

}

?>

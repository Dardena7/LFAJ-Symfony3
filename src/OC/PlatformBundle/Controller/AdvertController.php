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


class AdvertController extends Controller
{
  public function indexAction($page)
  {

    //$session = $request->getSession();
    //$userId = $session->get('user_id');
    //$session->set('user_id', 91);
//
    //$url = $this->get('router')->generate(
    //  'oc_platform_view',
    //  array('id' => 5)
    //);
//
    //return $this->render('@OCPlatform/Advert/index.html.twig',
    //  array('generatedUrl' => $url,
    //        'page' => $page,
    //  ));

    //if($page<1)
      //throw new NotFoundHttpException('Page "'.$page.'" inexistante.');

    return $this->render('@OCPlatform/Advert/index.html.twig', array('page' => $page));
  }

  public function viewAction($id, Request $request)
  {
    //$response = new Response(json_encode(array('id' => $id)));
    //$response->headers->set('Content-type', 'application/json');
    //return $response;
    //return new JsonResponse(array('id' => $id));
    //return $this->redirectToRoute('oc_platform_homepage', array('page' => $id));
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if(null === $advert) {
      throw new NotFoundHttpException("L'annonce avec l'id ".$id." n'existe pas !");
    }

    $listApplications = $em->getRepository('OCPlatformBundle:Application')
      ->findBy(array('advert' => $advert));

    $listAdvertSkills = $em->getRepository('OCPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert));

    return $this->render('@OCPlatform/Advert/view.html.twig',
      array(
        'advert' => $advert,
        'listApplications' => $listApplications,
        'listAdvertSkills' => $listAdvertSkills
      )
    );
  }

  public function addAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    //Advert
    $advert = new Advert;
    $advert->setTitle('Symfony3book');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Tutoriel sur le framework Symfony version 3.4");
    $image = new Image();
    $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    //Categories
    $listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();

    foreach($listCategories as $category)
    {
      $advert->addCategory($category);
    }

    //Skills
    $listSkills = $em->getRepository('OCPlatformBundle:Skill')->findAll();
    foreach($listSkills as $skill)
    {
      $advertSkill = new AdvertSkill();
      $advertSkill->setAdvert($advert);
      $advertSkill->setSkill($skill);
      $advertSkill->setLevel('Expert');
      $em->persist($advertSkill);
    }

    //Applications
    $application1 = new Application();
    $application1->setAuthor("Adrien");
    $application1->setContent("Je suis motivé !");

    $application2 = new Application();
    $application2->setAuthor("Tom");
    $application2->setContent("Je suis ultra motivé!");

    $application1->setAdvert($advert);
    $application2->setAdvert($advert);

    $em->persist($advert);
    $em->persist($application1);
    $em->persist($application2);
    $em->flush();
    $session = $request->getSession();

    if($request->isMethod('POST'))
    {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }
    //$antispam = $this->get('oc_platform.antispam');
    //$text = ".....";
    //if($antispam->isSpam($text))
    //  throw new \Exception('Votre message a été détecté comme spam !');
    return $this->render('@OCPlatform/Advert/add.html.twig');
  }

  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->find('OCPlatformBundle:Advert', $id);

    $image = new Image();
    $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image->setAlt('Job à la montagne');

    $advert->setImage($image);

    $listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();

    foreach($listCategories as $category)
    {
      $advert->addCategory($category);
    }

    $em->flush();

    if($request->isMethod('POST'))
    {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
      return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    }
    return $this->render('@OCPlatform/Advert/edit.html.twig');
  }

  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->find('OCPlatformBundle:Advert', $id);

    if(null === $advert)
    {
      throw new NotFoundHttpException("L'annonce ".$id." n'existe pas.");
    }

    foreach($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    $em->flush();

    return $this->render('@OCPlatform/Advert/delete.html.twig');
  }

  public function viewSlugAction($year, $slug, $_format)
  {
    return new Response(
      "Affichage de l'année : " . $year .
      " avec le slug : " . $slug .
      " au format : " . $_format
    );
  }
}

?>

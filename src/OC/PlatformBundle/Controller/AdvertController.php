<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


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
    return $this->render('@OCPlatform/Advert/view.html.twig',
      array('id' => $id)
    );
  }

  public function addAction(Request $request)
  {
    //$session = $request->getSession();
    //$session->getFlashBag()->add('info', 'Annonce bien enregistrée');
    //$session->getFlashBag()->add('info', 'Confirmation !');
    if($request->isMethod('POST'))
    {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
      return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    }
    return $this->render('@OCPlatform/Advert/add.html.twig');
  }

  public function editAction($id, Request $request)
  {
    if($request->isMethod('POST'))
    {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
      return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    }
  }

  public function deleteAction($id)
  {
    return $this->render('OCPlatformBundle/Advert/delete.html.twig');
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

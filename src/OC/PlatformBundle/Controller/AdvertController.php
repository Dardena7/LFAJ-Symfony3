<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
  public function indexAction()
  {
    $url = $this->get('router')->generate(
      'oc_platform_view',
      array('id' => 5)
    );

    return $this->render('@OCPlatform/Advert/index.html.twig',
      array('generatedUrl' => $url,));
  }

  public function viewAction($id)
  {
    return new Response("Affichage de l'annonce : ".$id);
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

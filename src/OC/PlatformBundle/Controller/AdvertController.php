<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
  public function indexAction()
  {
    return $this->render('@OCPlatform/Advert/index.html.twig');
  }
}

?>

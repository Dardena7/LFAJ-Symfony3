<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends DefaultController
{
  public function indexAction()
  {
    $user = $this->getUser();

    if($user !== null) {
      return $this->redirectToRoute('oc_platform_homepage');
    }

    return $this->render('@OCPlatform/App/index.html.twig');
  }
}

?>

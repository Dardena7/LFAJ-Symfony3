<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Entity\Application;


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
}

?>

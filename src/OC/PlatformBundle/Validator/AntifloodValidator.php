<?php

namespace OC\PlatformBundle\Validator;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator
{
  private $requestStack;
  private $em;

  public function __construct(RequestStack $rs, EntityManagerInterface $em)
  {
    $this->requestStack = $rs;
    $this->em = $em;
  }

  public function validate($value, Constraint $constraint)
  {
    $request = $this->requestStack->getCurrentRequest();

    $ip = $request->getClientIp();

    $isFlood = $this->em
      ->getRepository('OCPlatformBundle:Application')
      ->isFlood($ip, 15)
    ;

    if($isFlood)
    {
      $this->context->addViolation($constraint->message);
    }
  }
}

?>

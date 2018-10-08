<?php

namespace OC\PlatformBundle\Security;

use OC\PlatformBundle\Entity\Application;
use OC\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class ApplicationVoter extends Voter
{
  const EDIT = 'edit';
  const DELETE = 'delete';

  private $decisionManager;

  public function __construct(AccessDecisionManagerInterface $decisionManager)
  {
    $this->decisionManager = $decisionManager;
  }

  protected function supports($attribute, $subject)
  {

    if(!in_array($attribute, array(self::EDIT, self::DELETE)))
    {
      return false;
    }

    if(!$subject instanceof Application)
    {
      return false;
    }

    return true;

  }

  protected function voteOnAttribute(
    $attribute,
    $subject,
    TokenInterface $token)
  {
    $user = $token->getUser();

    if(!$user instanceof User) {
      return false;
    }

    $application = $subject;

    if($this->decisionManager->decide($token, array('ROLE_ADMIN'))) {
      return true;
    }

    switch($attribute) {
      case self::EDIT:
        return $this->canEdit($application, $user);
      case self::DELETE:
        return $this->canDelete($application, $user);
    }

    throw new \LogicException("This code should not be reached");

  }

  private function canEdit(Application $application, User $user)
  {
    return $user === $application->getAuthor();
  }

  private function canDelete(Application $application, User $user)
  {
    return $user === $application->getAuthor();
  }
}

?>

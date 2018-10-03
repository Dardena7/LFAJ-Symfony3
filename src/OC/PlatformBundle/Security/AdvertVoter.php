<?php

namespace OC\PlatformBundle\Security;

use OC\PlatformBundle\Entity\Advert;
use OC\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class AdvertVoter extends Voter
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

    if(!$subject instanceof Advert)
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

    $advert = $subject;

    if($this->decisionManager->decide($token, array('ROLE_ADMIN'))) {
      return true;
    }

    switch($attribute) {
      case self::EDIT:
        return $this->canEdit($advert, $user);
      case self::DELETE:
        return $this->canDelete($advert, $user);
    }

    throw new \LogicException("This code should not be reached");

  }

  private function canEdit(Advert $advert, User $user)
  {
    return $user === $advert->getAuthor();
  }

  private function canDelete(Advert $advert, User $user)
  {
    return $user === $advert->getAuthor();
  }
}

?>

<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Skill;

class LoadSkill implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $names = array(
      'PHP',
      'Symfony',
      'C++',
      'Java',
      'Photoshop'
    );

    foreach ($names as $name)
    {
      $skill= new Skill();
      $skill->setName($name);

      $manager->persist($skill);
    }
    $manager->flush();
  }
}


?>

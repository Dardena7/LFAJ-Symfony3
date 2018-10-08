<?php

namespace OC\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use OC\PlatformBundle\Form\ImageType;

class ProfileUserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('image', ImageType::class, array('required' => false));
    }

    public function getParent()
    {
      return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }
}

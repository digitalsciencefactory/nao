<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExtractType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('datedebut',      DateType::class, array(
          'label' => 'Du',
          'widget' => 'single_text',
          'html5' => false,
          'format' => 'dd/MM/yyyy',
          'attr' => array(
                'placeholder' => 'Du',
                )
          )
      )
      ->add('datefin', DateType::class, array(
          'label' => 'au',
          'widget' => 'single_text',
          'html5' => false,
          'format' => 'dd/MM/yyyy',
          'attr' => array(
                'placeholder' => 'au',
                )
          )
      )
      ->add('extraire',      SubmitType::class)
    ;
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Extraction\Extraction'
    ));
  }
}

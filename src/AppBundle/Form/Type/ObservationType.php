<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 07/08/2017
 * Time: 21:59
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\Observation;

class ObservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('espece',      IntegerType::class, array('label' => ' '))
            ->add('especeTxt',      TextType::class, array('label' => ' '))
            ->add('latitude',     TextType::class, array('label' => ' ', )) // 'scale' => 10
            ->add('longitude',     TextType::class, array('label' => ' ', ))
            ->add('dobs', DateType::class, array(
                'label' => ' ',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy'
            ))
            ->add('dcree', DateTimeType::class, array(
                'label' => ' ',
                'widget' => 'single_text',
                'html5' => true,
                'format' => 'dd/MM/yyyy HH:mm:ss',
            ))
            ->add('comm_obs', TextType::class, array('label' => '', 'required' => false,))
            ->add('file', FileType::class, array('label' => '','required' => false))
            ->add('envoyer',      SubmitType::class
            )
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Observation',
        ));
    }
}

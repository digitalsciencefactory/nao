<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 07/08/2017
 * Time: 21:59
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Observation;

class ModificationObsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('espece',      IntegerType::class, array('label' => ' ', 'required' => false))
            ->add('especeTxt',      TextType::class, array('label' => ' ', 'required' => false))
            ->add('comm_obs', TextareaType::class, array('label' => '', 'required' => false))

            ->add('valider',      SubmitType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Observation',
        ));
    }
}

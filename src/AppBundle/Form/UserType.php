<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 31/07/2017
 * Time: 21:27
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',      TextType::class, array('label' => ' ','required' => false))
            ->add('prenom',     TextType::class, array('label' => ' ','required' => false))
            ->add('codePostal',     TextType::class, array('label' => ' ','required' => false))
            ->add('ddn', DateType::class, array('label' => ' ','required' => false))
            ->add('Mettre à jour',      SubmitType::class)
            ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            //'validation_groups' => array('obs'),
            'data_class' => User::class,
        ));
    }
}
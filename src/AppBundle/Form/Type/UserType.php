<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 31/07/2017
 * Time: 21:27
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Entity\User;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',      TextType::class, array('label' => ' ','required' => false))
            ->add('prenom',     TextType::class, array('label' => ' ','required' => false))
            ->add('codePostal',     TextType::class, array('label' => ' ','required' => false))
            ->add('ddn', DateType::class, array(
                'label' => ' ',
                'required' => false,
                'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => true,
                'format' => 'dd/MM/yyyy',
                'invalid_message' => "La date doit être au format JJ/MM/AAAA. Votre profil n'a pas été mis à jour ",
                // add a class that can be selected in JavaScript
            ))
            ->add('photo', ChoiceType::class, array(
                'choices'  => array(
                    'avatar 1' => 'avatar1.png',
                    'avatar 2' => 'avatar2.png',
                    'avatar 3' => 'avatar3.png',
                )))
            ->add('update',      SubmitType::class
                )
            ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'validation_groups' => array('update'),
            'data_class' => 'AppBundle\Entity\User',
        ));
    }
}

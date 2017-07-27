<?php
/**
 * Created by PhpStorm.
 * User: darkchyper
 * Date: 27/07/2017
 * Time: 19:26
 */

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail', TextType::class, array('label' => ' ', 'attr' => array(
        'placeholder' => 'e-mail',
    )))
            ->add('plainPassword', PasswordType::class,  array('label' => ' ', 'attr' => array(
        'placeholder' => 'Mot de passe',
    )));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}
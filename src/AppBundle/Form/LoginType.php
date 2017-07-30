<?php

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
            ->add('mail', EmailType::class, array('label' => ' ', 'attr' => array(
                'placeholder' => 'e-mail',
            )))
            ->add('plainPassword', PasswordType::class,  array('label' => ' ', 'attr' => array(
                'placeholder' => 'Mot de passe',
            )));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('login'),
            'data_class' => User::class,
        ));
    }
}
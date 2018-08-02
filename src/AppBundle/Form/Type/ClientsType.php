<?php
/**
 * Created by PhpStorm.
 * User: MARC
 * Date: 27/06/2018
 * Time: 10:01
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientsType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('tel', TelType::class)
            ->add('mob', TelType::class)
            ->add('fax', TelType::class)
            ->add('email', EmailType::class)
            ->add('rue', TextType::class)
            ->add('cp', NumberType::class)
            ->add('ville', TextType::class)
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Clients',
        ));
    }


}
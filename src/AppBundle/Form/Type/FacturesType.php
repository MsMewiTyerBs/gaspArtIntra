<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class FacturesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chemin', FileType::class) // Il sera de FileType // Il y aura
            ->add('titre')
            ->add('dateEnvoi')
            ->add('etat', ChoiceType::class, array(
                'choices' => array(
                    'Client'=>"",
                    'Fournisseur'=>"",
                    'Sous-Traitant'=>"",
                    'Employé'=>"",
                    "Contact"=>"",
                )
            ))
            ->add('numero')
            ->add('ttc')
            ->add('tva')
            ->add('datePaye') // Initialiser à la date du jour.
            ->add('adrChantier')
            ->add('submit', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Factures'
        ));
    }

}

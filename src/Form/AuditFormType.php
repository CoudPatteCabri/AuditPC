<?php

namespace App\Form;

use App\Entity\SERVICE;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('service', TextareaType::class)
            ->add('POSTE', TextareaType::class)
            ->add('INTUNE', CheckboxType::class, [
                'label'    => 'INTUNE || Laisser vide si NON',
                'required' => false,
            ])
            ->add('DEFENDER', CheckboxType::class, [
                'label'    => 'DEFENDER || Laisser vide si NON',
                'required' => false,
            ])
            ->add('PROBLEME', TextareaType::class)
            ->add('ECRAN', ChoiceType::class, [
                'choices' => [
                    'OUI' => 'OUI',
                    'NON' => 'NON',
                    '2 Ecran' => '2 Ecran',
                    '3 Ecran' => '3 Ecran',
                ],
            ])
            ->add('SOURIS', CheckboxType::class, [
                'label'    => ' SOURIS || Laisser vide si NON',
                'required' => false,
                ])
                ->add('CLAVIER', CheckboxType::class, [
                    'label'    => 'CLAVIER || Laisser vide si NON',
                    'required' => false,
                    ])
                    ->add('WEBCAM', CheckboxType::class, [
                'label'    => 'WEBCAM || Laisser vide si NON',
                'required' => false,
                ])
                ->add('ENCEINTE', ChoiceType::class, [
                    'choices' => [
                        'OUI' => 'OUI',
                        'NON' => 'NON',
                        '2 Enceinte' => '2 Enceinte',
                        '3 Enceinte' => '3 Enceinte',
                    ],
                ])
                ->add('save', SubmitType::class, [ // Ajout d'un champ de type SubmitType
                'label' => 'Submit',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SERVICE::class,
        ]);
    }
}
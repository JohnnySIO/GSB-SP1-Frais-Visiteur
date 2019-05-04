<?php

namespace GSB\VisiteurBundle\Form;

use GSB\VisiteurBundle\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use GSB\VisiteurBundle\Entity\Visiteur;
use GSB\VisiteurBundle\Entity\Etat;


use GSB\VisiteurBundle\Form\VisiteurType;
use GSB\VisiteurBundle\Form\LigneFraisForfaitType;


use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\form\Extension\Core\Type\IntegerType;

class FicheFraisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('moisFf')
                ->add('idVis', EntityType::class, array(
                    'class' => 'GSBVisiteurBundle:Visiteur',
                    ))		
		->add('nbJustificatifsFf')
                ->add('montantValideFf')
                ->add('dateCreationFf',DateType::class)
                ->add('idEtat', EntityType::class, array(
                    'class' => 'GSBVisiteurBundle:Etat',
                    'choice_label' => 'libelleEtat',
                    ));  
	}
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\VisiteurBundle\Entity\FicheFrais'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_fichefrais';
    }


}

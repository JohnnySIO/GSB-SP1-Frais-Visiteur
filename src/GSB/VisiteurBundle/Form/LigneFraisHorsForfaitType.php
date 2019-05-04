<?php

namespace GSB\VisiteurBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class LigneFraisHorsForfaitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelleLfhf')
                ->add('dateLfhf')
                ->add('montantLfhf')
                ->add('idVis', EntityType::class, array(
                    'class' => 'GSBVisiteurBundle:Visiteur',
                    'choice_label' => 'id',
                    ))
		->add('moisFf', EntityType::class, array(
                    'class' => 'GSBVisiteurBundle:FicheFrais',
                    'choice_label' => 'moisFf',
                    ))
                ->add('ajouter',SubmitType::class, array(
    'attr' => array('class' => 'save'),));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GSB\VisiteurBundle\Entity\LigneFraisHorsForfait'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gsb_visiteurbundle_lignefraishorsforfait';
    }


}

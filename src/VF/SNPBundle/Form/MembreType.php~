<?php

namespace VF\SNPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MembreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' , 'text')
            ->add('prenom', 'text')
            ->add('courriel', 'text')
            ->add('rue', 'text')
            ->add('cp', 'integer')
            ->add('localite', 'text')
            ->add('telpublic', 'text')
            ->add('fax', 'text')
            ->add('telsecret', 'text')
            ->add('portable', 'text')
            ->add('qualite', 'text')
            ->add('garde','checkbox')
            ->add('rSNe','checkbox')
			->add('sauver', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VF\SNPBundle\Entity\Membre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vf_snpbundle_membre';
    }
}

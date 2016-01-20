<?php

namespace Kiwi\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('corporateName', 'text', array('label' => 'Raison Sociale'))
			->add('siret', 'text', array('label' => 'SIRET'))
			->add('contactName', 'text', array('label' => 'Contact'))
			->add('job', 'text', array('label' => 'Fonction'))
			->add('phoneNumber', 'text', array('label' => 'Téléphone fixe'))
			->add('email', 'text', array('label' => 'Email'))
			->add('subjectMessage', 'text', array('label' => 'Sujet du message'))
			->add('contentMessage', 'textarea', array('label' => 'Message'));
	}
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kiwi\CoreBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
	public function getName()
	{
		return 'project_form';
	}
}
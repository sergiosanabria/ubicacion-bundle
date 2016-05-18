<?php

namespace Matudelatower\UbicacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocalidadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('codigo')
            ->add('codigoPostal')
            ->add('departamento')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Matudelatower\UbicacionBundle\Entity\Localidad'
        ));
    }

    public function getBlockPrefix() {
        return 'matudelatower_ubicacionbundle_localidad_type';
    }

    public function getName() {
        return $this->getBlockPrefix();
    }
}

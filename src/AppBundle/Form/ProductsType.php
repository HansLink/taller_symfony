<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class ProductsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, ['attr'=>array('class' => 'form-control')])
            ->add('name', TextType::class, ['attr'=>array('class' => 'form-control')])
            ->add('description', TextType::class, ['attr'=>array('class' => 'form-control')])
            ->add('brand', TextType::class, ['attr'=>array('class' => 'form-control')])
            ->add('category', TextType::class, ['attr'=>array('class' => 'form-control')])
            ->add('price', TextType::class, ['attr'=>array('class' => 'form-control')])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Products'
        ));
    }
}

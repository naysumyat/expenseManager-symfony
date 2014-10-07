<?php

namespace Naysumyat\expenseManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IncomeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('incomeTitle')
            ->add('incomeAmount')
            ->add('incomeDate')
            ->add('incomeCreatedDate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Naysumyat\expenseManagerBundle\Entity\Income'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'naysumyat_expensemanagerbundle_income';
    }
}

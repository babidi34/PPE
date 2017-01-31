<?php

namespace NeigeEtSoleil\NeigeEtSoleilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            //ici dev du formulaire php
        $builder->add('email');
            
    }
    public function getName()
    {
        return 'neigeetsoleil_neigeetsoleilbundle_test';
    }
    
    
}

<?php

namespace KEURGUI\immoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use KEURGUI\immoBundle\Entity\localite;

class localiteType extends AbstractType
{
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'class' => 'KEURGUIimmoBundle:localite',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                ->orderBy('r.nom', 'ASC');
                },
                'choice_label' => 'nom',
        ));
    }

    public function getParent()
    {
        return EntityType::class;
    }

    /**
     * @return string
     */
    public function getnomme()
    {
        return 'localite';
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 12/11/2018
 * Time: 15:46
 */

namespace App\Form\Type;





use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;

class GenreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
      $builder
        ->add('name', TextType::class,[
          'label' => 'Nom du genre',
        ])
        ->add('wikipedia', UrlType::class,[
            'label'=> 'Fiche Wikipedia','required'=> false,
            ]);
    }

}
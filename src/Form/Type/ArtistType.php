<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 12/11/2018
 * Time: 16:27
 */

namespace App\Form\Type;


    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\DateType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\UrlType;
    use Symfony\Component\Form\FormBuilderInterface;

class ArtistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
            ])
            ->add('born', DateType::class, [
                'label' => 'Naissance',
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('dead', DateType::class, [
                'label' => 'Décès',
                'html5' => true,
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('wikipedia', UrlType::class, [
                'label' => 'Fiche Wikipedia',
            ])
            ->add('website', UrlType::class, [
                'label' => 'Site web',
            ]);
    }
}

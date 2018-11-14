<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 12/11/2018
 * Time: 15:30
 */



namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @UniqueEntity(fields=("name"))
 */

class Genre
{

    use IdTrait;

    /**
     * @ORM\Column(unique=true)
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */

    private $name;

    /**
     * @ORM\Column(nullable=true)
     * @Assert\Length(max=255)
     * @Assert\Url()
     */
    private $wikipedia;

    /**
     * @return mixed
     */
public function getName()
{
    return $this->name;
}
}

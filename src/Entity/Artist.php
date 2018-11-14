<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 12/11/2018
 * Time: 16:13
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;






class Artist
{
    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     */
    private $name;

    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     */
    private $description;

    /**
     * @Assert\NotNull()
     * @Assert\Date()
     */
    private $born;

    /**
     * @Assert\Date()
     */
    private $dead;

    /**
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     * @Assert\Url()
     */
    private $wikipedia;

    /**
     * @Assert\Type("string")
     * @Assert\Length(max=255)
     * @Assert\Url()
     */
    private $website;

}
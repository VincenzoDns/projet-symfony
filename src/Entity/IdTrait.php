<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 13/11/2018
 * Time: 13:17
 */

namespace App\Entity;


trait IdTrait
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    Private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
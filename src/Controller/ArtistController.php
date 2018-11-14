<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 19/10/2018
 * Time: 15:41
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ArtistController extends controller

{

    /**
     * *@route("/artistes")
     */
    public function index()

    {
        $json = file_get_contents(__DIR__ . '/../Ressources/db/artists.json');
        $artists = json_decode($json, true);

        return $this->render('artist/index.html.twig' , [
        'artists'=>$artists,
            ]);
    }
}
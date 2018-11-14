<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 19/10/2018
 * Time: 14:08
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class HelloController extends Controller
{
    /**
     * *@route("/hello")
     */

    public function all ()

    {
        return $this->render("hello/all.html.twig");
    }

    /**
     * *@route("/hello/firstname")
     */
    public function firstname ($firstname){
        return $this->render("hello/firstname.html.twig", ['firstname' => $firstname]);
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 19/10/2018
 * Time: 13:23
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * *@route("/contact")
     */

public function address ()
    {
    return $this->render('contact/adress.html.twig');
    }
}

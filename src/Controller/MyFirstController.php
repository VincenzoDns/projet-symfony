<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 19/10/2018
 * Time: 11:27
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyFirstController
{
    /**
     * @Route("/my/first/page")
     */
    public function index()
    {
        $html = '<html><body>My first page !</body></html>';

        return new Response($html);
    }

    /**
     * @Route("/my/lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number,]);

        return new Response($html);
    }

}

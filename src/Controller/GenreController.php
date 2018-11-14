<?php
/**
 * Created by PhpStorm.
 * User: vincenzo.denis
 * Date: 13/11/2018
 * Time: 10:10
 */

namespace App\Controller;

use App\Entity\Genre;
use App\Form\Type\GenreType;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/genre")
 */

class GenreController extends AbstractController
{
    /**
     * @Route ("/{id}/modifier")
     */
    public function create(Request $request, $Request)
    {
        $genre = new genre();
        $form = $this ->createForm(GenreType::class, $genre);
        $form -> handleRequest($Request);
        if ($form->isSubmitted()&& $form->isValid()){
            $em->flush();
            //@todo

            $this->addFlash('succeess','Le genre musical a bien été pris en compte');

            return $this->redirectToRoute('app_genre_create');
        }
        return $this->render('genre/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", requirements={"id":"\d+"})
     */
    Public function read (Genre $genre)
    {

        dump($genre);
        exit;
    }
}
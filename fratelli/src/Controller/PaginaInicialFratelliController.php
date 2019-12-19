<?php
// src/Controller/PaginaInicialFratelliController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class PaginaInicialFratelliController extends AbstractController {

    /**
     * @Route("/fratellisoftwarehouse")
     */
    public function number()
    {
        $number = random_int(0,100);

            return $this->render('inicial/numero.html.twig', [
                'numero' => $number,
            ]);
    }

    public function paginaInicial()
    {
        return $this->render();
    }
}
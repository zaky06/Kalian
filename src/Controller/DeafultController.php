<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeafultController extends AbstractController
{
    /**
     * @Route("/", name="deafult")
     */
    public function index(): Response
    {
        return $this->render('deafult/index.html.twig', [
            'controller_name' => 'DeafultController',
        ]);
    }

}

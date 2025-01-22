<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FRAController extends AbstractController
{
    #[Route('/api/fra', name: 'api_fra')]
    public function index(): Response
    {
        return new Response('Symfony de Fernando Rodriguez Arcos Responde a la llamada de React');
    }
}

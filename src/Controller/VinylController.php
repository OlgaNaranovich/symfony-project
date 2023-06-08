<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $number = 4;

        return new Response(
            'Lucky number: '.$number
        );
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            echo $slug;
            $title = 'Genre: '.str_replace('-', ' ', $slug);
        } else {
            $title = 'All genres';
        }

        return new Response($title);
    }
}
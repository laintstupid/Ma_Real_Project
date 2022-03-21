<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class AboutController extends AbstractController
{
    /**
     * @Route("/pillowmart/about", name="pillowmart_about_page")
     */
    public function aboutPage(): Response
    {
        return $this->render('about.html.twig');
    }
}
<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class MainPageController extends AbstractController
{
    /**
     * @Route("/pillowmart/mainpage", name="pillowmart_main_page")
     */
    public function mainPage(): Response
    {
        return $this->render('index.html.twig');
    }
}
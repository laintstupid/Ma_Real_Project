<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ContactController extends AbstractController
{
    /**
     * @Route("/pillowmart/contact", name="pillowmart_contact_page")
     */
    public function contactPage(): Response
    {
        return $this->render('contact.html.twig');
    }
}
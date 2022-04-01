<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ProductDto;
use App\Entity\PillowProduct;
use App\Repository\PillowProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


final class ProductListController extends AbstractController
{

    /**
     * @Route("/pillowmart/product_list", name="pillowmart_product_list")
     */
    public function productListPage(PillowProductRepository $pillowProductRepository): Response
    {
        $infoAboutProduct = $pillowProductRepository->findAll();
        $description = array_map(
            function (PillowProduct $pillowProduct) {
                return new ProductDto($pillowProduct->getId(), $pillowProduct->getAbout(), $pillowProduct->getPrice());
            },
            $infoAboutProduct
        );
        return $this->render('product_list.html.twig', ['description' => $description]);
    }
}
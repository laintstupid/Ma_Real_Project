<?php

declare(strict_types=1);

namespace App\Controller;

use App\Dto\ProductDto;
use App\Entity\PillowProduct;
use App\Repository\PillowProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class SingleProductController extends AbstractController
{
    /**
     * @Route("/pillowmart/single_product/{id}", name="pillowmart_single_product_page")
     */
    public function singleProductPage(PillowProductRepository $productRepository, int $id): Response
    {
        $product = $productRepository->find($id);
        $productDto = new ProductDto($product->getId(), $product->getAbout(), $product->getPrice());
        return $this->render('single_product.html.twig', ['description' => $productDto]);
    }
}
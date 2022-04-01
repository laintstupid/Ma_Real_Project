<?php

declare(strict_types=1);

namespace App\Dto;

final class ProductDto
{
    private int $id;
    private string $about;
    private float $price;

    public function __construct(int $id, string $about, float $price)
    {
        $this->id = $id;
        $this->about = $about;
        $this->price = $price;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getAbout(): string
    {
        return $this->about;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
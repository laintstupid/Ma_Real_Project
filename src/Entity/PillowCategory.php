<?php

namespace App\Entity;

use App\Repository\PillowCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PillowCategoryRepository::class)
 */
class PillowCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=PillowProduct::class, mappedBy="category")
     */
    private $pillowProducts;

    public function __construct()
    {
        $this->pillowProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, PillowProduct>
     */
    public function getPillowProducts(): Collection
    {
        return $this->pillowProducts;
    }

    public function addPillowProduct(PillowProduct $pillowProduct): self
    {
        if (!$this->pillowProducts->contains($pillowProduct)) {
            $this->pillowProducts[] = $pillowProduct;
            $pillowProduct->setCategory($this);
        }

        return $this;
    }

    public function removePillowProduct(PillowProduct $pillowProduct): self
    {
        if ($this->pillowProducts->removeElement($pillowProduct)) {
            // set the owning side to null (unless already changed)
            if ($pillowProduct->getCategory() === $this) {
                $pillowProduct->setCategory(null);
            }
        }

        return $this;
    }
}

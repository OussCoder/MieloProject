<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LabelRepository::class)
 */
class Label
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgLabel;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="product_label")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImgLabel(): ?string
    {
        return $this->imgLabel;
    }

    public function setImgLabel(string $imgLabel): self
    {
        $this->imgLabel = $imgLabel;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }


    public function getLabelName(): ?string
    {
        return $this->label_name;
    }

    public function setLabelName(string $label_name): self
    {
        $this->label_name = $label_name;

        return $this;
    }
}

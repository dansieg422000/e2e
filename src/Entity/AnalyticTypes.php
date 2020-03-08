<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnalyticTypesRepository")
 */
class AnalyticTypes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_numeric;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_decimal_places;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
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

    public function getIsNumeric(): ?bool
    {
        return $this->is_numeric;
    }

    public function setIsNumeric(bool $is_numeric): self
    {
        $this->is_numeric = $is_numeric;

        return $this;
    }

    public function getNumDecimalPlaces(): ?int
    {
        return $this->num_decimal_places;
    }

    public function setNumDecimalPlaces(int $num_decimal_places): self
    {
        $this->num_decimal_places = $num_decimal_places;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyAnalyticsRepository")
 */
class PropertyAnalytics
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
     * @ORM\Column(type="integer")
     */
    private $property_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $analytic_type_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $value;

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

    public function getPropertyId(): ?int
    {
        return $this->property_id;
    }

    public function setPropertyId(int $property_id): self
    {
        $this->property_id = $property_id;

        return $this;
    }

    public function getAnalyticTypeId(): ?int
    {
        return $this->analytic_type_id;
    }

    public function setAnalyticTypeId(?int $analytic_type_id): self
    {
        $this->analytic_type_id = $analytic_type_id;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}

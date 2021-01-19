<?php

namespace App\Entity;

use App\Repository\BoxDeformedRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoxDeformedRepository::class)
 */
class BoxDeformed
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
    private $b_deformed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBDeformed(): ?string
    {
        return $this->b_deformed;
    }

    public function setBDeformed(string $b_deformed): self
    {
        $this->b_deformed = $b_deformed;

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

    public function __toString() {
        return $this->b_deformed;
    }
}

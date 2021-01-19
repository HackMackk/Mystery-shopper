<?php

namespace App\Entity;

use App\Repository\BDateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BDateRepository::class)
 */
class BDate
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
    private $b_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBDate(): ?string
    {
        return $this->b_date;
    }

    public function setBDate(string $b_date): self
    {
        $this->b_date = $b_date;

        return $this;
    }

    public function __toString() {
        return $this->b_date;
    }

}

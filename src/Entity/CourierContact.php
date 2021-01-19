<?php

namespace App\Entity;

use App\Repository\CourierContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CourierContactRepository::class)
 */
class CourierContact
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
    private $c_contact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCContact(): ?string
    {
        return $this->c_contact;
    }

    public function setCContact(string $c_contact): self
    {
        $this->c_contact = $c_contact;

        return $this;
    }

    public function __toString() {
        return $this->c_contact;
    }
}

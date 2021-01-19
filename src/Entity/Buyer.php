<?php

namespace App\Entity;

use App\Repository\BuyerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BuyerRepository::class)
 */
class Buyer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

      /**
     * @ORM\Column(type="datetime")
     */
    private $create_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telefone;

    /**
     * @ORM\ManyToOne(targetEntity=CourierTime::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $courier_time;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    public $courier_file;

    /**
     * @ORM\ManyToOne(targetEntity=CourierCloth::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $courier_cloth;

    /**
     * @ORM\ManyToOne(targetEntity=CourierMask::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $courier_mask;

    /**
     * @ORM\ManyToOne(targetEntity=CourierContact::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $courier_contact;

    /**
     * @ORM\ManyToOne(targetEntity=CourierEnd::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $courier_end;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $courier_end_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $box_foto;

    /**
     * @ORM\ManyToOne(targetEntity=BoxDeformed::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $box_deformed;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $box_deformed_foto;

    /**
     * @ORM\ManyToOne(targetEntity=BDate::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $box_date;

    /**
     * @ORM\ManyToOne(targetEntity=Plants::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $plants;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $plants_foto;

    /**
     * @ORM\ManyToOne(targetEntity=Milks::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $milks;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $milks_text;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $milks_foto;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $what_like;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $what_dislike;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $other;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }

    public function setCreateAtValue()
    {
        $this->create_at = new \DateTime();
    }

    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

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

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getCourierTime(): ?CourierTime
    {
        return $this->courier_time;
    }

    public function setCourierTime(?CourierTime $courier_time): self
    {
        $this->courier_time = $courier_time;

        return $this;
    }

    public function getCourierFile(): ?string
    {
        return $this->courier_file;
    }

    public function setCourierFile(string $courier_file): self
    {
        $this->courier_file = $courier_file;

        return $this;
    }

    public function getCourierCloth(): ?CourierCloth
    {
        return $this->courier_cloth;
    }

    public function setCourierCloth(?CourierCloth $courier_cloth): self
    {
        $this->courier_cloth = $courier_cloth;

        return $this;
    }

    public function getCourierMask(): ?CourierMask
    {
        return $this->courier_mask;
    }

    public function setCourierMask(?CourierMask $courier_mask): self
    {
        $this->courier_mask = $courier_mask;

        return $this;
    }

    public function getCourierContact(): ?CourierContact
    {
        return $this->courier_contact;
    }

    public function setCourierContact(?CourierContact $courier_contact): self
    {
        $this->courier_contact = $courier_contact;

        return $this;
    }

    public function getCourierEnd(): ?CourierEnd
    {
        return $this->courier_end;
    }

    public function setCourierEnd(?CourierEnd $courier_end): self
    {
        $this->courier_end = $courier_end;

        return $this;
    }

    public function getCourierEndText(): ?string
    {
        return $this->courier_end_text;
    }

    public function setCourierEndText(string $courier_end_text): self
    {
        $this->courier_end_text = $courier_end_text;

        return $this;
    }

    public function getBoxFoto(): ?string
    {
        return $this->box_foto;
    }

    public function setBoxFoto(string $box_foto): self
    {
        $this->box_foto = $box_foto;

        return $this;
    }

    public function getBoxDeformed(): ?BoxDeformed
    {
        return $this->box_deformed;
    }

    public function setBoxDeformed(?BoxDeformed $box_deformed): self
    {
        $this->box_deformed = $box_deformed;

        return $this;
    }

    public function getBoxDeformedFoto(): ?string
    {
        return $this->box_deformed_foto;
    }

    public function setBoxDeformedFoto(?string $box_deformed_foto): self
    {
        $this->box_deformed_foto = $box_deformed_foto;

        return $this;
    }

    public function getBoxDate(): ?BDate
    {
        return $this->box_date;
    }

    public function setBoxDate(?BDate $box_date): self
    {
        $this->box_date = $box_date;

        return $this;
    }

    public function getPlants(): ?Plants
    {
        return $this->plants;
    }

    public function setPlants(?Plants $plants): self
    {
        $this->plants = $plants;

        return $this;
    }

    public function getPlantsFoto(): ?string
    {
        return $this->plants_foto;
    }

    public function setPlantsFoto(?string $plants_foto): self
    {
        $this->plants_foto = $plants_foto;

        return $this;
    }

    public function getMilks(): ?Milks
    {
        return $this->milks;
    }

    public function setMilks(?Milks $milks): self
    {
        $this->milks = $milks;

        return $this;
    }

    public function getMilksText(): ?string
    {
        return $this->milks_text;
    }

    public function setMilksText(?string $milks_text): self
    {
        $this->milks_text = $milks_text;

        return $this;
    }

    public function getMilksFoto(): ?string
    {
        return $this->milks_foto;
    }

    public function setMilksFoto(?string $milks_foto): self
    {
        $this->milks_foto = $milks_foto;

        return $this;
    }

    public function getWhatLike(): ?string
    {
        return $this->what_like;
    }

    public function setWhatLike(?string $what_like): self
    {
        $this->what_like = $what_like;

        return $this;
    }

    public function getWhatDislike(): ?string
    {
        return $this->what_dislike;
    }

    public function setWhatDislike(?string $what_dislike): self
    {
        $this->what_dislike = $what_dislike;

        return $this;
    }

    public function getOther(): ?string
    {
        return $this->other;
    }

    public function setOther(?string $other): self
    {
        $this->other = $other;

        return $this;
    }

}

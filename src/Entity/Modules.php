<?php

namespace App\Entity;

use App\Repository\ModulesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModulesRepository::class)]
class Modules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'modules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Filieres $filieres = null;

    #[ORM\ManyToOne(inversedBy: 'modules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Semestres $semestres = null;

    #[ORM\ManyToOne(inversedBy: 'modules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enseignants $enseignants = null;

    #[ORM\OneToMany(mappedBy: 'modules', targetEntity: Notes::class)]
    private Collection $notes;

    public function __construct()
    {
        $this->notes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getFilieres(): ?Filieres
    {
        return $this->filieres;
    }

    public function setFilieres(?Filieres $filieres): self
    {
        $this->filieres = $filieres;

        return $this;
    }

    public function getSemestres(): ?Semestres
    {
        return $this->semestres;
    }

    public function setSemestres(?Semestres $semestres): self
    {
        $this->semestres = $semestres;

        return $this;
    }

    public function getEnseignants(): ?Enseignants
    {
        return $this->enseignants;
    }

    public function setEnseignants(?Enseignants $enseignants): self
    {
        $this->enseignants = $enseignants;

        return $this;
    }

    /**
     * @return Collection<int, Notes>
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Notes $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setModules($this);
        }

        return $this;
    }

    public function removeNote(Notes $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getModules() === $this) {
                $note->setModules(null);
            }
        }

        return $this;
    }
}

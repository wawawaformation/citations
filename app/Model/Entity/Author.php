<?php

declare(strict_types=1);

namespace App\Model\Entity;

/**
 * Entité représentant un auteur
 */
class Author extends AbstractEntity
{
    /**
     * Nom de l'auteur
     */
    private string $name;

    /**
     * Image de l'auteur (optionnelle)
     */
    private ?string $image = null;

    /**
     * Biographie de l'auteur (optionnelle)
     */
    private ?string $biography = null;


    /**
     * Retourne le nom de l'auteur
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Définit le nom de l'auteur
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Retourne l'image de l'auteur
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Définit l'image de l'auteur
     * @param string|null $image
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Retourne la biographie de l'auteur
     * @return string|null
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }

    /**
     * Définit la biographie de l'auteur
     * @param string|null $biography
     * @return self
     */
    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace App\Model\Entity;

/**
 * Entité représentant une citation
 */
class Quote extends AbstractEntity
{
    /**
     * Texte de la citation
     */
    private string $quote;

    /**
     * Explication de la citation (optionnelle)
     */
    private ?string $explanation = null;

    /**
     * Identifiant de l'auteur associé (optionnel)
     */
    private ?int $author_id = null;


    /**
     * Retourne le texte de la citation
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * Définit le texte de la citation
     * @param string $quote
     * @return self
     */
    public function setQuote(string $quote): self
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * Retourne l'explication de la citation
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * Définit l'explication de la citation
     * @param string|null $explanation
     * @return self
     */
    public function setExplanation(?string $explanation): self
    {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Retourne l'identifiant de l'auteur associé
     * @return int|null
     */
    public function getAuthor_id(): ?int
    {
        return $this->author_id;
    }

    /**
     * Définit l'identifiant de l'auteur associé
     * @param int|null $author_id
     * @return self
     */
    public function setAuthor_id(?int $author_id): self
    {
        $this->author_id = $author_id;
        return $this;
    }
}

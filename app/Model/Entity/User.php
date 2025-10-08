<?php


namespace App\Model\Entity;

/**
 * Represents a user in the system.
 */
class User extends AbstractEntity
{
  

    /**
     * mail de l'utilisateur
     * @var string|null
     */
    private ?string $mail = null;

    /**
     * Mot de passe de l'utilisateur
     * @var string|null
     */
    private ?string $password = null;

    /**
     * Droit d'administration de l'utilisateur
     * @var bool
     */
    private ?bool $isAdmin = false;


    /**
     * Token de l'utilisateur pour la réinitialisation du mot de passe
     * @var string|null
     */
    private ?string $token = null;



    /**
     * Retourne le mail de l'utilisateur
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }


    /**
     * Modifie le mail de l'utilisateur
     * @param string $mail
     * @return User
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }


    /**
     * Retourne le mot de passe de l'utilisateur
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }


    /**
     * Modifie le mot de passe de l'utilisateur
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }


    /**
     * Retourne le droit d'administration de l'utilisateur
     * @return bool
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }


    /**
     * Modifie le droit d'administration de l'utilisateur
     * @param bool $isAdmin
     * @return User
     */
    public function setIsAdmin(bool $isAdmin = false): self
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }


    /**
     * Retourne le token de l'utilisateur
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Modifie le token de l'utilisateur
     * @param string|null $token
     * @return User
     */

    public function setToken(?string $token =null): self
    {
        $this->token = $token;
        return $this;
    }
}
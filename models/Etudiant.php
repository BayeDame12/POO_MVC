<?php

class Etudiant extends User {
    private string $maticule;
    private string $sex;
    private string $adresse;

    public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }

    /**
     * @return string
     */
    public function getMaticule(): string
    {
        return $this->maticule;
    }

    /**
     * @param string $maticule
     */
    public function setMaticule(string $maticule): void
    {
        $this->maticule = $maticule;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

}
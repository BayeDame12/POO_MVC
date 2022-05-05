<?php
class Personne{
    //atrubut d'instances
    private int $id;
    private string $nomComplet;
    //1- attrubut de class ou d'instance, spécififique à chaque class
    private static int $nbrepersonne;

    //2- constructeur par defaut
    public function  __construct($nomComplet)
    {
        echo  "hello tu t'appel $nomComplet </br>";
    }
    //3- donner un etat a un objet
    // *********************************************** \\
    /* getters && setter acces et modification */
/* setter = modifier */

    public function getId():int
    {
        return $this->id;
    }
    public function setId($id) : void
    {
        $this->id = $id;
    }
    public function getNomComplet() : string
    {
        return $this->nomComplet;
    }
    public function setNomComplet($nomComplet) : self
    {
        $this->nomComplet = $nomComplet;
        return $this;
    }
    //les methodes abstraites

}
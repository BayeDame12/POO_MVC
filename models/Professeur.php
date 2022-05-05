<?php
class Professeur extends  Personne{

    //fonctions navigationnelles
    /*ManyToMany avec classe*/
    public function classes() : array
    {
        return [];
    }
}
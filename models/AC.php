<?php

class AC extends User {
    //oneToMany=>inscription
    //premiere approche
    private array $inscription;
    //fonctions navigationnelles : 2nd approches
    public function inscriptions():array
    {
        return [];
    }

    public function __construct()
    {
        $this->role="ROLE_AC";
        $this->inscription=[];
    }
}
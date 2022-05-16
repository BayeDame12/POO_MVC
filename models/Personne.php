<?php
    namespace App\Model;
    use App\Core\Model;
    echo"vous etes dans PERSONNE";
    Echo"</br>";

//Classe concrète on connait sa def, elle n'a que des méthodes concrètes
//Classe abstraite on ne connait pas sa definition, elle peut avoir des méthodes concrètes et abstraites, elle est non instantiable
//Classe finale : elle ne peuvent pas avoir de classes filles.

abstract class Personne extends Model{
        // Attributs d'instances
        protected int $id;
        protected string $etat;
        protected string $nomComplet;
        // Attribut de classes / statique
        protected static int $nombrePersonne;
        protected static string $role;

        // Methode statique
        public static function getNbrePersonne()
        {
            return self::$nombrePersonne; //:: opérateur de portée de classe
        }
        public static function setNbrePersonne($nbrePersonne)
        {
           self::$nombrePersonne = $nbrePersonne; //:: opérateur de portée de classe
        }

        // Getters et setters
        public function getId():int {
            return $this->id;
        }
        public function setId(int $id):self {
            $this->id = $id;
            return $this; //permet de faire ceci  
        }

        public function getnomComplet():string {
            return $this->nomComplet;
        }

        public function setnomComplet(string $nomComplet):string {
            return $this->nomComplet=$nomComplet;
         
	    }
    } 

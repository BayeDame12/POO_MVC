<?php
    namespace App\Model;
    echo"vous etes dans RP";
    Echo"</br>";

    class RP extends User{

        public function __construct() {
            parent::$role = "ROLE_RP";
            $this->inscriptions = [];
        }
        //one to many prof,  un RP plusieurs ajouts de profs
        //fonctions navigationnelles => fonctions issues des associations
        public function professeurs():array{
            return [];
        }

        //one to many classes,  un RP plusieurs ajouts de classes
        public function classes():array{
            return [];
        }

        //one to many demandes,  un RP plusieurs traitements de demandes
        public function demandes():array{
            return [];
        }

        public static function findAll():array{   
            
            $db = parent::database();
            $db->connectionBD();
                $sql = "SELECT id_personne, nom_complet, role, login FROM ".parent::table()." WHERE role LIKE '".parent::role("ROLE_RP")."'";
                $results = $db->executeSelect($sql);
            $db->closeConnection();
            return $results;      
        }
        public function insert():int{
          
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO personne (`nom_complet`, `role`, `login`, `password`) VALUES ( ?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->nomComplet,  parent::$role,  $this->login, $this->password]);
            $db->closeConnection();
            return $result;     
        }
    }
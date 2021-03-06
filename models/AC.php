<?php

    namespace App\Model;

    class AC extends User{
        //attributs navigationnels => attributs issus des associations
        //one to many inscription,  un attache plusieurs inscriptions
        //premiere approche
        private array $inscriptions;

        public function __construct() {
            parent::$role = "ROLE_AC";
            $this->inscriptions = [];
        }
        //2eme approche
        //fonctions navigationnelles => fonctions issues des associations
        public function inscriptions():array{
         
            return [];
        }
      
        public static function findAll():array{   
            // echo"BIENVENUE la methode AC";
            $db = parent::database();
            $db->connectionBD();
                $sql = "SELECT * FROM ".parent::table()." WHERE role LIKE '".parent::role("ROLE_AC")."'";
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

  
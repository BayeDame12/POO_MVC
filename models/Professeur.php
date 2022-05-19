<?php
    namespace App\Model;
Echo"</br>";
    class Professeur extends Personne{
        private string $grade;

        public function __construct() {
            parent::$role = "ROLE_PROFFESSEUR";
            $this->inscriptions = [];
        }
        //many to many avec classe - Approche fonction navigationnelles
        public function classes():array{
            return [];
        }

        //many to many avec modules - plusieurs modules plusieurs profs
        public function modules():array{
            return [];
        }

        //many to one avec RP - plusieurs profs ajoutes par 1 RP
         public function RP():RP{
            return new RP();
        } 

        public function getGrade()
        {
            return $this->grade;
        }

        public function setGrade($grade):self
        {
            $this->grade = $grade;
            return $this;
        }

     
           
        public static function findAll():array{   
            
            $db = parent::database();
            $db->connectionBD();
                $sql = "SELECT id_personne, nom_complet, role, grade FROM ".parent::table()." WHERE role LIKE '".parent::role("ROLE_PROFFESSEUR")."'";
                $results = $db->executeSelect($sql);
            $db->closeConnection();
            return $results;      
        }  

        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO personne (`nom_complet`, `role`, `grade`) VALUES (?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->nomComplet,parent::$role,  $this->grade]);
            $db->closeConnection();
            return $result;     
        }
    }



<?php
    namespace App\Model; 
    class Etudiant extends User{
        private string $matricule;
        private string $adresse;
        private string $sexe;
        
        public function __construct() {
            parent::$role = "ROLE_ETUDIANT";
            $this->inscriptions = [];
        }
        //one to many avec demande - 1 etu plusieurs demandes
        public function demandes():array{
            return [];
        }

        public function getMatricule()
        {
            return $this->matricule;
        }

        public function setMatricule($matricule):self
        {
            $this->matricule = $matricule;
            return $this;
        }

        public function getAdresse()
        {
            return $this->adresse;
        }

        public function setAdresse($adresse):self
        {
            $this->adresse = $adresse;
            return $this;
        }

        public function getSexe()
        {
            return $this->sexe;
        }

        public function setSexe($sexe):self
        {
            $this->sexe = $sexe;
            return $this;
        }
        public static function findAll():array{   
            
            $db = parent::database();
            $db->connectionBD();
                $sql = "SELECT id_personne, nom_complet, role, login, password, matricule,adresse,sexe FROM ".parent::table()." WHERE role LIKE '".parent::role("ROLE_ETUDIANT")."'";
                $results = $db->executeSelect($sql);
            $db->closeConnection();
            return $results;      
        }
      
        public function insert():int{
            $db = parent::database();
            $db->connectionBD();
                $sql = "INSERT INTO personne (`nom_complet`, `role`, `login`, `password`, `matricule`, `adresse`, `sexe`) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $result = $db->executeUpdate($sql, [$this->nomComplet,parent::$role,  $this->login,  $this->password,  $this->matricule,  $this->adresse,  $this->sexe]);
            $db->closeConnection();
            return $result;     
        }
    }
    
<?php
   namespace App\Model;
//    use App\Core\Controller;
//    use App\Core\Request;
//    use App\Model\AC;
//    use App\Model\RP;
//    use App\Model\Etudiant;
//    use App\Model\Inscription;
//    use App\Model\Module;
   

    class Module{
        private int $id;
        private string $libelle;
        private string $etat;

        //many to many avec professeurs - Approche fonction navigationnelles
         public function professeurs():array{
            return [];
        }

        //many to one avec RP - plusieurs modules ajoutes par 1 RP
        public function RP():RP{
            return new RP();
        }
        
        public function getId()
        {
            return $this->id;
        }
 
        // public function setId($id):self
        // {
        //     $this->id = $id;
        //     return $this;
        // }

        public function getNom()
        {
            return $this->libelle;
        }

        public function setNom($nom):self
        {
            $this->libelle = $nom;
            return $this;
        }

        public function getEtat()
        {
            return $this->etat;
        }

        public function setEtat($etat):self
        {
            $this->etat = $etat;
            return $this;
        }
        // public static function insert():int{
        //     $db = parent::database();
        //     $db->connectionBD();
        //     $sql = "INSERT INTO classe (`id_module`, `libelle`, `etat`) VALUES (?, ?, ?)";
        //     $result = $db->executeUpdate($sql, [$id, $libelle,  $etat]);
        //     $db->closeConnection();
        //     return $result;     
        // }
        // public static function findAll():array{   
            
        //     $db = parent::database();
        //     $db->connectionBD();
        //     $sql = "SELECT * FROM ".parent::table();
            
        //         $results = $db->executeSelect($sql);
        //         $db->closeConnection();
        //         return $results;      
        //     }  
    }
<?php
    namespace App\Core;
    // echo"vous etes dans Model";
    // echo"</br>";

    class Model implements IModel{
        public static function table():string{
            // echo"BIENVENUE la methode table ";   
            // echo"</br>";
            $table = get_called_class();
            $table = str_replace("App\\Model\\", "", $table);
            $table = ($table == "Professeur" or $table == "AC" or $table == "RP" or $table == "Etudiant" or $table == "User") ? "personne" : strtolower($table);
            return $table;
            // return get_called_class();
        }

        public static function role($role) {  
            // echo"BIENVENUE la methode role ";   
            // echo"</br>";
            return  $role;
        }

       //dependance voir diag de classes:creation dun objet de type database
        protected  static function database():Database{
            // echo"BIENVENUE la methode database ";   
            // echo"</br>";
            return new Database();
        }

        public function insert():int{
            echo"BIENVENUE la methode insert ";   
            echo"</br>";
            return 0;
        }
        public function update():int{
            echo"BIENVENUE la methode update ";   
            echo"</br>";
            return 0;
        }

        public static function findAll():array{
            echo"BIENVENUE la methode findAll ";   
            echo"</br>";
            $db = self::database();
            $db->connectionBD();
            //requete non préparée, var injectée lors de l'écriture de la requête
                $sql = "SELECT * FROM ".self::table();
                $result = $db->executeSelect($sql);
            $db->closeConnection();
            return $result;        
        }

        public static function delete(int $id):int{
            echo"BIENVENUE la methode delete ";   
            echo"</br>";
            $db = self::database();
            $db->connectionBD();
            //requete préparée, var injectée lors de l'exéxution de la requête, var remplacée par un joker, 1st joker pos -0, 2nd joker pos 1
                $sql = "DELETE FROM ".self::table()." WHERE id_personne = ?";
                $result = $db->executeUpdate($sql, [$id]);
            $db->closeConnection();
            return $result;
        }
        
        public static function findById(int $id_personne):object|null{

            $db = self::database();
            $db->connectionBD();
                $sql = "SELECT * FROM ".self::table()." WHERE id_personne = ?";
                $result = $db->executeSelect($sql, [$id_personne],true);
            $db->closeConnection();
            return $result; 
        }

        public static function findBy(string $sql, array $data=null, $single=false):object|null|array{
            echo"BIENVENUE la methode findBy ";   
            echo"</br>";
            $db = self::database();
            $db->connectionBD();
                $result = $db->executeSelect($sql, $data, $single);
            $db->closeConnection();
            return $result; 
        }
    }
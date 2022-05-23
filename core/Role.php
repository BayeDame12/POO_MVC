<?php
namespace App\Core;
class Role{

 public static function getRole(){
       return $_SESSION['user-connect']->role;
    }
    public static function getUser(){
        return $_SESSION['user-connect']->nom_complet;
     }
     

}



<?php

use App\Model\AC;
use App\Model\Etudiant;
use App\Model\Professeur;
use App\Model\RP;

/* require_once("../core/functions.php"); */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Echo"</br>";
// echo"vous etes dans le FRONT CONTROLLEUR";
// Echo"</br>";

require ('../vendor/autoload.php');
require_once ("../core/functions.php");
require_once ("../routes/route.web.php");

/***  CONTROLLEUR/METHOD/PARAMETRE  ****/
// $per=new Etudiant();
// $per->setnomComplet("Mamy Gueye");
// $per->setlogin("Mamy@gamil.com");
// $per->setpassword("Mamy12345");
// $per->setMatricule("12003");
// $per->setAdresse("Saint-louis");
// $per->setSexe("F");
// $per->insert();

// $per=new RP();
// $per->setnomComplet("Cheikhou Diop");
// $per->setlogin("Cheikhou@gamil.com");
// $per->setpassword("Cheikhou");
// $per->insert();

//     INSERER AC                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

// $per=new AC();
// $per->setnomComplet("Birame Diouf");
// $per->setlogin("dioufy@gmail.com");
// $per->setpassword("diouf1223",);
// $per->insert();
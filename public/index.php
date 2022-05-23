<?php
use App\Core\Role;
session_start();
// unset($_SESSION['user-connect']);
// use App\Model\AC;
// use App\Model\Etudiant;
use App\Model\User;
use App\Model\Professeur;
use App\Model\Clase;
use App\Core\Model;
// echo"<pre>";
// print_r($_SESSION['user-connect']->role);
// echo"</pre>";
// die();
// echo"vous etes dans index";
// Echo"</br>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ('../vendor/autoload.php');
require_once ("../core/functions.php");
require_once ("../routes/route.web.php");

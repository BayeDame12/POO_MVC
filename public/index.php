<?php
use App\Core\Role;
session_start();


use App\Model\User;
use App\Model\Professeur;
use App\Model\Clase;
use App\Core\Model;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ('../vendor/autoload.php');
require_once ("../core/functions.php");
require_once ("../routes/route.web.php");

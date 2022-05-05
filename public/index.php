<?php
// show errors when there's
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// inclure le fichier
require_once('../models/Personne.php');
require_once('../models/AC.php');
require_once('../models/Inscription.php');
require_once('../models/Professeur.php');

$ac = new AC();

$professeur = new Professeur();



<?php
namespace APP\Exception;
echo"vous etes dans EXCEPTION";
Echo"</br>";

class RouteNotFoundException extends \Exception{

public $message="Page Not Found ,erreur 404";       


}
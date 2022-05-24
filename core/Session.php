<?php
namespace App\Core;
use App\Model\User;
class Session{

     private User $user;
public function __construct(){
	if (session_status() == PHP_SESSION_NONE){
		session_start();
	}
}
//Ajouter une donnees dans une session  
public function getSession(string $key) {
	return $_SESSION[$key];
}
//Modifier une donnees dans une session  

public function setSession (string $key,$data){
	$_SESSION[$key]=$data;
}
	/**
	 * 
	 * @return User
	 */
	function getUser(): User {
		return $this->user;
	}	
	/**
	 * 
	 * @param User $user 
	 * @return Session
	 */
	function setUser(User $user): self {
		$this->user = $user;
		return $this;
	}
	public static function is_connect(){
     return isset($_SESSION['user-connect']);
	}
}
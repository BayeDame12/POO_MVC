<?php
namespace App\Core;
use App\Model\User;
class Session{

     private User $user;
public function __construct(){
    // if( )
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
}
<?php
    use App\Core\Role;

    function dd($data):void{
        echo "<pre>";
        var_dump($data);
        echo "<\pre>";
        die();
    }


function showNav(){
  return !isset($_SESSION['user-connect'])?"d-none":"";
}

function hiden(array $except,$hidden=true){
foreach($except as $perConect){
if(Role::getRole()==$perConect){
  return $hidden ? "d-none":"disabled";
}
}
return "";
}


    
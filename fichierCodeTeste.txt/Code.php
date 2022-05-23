<!-- //     INSERER PROFFESSEUR                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

$per=new Professeur();
$per->setnomComplet("Mor diouf");
$per->setGrade("ingenieur");
$per->insert();

//     INSERER AC                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

$per=new AC();
$per->setnomComplet("Birame Diouf");
$per->setlogin("dioufy@gmail.com");
$per->setpassword("diouf1223",);
$per->insert();


class HtmlProvider{
    public static function td(array $columns,array $rows) {
        foreach($columns as $column){
       $html.="td".$row->$column."td";
        }


}


/***  CONTROLLEUR/METHOD/PARAMETRE  ****/
// $per=new Etudiant();
// $per->setnomComplet("Mamy Gueye");
// $per->setlogin("Mamy@gamil.com");
// $per->setpassword("Mamy12345");
// $per->setMatricule("12003");
// $per->setAdresse("Saint-louis");
// $per->setSexe("F");
// $per->insert();


$$$$$$$$$$$$$$$$$$$$**********************


function showNav(){
  return !isset($_SESSION['user-connect'])?"d-none":"";
}


function displayNone(array $excepts){
  return in_array("*",$excepts)?"d-none":"";

  foreach($excepts as $tra){
    if(isset($_SESSION['user-connect']) && $_SESSION['user-connect']->role==$tra){
      
      return "d-none";
    }

  }
  return "";

}


$$$$$$$$$$$$$$$$$$$$**********************
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
?> -->
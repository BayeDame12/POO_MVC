//     INSERER PROFFESSEUR                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

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

<?php 
class HtmlProvider{
    public static function td(array $columns,array $rows) {
        foreach($columns as $column){
       $html.="td".$row->$column."td";
        }


}
?>
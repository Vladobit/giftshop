<?php
class ModelAdministrators extends DB
{
//class members
private $admin_id= -1;
private $admin_username = "";
private $admin_password ="";
private $last_login = "1970-01-01 12:00:00";
private $admin_edit = "noedit";
private $admin_delete ="nodelete";
private $admin_insert="noinsert";


public function loginAdministrator($admin_username,$admin_password){
     $sql="administrators WHERE admin_username LIKE '$admin_username' AND
     admin_password LIKE '$admin_password'";
     return parent::selectRow($sql);
}}

// public function insertAdministrators($admin_username){
//     //  $table_name = "administrators"; na mesto ova mozi da se koristi this->
//     // $column_name= "carousel_img";
//     $column_values = "'$carousel_img'";
//     // parent :: insertRow($this->table_name,$column_name,$column_values);
//     $procedure_name = "_insertCarousel";//store procedure
//     parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
// }

// public function deleteCarousel($pk_value){
//     $procedure_name = "_deleteCarousel";// povikuvanje delete so store procedure
//     parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
//     // $pk_name="carousel_id";//obicen
//     // parent::deleteRow($this->table_name,$pk_name,$pk_value); //obicen 
// }}

// /*
// $instanceModelMarki = newModelMarki();
// $instanceModelMarki->insertMarki(1,'Ford','D',125654455,'Dovledzik 1');
// $instanceModelMarki->selectMarki();
// $instanceModelMarki->deleteMarki(5);
// */

?>
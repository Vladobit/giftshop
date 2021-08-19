<?php
class ModelCompany extends DB
{
//class members
private $table_name="company";

public function insertCompany($company_name,$company_adresa,$company_mesto,$company_telefon,$company_logo){
    $column_name= "company_name,company_adresa,company_mesto,company_telefon,company_logo";
    $column_values = "'$company_name','$company_adresa','$company_mesto',$company_telefon,'$company_logo'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertCompany";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

public function selectCompany(){
   return parent :: selectRow($this->table_name);
}
public function deleteCompany($pk_value){
     $pk_name = "company_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteCompany";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>
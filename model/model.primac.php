<?php
class ModelPrimac extends DB
{
//class members
private $table_name = "primac";

public function insertPrimac($primac_first_name,$primac_last_name,$primac_adresa,$primac_telefon,$city_id){
    $column_name= "primac_first_name,primac_last_name,primac_adresa,primac_telefon,city_id";
    $column_values = "'$primac_first_name','$primac_last_name','$primac_adresa',$primac_telefon,$city_id";
    parent :: insertRow($this->table_name,$column_name,$column_values);
}
public function selectPrimac(){
    $sql ="primac INNER JOIN city 
          on primac.city_id = city.city_id";// poslozen sql
    return parent :: selectRow($sql);
}
public function deletePrimac($pk_value){
    $pk_name = "primac_id";
    parent :: deleteRow($this->table_name,$pk_name,$pk_value);
}
}


?>
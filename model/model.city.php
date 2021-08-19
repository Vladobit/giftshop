<?php
class ModelCity extends DB
{
//class members
private $table_name="city";

public function insertCity($city_name,$city_region){
    $column_name= "city_name,city_region";
    $column_values = "'$city_name','$city_region'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertCity";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

public function selectCity(){
   return parent :: selectRow($this->table_name);
}
public function deleteCity($pk_value){
     $pk_name = "city_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteCity";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>
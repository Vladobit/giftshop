<?php
class ModelCategory extends DB
{
//class members
private $table_name="category";

public function insertCategory($category_name){
    $column_name= "category_name";
    $column_values = "'$category_name'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertCategory";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}

public function selectCategory(){
   return parent :: selectRow($this->table_name);
}
public function deleteCategory($pk_value){
     $pk_name = "category_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteCategory";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>
<?php
class ModelPripaga extends DB
{
//class members
private $table_name = "pripaga";

// public function insertPripaga($product_name,$product_cover ,$product_price_n,$product_price_p,$product_description,$product_text){
//     $column_name= "product_name,product_cover,product_price_n,product_price_p,product_description,product_text";
//     $column_values = "'$product_name','$product_cover',$product_price_n,$product_price_p,'$product_description','$product_text'";
//     parent :: insertRow($this->table_name,$column_name,$column_values);
// }
public function selectPripaga(){
   $sql= " pripaga INNER JOIN products
           ON pripaga.product_id=products.product_id
           INNER JOIN category
           ON pripaga.category_id=category.category_id";//slozen 
    return parent :: selectRow($sql);
}
public function deletePripaga($pk_value){
    $pk_name = "pripaga_id";
    parent :: deleteRow($this->table_name,$pk_name,$pk_value);
}
}


?>
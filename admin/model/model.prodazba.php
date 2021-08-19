<?php
class ModelProdazba extends DB
{
//class members
private $table_name = "prodazba";

// public function insertPripaga($product_name,$product_cover ,$product_price_n,$product_price_p,$product_description,$product_text){
//     $column_name= "product_name,product_cover,product_price_n,product_price_p,product_description,product_text";
//     $column_values = "'$product_name','$product_cover',$product_price_n,$product_price_p,'$product_description','$product_text'";
//     parent :: insertRow($this->table_name,$column_name,$column_values);
// }
public function selectProdazba(){
   $sql= " prodazba INNER JOIN users
           ON prodazba.user_id=users.user_id
           INNER JOIN primac
           ON prodazba.primac_id=primac.primac_id
           INNER JOIN products
           ON prodazba.product_id=products.product_id";//slozen 
    return parent :: selectRow($sql);
}
public function deleteProdazba($pk_value){
    $pk_name = "prodazba_id";
    parent :: deleteRow($this->table_name,$pk_name,$pk_value);
}
}


?>
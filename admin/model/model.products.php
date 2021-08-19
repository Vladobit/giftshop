<?php
class ModelProducts extends DB
{
//class members
private $table_name = "products";

public function insertProducts($product_name,$product_cover ,$product_price_n,$product_price_p,$product_description,$product_text,$company_id,$category_id){
    $column_name= "product_name,product_cover,product_price_n,product_price_p,product_description,product_text,company_id,category_id";
    $column_values = "'$product_name','$product_cover',$product_price_n,$product_price_p,'$product_description','$product_text',$company_id,$category_id";
    parent :: insertRow($this->table_name,$column_name,$column_values);
}
public function selectProducts(){
    $sql= " products INNER JOIN company
    ON products.company_id=company.company_id
    INNER JOIN category
    ON products.category_id=category.category_id";//slozen 
    return parent :: selectRow($sql);
}
public function deleteProducts($pk_value){
    $pk_name = "product_id";
    parent :: deleteRow($this->table_name,$pk_name,$pk_value);
}
}


?>
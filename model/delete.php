<?php
include "../classes/database.php";//parent
$data=json_decode(file_get_contents("php://input"));
//var_damp($data);
$table_name = $data[0]->table_name;
$pk_value = $data[0]->pk_value;
switch($table_name){
    case "category":
        include 'model.category.php';
        $instanceModelCategory = new ModelCategory();
        $instanceModelCategory->deleteCategory($pk_value);
    break;
    case "city":
        include 'model.city.php';
        $instanceModelCity = new ModelCity();
        $instanceModelCity->deleteCity($pk_value);
    break;
    case "company":
        include 'model.company.php';
        $instanceModelCompany = new ModelCompany();
        $instanceModelCompany->deleteCompany($pk_value);
    break;
    case "primac":
        include 'model.primac.php';
        $instanceModelPrimac = new ModelPrimac();
        $instanceModelPrimac->deletePrimac($pk_value);
    break;
    case "products":
        include 'model.products.php';
        $instanceModelProducts = new ModelProducts();
        $instanceModelProducts->deleteProducts($pk_value);
    break;
    case "users":
        include 'model.users.php';
        $instanceModelUsers = new ModelUsers();
        $instanceModelUsers->deleteUsers($pk_value);
    break;
}?>
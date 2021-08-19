<?php
include "../classes/database.php";//parent
$data=json_decode(file_get_contents("php://input"));
//var_damp($data);
$table_name = $data[0]->table_name;

switch($table_name){
    case "category":
        include 'model.category.php';
        $instanceModelCategory = new ModelCategory();
        $category_name = $data[0]->category_name;
        $instanceModelCategory->insertCategory($category_name);
    break;
    case "city":
        include 'model.city.php';
        $instanceModelCity = new ModelCity();
        $city_name = $data[0]->city_name;
        $city_region = $data[0]->city_region;
        $instanceModelCity->insertCity( $city_name, $city_region);
    break;
    case "company":
        include 'model.company.php';
        $instanceModelCompany = new ModelCompany();
        $company_name = $data[0]->company_name;
        $company_adresa= $data[0]->company_adresa;
        $company_mesto = $data[0]->company_mesto;
        $company_telefon = $data[0]->company_telefon;
        $company_logo = $data[0]->company_logo;
        $instanceModelCompany->insertCompany( $company_name,$company_adresa,$company_mesto,$company_telefon,$company_logo);
    
    break; 
    case "primac":
        include 'model.primac.php';
        $instanceModelPrimac = new ModelPrimac();
        $primac_first_name = $data[0]->primac_first_name;
        $primac_last_name = $data[0]->primac_last_name;
        $primac_adresa = $data[0]->primac_adresa;
        $primac_telefon = $data[0]->primac_telefon;
        $city_id=$data[0]->city_id;
        $instanceModelPrimac->insertPrimac($primac_first_name,$primac_last_name,$primac_adresa,$primac_telefon,$city_id);
    break;
    case "products":
        include 'model.products.php';
        $instanceModelProducts = new ModelProducts();
        $product_name = $data[0]->product_name;
        $product_cover = $data[0]->product_cover;
        $product_price_n = $data[0]->product_price_n;
        $product_price_p= $data[0]->product_price_p;
        $product_description = $data[0]->product_description;
        $product_text= $data[0]->product_text;
        $company_id= $data[0]->company_id;
        $category_id= $data[0]->category_id;
        $instanceModelProducts->insertProducts($product_name,$product_cover,$product_price_n,$product_price_p,$product_description,$product_text,$company_id,$category_id); 
    break;
    case "users":
        include 'model.users.php';
        $instanceModelUsers = new ModelUsers();
        $user_first_name = $data[0]->user_first_name;
        $user_last_name = $data[0]->user_last_name;
        $user_mobile = $data[0]->user_mobile;
        $user_email = $data[0]->user_email;
        $user_password =sha1($data[0]->user_password);       
        $instanceModelUsers->insertUsers($user_first_name,$user_last_name,$user_mobile,$user_email,$user_password);
    break;    

}

?>
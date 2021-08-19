<?php
include "../classes/database.php";//parent
$table_name = $_GET["table_name"];
$d = array();

switch($table_name){
    case "category":
        include "model.category.php";//chiled
        $instanceModelCategory = new ModelCategory();
        $results=$instanceModelCategory->selectCategory();
        foreach($results as $row){
            $d["records"][]= array("category_id" =>$row["category_id"],
                                   "category_name"=>$row["category_name"]);
            }
            echo json_encode($d);
    break;
    case "city":
        include 'model.city.php';
        $instanceModelCity = new ModelCity();
        $results=$instanceModelCity->selectCity();
        foreach($results as $row){
            $d["records"][]= array("city_id"=>$row["city_id"],
                                   "city_name"=>$row["city_name"],
                                   "city_region"=>$row["city_region"]);
            }
            echo json_encode($d);
    break;
    case "company":
        include 'model.company.php';
        $instanceModelCompany = new ModelCompany();
        $results=$instanceModelCompany->selectCompany();
        foreach($results as $row){
            $d["records"][]= array("company_id"=>$row["company_id"],
                                   "company_name"=>$row["company_name"],
                                   "company_adresa"=>$row["company_adresa"],
                                   "company_mesto"=>$row["company_mesto"],
                                   "company_telefon"=>$row["company_telefon"],
                                   "company_logo"=>$row["company_logo"]);
            }
            echo json_encode($d);
    break;
    case "primac":
        include 'model.primac.php';
        $instanceModelPrimac = new ModelPrimac();
        $results=$instanceModelPrimac->selectPrimac();
        foreach($results as $row){
            $d["records"][]= array("primac_id"=>$row["primac_id"],
                                   "primac_first_name"=>$row["primac_first_name"],
                                   "primac_last_name"=>$row["primac_last_name"],
                                   "primac_adresa"=>$row["primac_adresa"],
                                   "primac_telefon"=>$row["primac_telefon"],
                                   "city_id"=>$row["city_id"],
                                   "city_name"=>$row["city_name"],
                                   "city_region"=>$row["city_region"]);
            }
            echo json_encode($d);
    break;
    case "pripaga":
        include 'model.pripaga.php';
        $instanceModelPripaga = new ModelPripaga();
        $results=$instanceModelPripaga->selectPripaga();
        foreach($results as $row){
            $d["records"][]= array("pripaga_id"=>$row["pripaga_id"],
                                   "product_id"=>$row["product_id"],
                                   "product_name"=>$row["product_name"],
                                   "product_cover"=>$row["product_cover"],
                                   "product_price_n"=>$row["product_price_n"],
                                   "product_price_p"=>$row["product_price_p"],
                                   "product_description"=>$row["product_description"],
                                   "product_text"=>$row["product_text"],
                                   "category_id" =>$row["category_id"],
                                   "category_name"=>$row["category_name"]);
            }
            echo json_encode($d);
    break;
    case "prodazba":
        include 'model.prodazba.php';
        $instanceModelProdazba = new ModelProdazba();
        $results=$instanceModelProdazba->selectProdazba();
        foreach($results as $row){
            $d["records"][]= array("prodazba_id"=>$row["prodazba_id"],
                                   "prodazba_status"=>$row["prodazba_status"],
                                   "prodazba_data"=>$row["prodazba_data"],
                                   "user_id"=>$row["user_id"],
                                   "user_first_name"=>$row["user_first_name"],
                                   "user_last_name"=>$row["user_last_name"],
                                   "user_mobile"=>$row["user_mobile"],
                                   "user_email"=>$row["user_email"],
                                   "primac_id"=>$row["primac_id"],
                                   "primac_first_name"=>$row["primac_first_name"],
                                   "primac_last_name"=>$row["primac_last_name"],
                                   "primac_adresa"=>$row["primac_adresa"],
                                   "primac_telefon"=>$row["primac_telefon"],
                                   "product_id"=>$row["product_id"],
                                   "product_name"=>$row["product_name"],
                                   "product_cover"=>$row["product_cover"],
                                   "product_price_n"=>$row["product_price_n"],
                                   "product_price_p"=>$row["product_price_p"],
                                   "product_description"=>$row["product_description"],
                                   "product_text"=>$row["product_text"]);
            }
            echo json_encode($d);
    break;
    case "products":
        include 'model.products.php';
        $instanceModelProducts = new ModelProducts();
        $results=$instanceModelProducts->selectProducts();
        foreach($results as $row){
            $d["records"][]= array("product_id"=>$row["product_id"],
                                   "product_name"=>$row["product_name"],
                                   "product_cover"=>$row["product_cover"],
                                   "product_price_n"=>$row["product_price_n"],
                                   "product_price_p"=>$row["product_price_p"],
                                   "product_description"=>$row["product_description"],
                                   "product_text"=>$row["product_text"],
                                   "company_id"=>$row["company_id"],
                                   "company_name"=>$row["company_name"],
                                   "category_id"=>$row["category_id"],
                                   "category_name"=>$row["category_name"]);

            }
            echo json_encode($d);
    break;
    case "users":
        include 'model.users.php';
        $instanceModelUsers = new ModelUsers();
        $results = $instanceModelUsers->selectUsers();
        foreach($results as $row){
        $d["records"][]= array("user_id"=>$row["user_id"],
                               "user_first_name"=>$row["user_first_name"],
                               "user_last_name"=>$row["user_last_name"],
                               "user_mobile"=>$row["user_mobile"],
                               "user_email"=>$row["user_email"],
                               "user_password"=>$row["user_password"]);
        }
        echo json_encode($d);
    break;
}?>
<?php

session_start();

include "../../classes/database.php";//parent
include "model.administrators.php";//child

$data=json_decode(file_get_contents("php://input"));
$admin_username=$data[0]->admin_username;
$admin_password=sha1($data[0]->admin_password);
$login=array();

$instanceModelAdministrators = new ModelAdministrators();
$results = $instanceModelAdministrators->loginAdministrator($admin_username,$admin_password);

foreach($results as $row){
    if($row["admin_id"]>0)
    {
        $_SESSION["login_id"] = $row["admin_id"];
        $_SESSION["login_status"] = "true";
        $login['records'][]=array("login_id"=>$_SESSION["login_id"],
        "login_status"=>"true");
       // header('Location:https://giftshopmk.000webhostapp.com/admin/main.html');exit();
    break;
    }
    else {
        $_SESSION["login_status"] = "false";
        $login['records'][]=array("login_id"=>-1,"login_status"=>false);
        
       // header('Location:https://giftshopmk.000webhostapp.com/admin/index.html');exit();
    }
}

echo json_encode($login);


?>

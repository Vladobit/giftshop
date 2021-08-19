<?php

session_start();

include "../classes/database.php";//parent
include "model.users.php";//child

$data=json_decode(file_get_contents("php://input"));
$username=$data[0]->user_first_name;
$user_password=sha1($data[0]->user_password);
$login_user=array();

$instanceModelUsers = new ModelUsers();
$results = $instanceModelUsers->loginUser($username,$user_password);

foreach($results as $row){
    if($row["user_id"]>0)
    {
        $_SESSION["login_user_id"] = $row["user_id"];
        $_SESSION["login_user_status"] = "true";
        $login_user['records'][]=array("login_user_id"=>$_SESSION["login_user_id"],
        "login_user_status"=>"true");
      // header("Location:main.html");exit();
    break;
    }
    else {
        $_SESSION["login_user_status"] = "false";
        $login_user['records'][]=array("login_user_id"=>-1,"login_user_status"=>false);
        
       // header("Location:main.html");exit();
    }
}

echo json_encode($login_user);


?>

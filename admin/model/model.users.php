<?php
class ModelUsers extends DB
{
//class members
private $table_name="users";

public function insertUsers($user_first_name,$user_last_name,$user_mobile,$user_email,$user_password){
    $column_name= "user_first_name,user_last_name,user_mobile,user_email,user_password";
    $column_values = "'$user_first_name','$user_last_name',$user_mobile,'$user_email','$user_password'";
     parent :: insertRow($this->table_name,$column_name,$column_values);
    //$procedure_name = "_insertUsers";//store procedure
    //parent :: callStoreProcedure($procedure_name,$column_values);//store procedure
}
public function loginUser($user_first_name,$user_password){
    $sql="users WHERE user_first_name LIKE '$user_first_name' AND
    user_password LIKE '$user_password'";
    return parent::selectRow($sql);
}


public function selectUsers(){
   return parent :: selectRow($this->table_name);
}
public function deleteUsers($pk_value){
     $pk_name = "user_id";
     parent :: deleteRow($this->table_name,$pk_name,$pk_value);
    //$procedure_name = "_deleteUsers";// povikuvanje delete so store procedure
    //parent :: callStoreProcedure($procedure_name,$pk_value);// povikuvanje delete so store procedure
}
}
?>
<?php
session_start ();

if (time()<$_SESSION['time']+300){
    $_SESSION['time'] = time();
}else{
    session_destroy();
    session_start();
    $_SESSION['time']=time();
}
?>
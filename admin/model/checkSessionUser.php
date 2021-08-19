<?php-

require_once'session.php';//open session
$contentValue="";
$content="";

$content='{"records":[';
    if (($_SESSION['login_status'] ==  "true") && ($_SESSION['login_id'] !=""))$content.='{"loggIn":"true"}';
    if (($_SESSION['login_status'] == "false") || ($_SESSION['login_id'] ==""))$content.='{"loggIn":"false"}';
    header('location:../index.html');exit();
    $content.=']}';

    //print JSON file

    echo ($content);

?>
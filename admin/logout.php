<?php
session_start();
if(isset($_SESSION['email'])){
    $_SESSION = array();
    
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }
   
    session_destroy();
}
$home_url = 'login_admin.php';
header('Location:'.$home_url);
?>


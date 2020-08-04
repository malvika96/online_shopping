<?php session_start();
$_SESSION['first_name']="";
 $_SESSION['email']="";
$_SESSION['loginstatus']="";
session_destroy();


 // Destroying All Sessions
header("Location:home.php"); // Redirecting To Home Page


?>


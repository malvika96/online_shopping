<?php session_start();
$_SESSION['first']="";
 $_SESSION['last']="";
$_SESSION['loginstatus']="";
session_destroy();


 // Destroying All Sessions
header("Location:home.php"); // Redirecting To Home Page


?>


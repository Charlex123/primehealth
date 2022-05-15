<?php

$serverhost = "localhost";
$serverdbname = "fundgcmf_primehealth";
$serverusername = "root";
$serverpassword = "";


$con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
if(isset($con)) { 
// echo 'connected';
}else {
   // header("index.php");
   // exit();
}  
?>
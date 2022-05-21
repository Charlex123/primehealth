
<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','0');
require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email']) && $_POST['email'] !="" && $_POST['email'] != null && isset($_POST['log']) && $_POST['log'] !="") {
    
    $email = isset($_POST['email']) ? $_POST['email'] : false; 

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo " invalid email address, please verify your email address <i class='fas fa-times' style='color: red'></i>";
        exit();
    }
    $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
    $login = $con->prepare("SELECT * FROM users WHERE email = ? ");
    $login -> bindParam(1, $email, PDO::PARAM_STR);

    if($login->execute()){
        $re = $login -> fetch(PDO::FETCH_ASSOC);
    if($login->rowCount() > 0 ) {

    echo "match found, enter your password and click login";
    exit();
        }else if($login->rowCount() === 0 ){
        echo "we can't find a match with email <span style='color:#808080;font-style:italic;'>$email</span> <a href='register' style='text-decoration;font-style:italic;color:#008;'>create account</a>";
        
        exit();
    }
    }else {
        echo 'oops something happened';
        exit();
    }
    
}

?>


  <?php

    
    //requiring mydatabase and connection
    require_once('../config.php');

    if( isset($_POST['email']) && $_POST['email'] != "" && $_POST['email'] != null && isset($_POST['password']) && $_POST['password'] != "" && $_POST['password'] != null){
        
        $error = ""; 

        if(preg_match("/^[a-z A-Z0-9@.]*$/",$_POST['email'])) {
        $email = $_POST['email'];
 
        $password = trim($_POST['password']);
    
        $Active = 1;

            $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM users WHERE email = ? ");
            $login -> bindParam(1, $email, PDO::PARAM_STR);
            
            if($login->execute()){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            
            if($login->rowCount() == 0) {
                echo $error = "You do not have account with us, <a href='register' style='text-decoration;font-style:italic;color:#008;'>create account</a>";
                
            echo $error = "match found, enter your password and click login";
            
                }else if($login->rowCount() > 0 && password_verify($password, $re['password'])) {
                    echo $error = "account verified, click login";
                    }else{
                        
                  echo $error = "email and password does not match";
                    exit();
                }
            }else {
                echo $error = "oops something happened, check your login details and try again";
                exit();
            }
        
        
    }else {
        echo $error = "unrecognized login details";
        exit();
    }

}
    
?>
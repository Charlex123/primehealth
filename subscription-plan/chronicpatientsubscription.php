<?php 
session_start();
ini_set('display_errors','1');
require_once'../config.php';
require_once'../ranStrGen.php';

echo 'in';

echo $_POST['username'];
echo $_POST['lastname'];
echo $_POST['email'];

if(isset($_POST['email']) && isset($_POST['lastname']) && isset($_POST['username']) ) {
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $username= isset($_POST['username']) ? $_POST['username'] : false;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
    $fulladdress= isset($_POST['fulladdress']) ? $_POST['fulladdress'] : false;
    $State = isset($_POST['state']) ? $_POST['state'] : false;
    $city = isset($_POST['city']) ? $_POST['city'] : false;
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : false;
    $usercategory = isset($_POST['usercategory']) ? $_POST['usercategory'] : false;
    echo $password = isset($_POST['password']) ? $_POST['password'] : false;
    echo $confirmpassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : false;

    $eror_password = "";
        $errror_password = "";
        $error_password = "";
        $eror_email = "";
        $error_email = "";
        $errror_email = "";
        $error_phonenumber = "";
        $error_username = "";
        
        $errorSmt = "";
        
        
         if((isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) ) {
            
            //check referral Email
            $query = $con->prepare("SELECT email FROM users WHERE email = ? LIMIT 1");
            $query->bindParam(1, $Email, PDO::PARAM_STR);
            
            if( $query->execute() && $query->rowCount() > 0) {
                $eror_email =  $Email.' already taken, please choose another';
                
            }else {

            }
                      
        }

        if((isset($_POST['username']) ) ) {
            
            //check referral Email
            $query = $con->prepare("SELECT username FROM users WHERE username = ? LIMIT 1");
            $query->bindParam(1, $username, PDO::PARAM_STR);
            
            if( $query->execute() && $query->rowCount() > 0) {
                $eror_username =  $username.' already taken, please choose another';
                
            }else {

            }
                      
        }
        
        
        if($password !== $confirmpassword) {
            $error_password = 'Password and RepeatPassword do not match';
            
         } 
        if($password !== $confirmpassword) {
            $error_password = 'Password and RepeatPassword do not match';
            
         }
         if(strlen($password) < 5) {
            $error_password = 'Weak password, Password must be more than 5 characters';
            
         }
         if(strlen($password) > 5 && strlen($password) <= 16) {
            $error_password = 'Password strength..<span style="color:#800080;">Good ';
            
         }
         if(strlen($password) > 16 ) {
            $error_password = '<i class="far fa-check"></i>';
            
         }

    if(htmlentities($email) && strip_tags($username) && strip_tags($fulladdress)) {
        $username= isset($_POST['username']) ? $_POST['username'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $trackingId = RandStrGen(12);
        $ip= $_SERVER['REMOTE_ADDR'];
                            
        $passenc = password_hash($password, PASSWORD_DEFAULT, array('cost'=>11));
        $profilepics = 'images/users_profilePics/default_profilePic.png';
        $rating = 0;
        $dislikes = 0;
        $status = 'Inactive';
        $email_code = rand(00000,99999).'@'.randStrGen(50);
        $explode  = explode('@',$email_code);
        $emailCode = $explode[0];
        $timestatus = time();
        $totalsubamount = 0;
        $totalcommission = 0;
        $susbscriptionstatus = "Inactive";
        //insert comment into database
        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword); 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insert = $con -> prepare("INSERT INTO chronicpatients (trackingId,email,username,firstname,lastname,userCategory,password,profilepics,rating,emailCode,accountStatus,ip,fullAddress,state,city,zipcode,totalsubAmount,subscriptionStatus,timestatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insert -> bindParam(1,$trackingId);
        $insert -> bindParam(2,$email);
        $insert -> bindParam(3,$username);
        $insert -> bindParam(4,$firstname);
        $insert -> bindParam(5,$lastname);
        $insert -> bindParam(6,$usercategory);
        $insert -> bindParam(7,$passenc);
        $insert -> bindParam(8,$profilepics);
        $insert -> bindParam(9,$rating);
        $insert -> bindParam(10,$emailCode);
        $insert -> bindParam(11,$status);
        $insert -> bindParam(12,$ip);
        $insert -> bindParam(13,$fulladdress);
        $insert -> bindParam(14,$State);
        $insert -> bindParam(15,$city);
        $insert -> bindParam(16,$zipcode);
        $insert -> bindParam(17,$totalsubamount);
        $insert -> bindParam(18,$susbscriptionstatus);
        $insert -> bindParam(19,$timestatus);
        if($insert -> execute()) {
            echo $successMessage = 'success <i class="fas fa-check" style="color:green"></i>';
            exit();
        }
    }
    
    }




    ?>   
<?php 
session_start();
ini_set('display_errors','1');
require_once'../config.php';
require_once'../ranStrGen.php';


if(isset($_POST['email']) && isset($_POST['practicinglicense']) && isset($_POST['username']) ) {
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $username= isset($_POST['username']) ? $_POST['username'] : false;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
    $fulladdress= isset($_POST['fulladdress']) ? $_POST['fulladdress'] : false;
    $State = isset($_POST['state']) ? $_POST['state'] : false;
    $city = isset($_POST['city']) ? $_POST['city'] : false;
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : false;
    $profession = isset($_POST['profession']) ? $_POST['profession'] : false;
    $practicinglicense = isset($_POST['practicinglicense']) ? $_POST['practicinglicense'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $confirmpassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : false;

    if(htmlentities($email) && strip_tags($username) && strip_tags($practicinglicense)) {
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
        $totalEarning = 0;
        $totalcommission = 0;
        //insert comment into database
        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword); 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insert = $con -> prepare("INSERT INTO healthprofessionals (trackingId,email,username,firstname,lastname,profession,practicinglicense,password,profilepics,rating,emailCode,accountStatus,ip,fullAddress,state,city,zipcode,totalEarning,totalCommission,timestatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insert -> bindParam(1,$trackingId);
        $insert -> bindParam(2,$email);
        $insert -> bindParam(3,$username);
        $insert -> bindParam(4,$firstname);
        $insert -> bindParam(5,$lastname);
        $insert -> bindParam(6,$profession);
        $insert -> bindParam(7,$practicinglicense);
        $insert -> bindParam(8,$passenc);
        $insert -> bindParam(9,$profilepics);
        $insert -> bindParam(10,$rating);
        $insert -> bindParam(11,$emailCode);
        $insert -> bindParam(12,$status);
        $insert -> bindParam(13,$ip);
        $insert -> bindParam(14,$fulladdress);
        $insert -> bindParam(15,$State);
        $insert -> bindParam(16,$city);
        $insert -> bindParam(17,$zipcode);
        $insert -> bindParam(18,$totalEarning);
        $insert -> bindParam(19,$totalcommission);
        $insert -> bindParam(20,$timestatus);
        if($insert -> execute()) {
            $gd = $con->prepare("SELECT * FROM healthprofessionals WHERE email = ? AND username = ?");
                $gd -> bindParam(1,$email);
                $gd -> bindParam(2,$username);
                $gd ->execute();
                $h = $gd ->fetch(PDO::FETCH_ASSOC);
                $trackingId = $h['trackingId'];
                $_SESSION['trackingId'] = $trackingId;
                
        }
    }
    
    }




    ?>   
<?php
require_once'ranStrGen.php';
require_once'mailer.php';
require_once "config.php";
if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();
    $Email = $userData['email'];
    $Fname = $userData['givenName'];
    $Lname = $userData['familyName'];
    
    $ip= $_SERVER['REMOTE_ADDR'];
     
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $geoDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
    
    $userCountry = $geoDetails['geoplugin_countryName'];
    $countryflag = $geoDetails['geoplugin_countryCode'];
    $countryFlg = strtolower($countryflag);
    $countryFlag = $countryFlg.'.png';
    $passenc = "NULL";
    $emailCode = 0;
    $accType = 'user';
    $inviteCount = 0;
    $activation = 'false';
    $emailStatus = 'unverified';
    $Active = 0;
    $fundraiserAmount = 0;
    $lostpass = "";
    $exploded = explode('@',$Email);
    $inviteId = rand(00000,99999);
    $reg_time = date('Y-m-d H:i:s',time()); 
    $userIP = $_SERVER['REMOTE_ADDR'];
    $tracking_id = rand().''.randStrGen(5);
    $fundraiserStatus = 'Inactive';
    $profile_pics = "images/users_profilePics/default_profilePic.jpg";
    // creating users table
    $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_db;", $serverusername, $serverpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // inserting users details into database

    $lastempListing = 'NULL';
    $fundraiserListingCount = 0;
    $totalempListing = 0;
    $e_Check = $con->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $e_Check ->bindParam(1, $Email);
    echo $e_Check ->execute();
    if( $e_Check ->rowCount() > 0) {
        $re = $e_Check -> fetch(PDO::FETCH_ASSOC);
        $userid = $re['id'];
        if($e_Check->rowCount() > 0 && $re['active'] == 0) {
            header("location:https://my.fundreza.com/");
            exit();
        }else if($e_Check->rowCount() > 0 && $re['active'] == 1 && $re['emailCode'] == 0 ) {
            
                            $gd = $con->prepare("SELECT * FROM users WHERE id = ? ");
                $gd -> bindParam(1,$re['id']);
                $gd ->execute();
                $h = $gd ->fetch(PDO::FETCH_ASSOC);
                $userid = $re['id'];
                $_SESSION['user'] = $h;
                $name = strtolower($h['Fname']);
                $refid = $h['invite_id'];
                
                $status = 'logged in';
                $last_login = date("Y-m-d H:i:s", strtotime(date('h:i:sa')));
                $logStatus = $con -> prepare("SELECT * FROM loginstatus WHERE id = ?");
                $logStatus -> bindParam(1,$h['id'],PDO::PARAM_INT);
                if($logStatus -> execute() && $logStatus -> rowCount() > 0) {
                    $upLogin = $con -> prepare("UPDATE loginstatus SET status = ?, last_login_time = ? WHERE id = ?");
                    $upLogin -> bindParam(1,$status,PDO::PARAM_STR);
                    $upLogin -> bindParam(2,$last_login);
                    $upLogin -> bindParam(3,$h['id'],PDO::PARAM_INT);
                    $upLogin -> execute();
                
                }else {
                    
                    $insert = $con -> prepare("INSERT INTO loginstatus (id,status,last_login_time) VALUES (?,?,?)");
                    $insert -> bindParam(1,$h['id'],PDO::PARAM_INT);
                    $insert -> bindParam(2,$status,PDO::PARAM_STR);
                    $insert -> bindParam(3,$last_login);
                    $insert -> execute();

                }
                if(isset($_SESSION['currentpage'])) {
                    // header("Location:".$_SESSION['currentpage']);
                    // exit();
                }
                
                if($name !="" && isset($name)) {
                    $_SESSION['user'];
                    header("Location:https://account.fundreza.com/f/$name");
                    exit();
                }else {
                    $_SESSION['user'];
                    header("Location:https://account.fundreza.com/f/$name");
                    exit();
                }
        }
        
        
    }else{

        $insert = $con->prepare("INSERT INTO users (account_type,invite_id,activation,emailStatus,Fname,Lname,uname,email,password,active,lostpass,userCountry,countryFlag,created_at,updated_at,emailCode,profile_pics,fundraiserStatus,user_ip) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insert->bindParam(1,$accType,PDO::PARAM_STR);
        $insert->bindParam(2,$inviteId,PDO::PARAM_STR);
        $insert->bindParam(3,$activation,PDO::PARAM_STR);
        $insert->bindParam(4,$emailStatus,PDO::PARAM_STR);
        $insert->bindParam(5,$Fname,PDO::PARAM_STR);
        $insert->bindParam(6,$Lname,PDO::PARAM_STR);
        $insert->bindParam(7,$Fname,PDO::PARAM_STR);
        $insert->bindParam(8,$Email,PDO::PARAM_STR);
        $insert->bindParam(9,$passenc,PDO::PARAM_STR);
        $insert->bindParam(10,$Active,PDO::PARAM_INT);
        $insert->bindParam(11,$lostpass,PDO::PARAM_STR);
        $insert->bindParam(12,$userCountry,PDO::PARAM_STR);
        $insert->bindParam(13,$countryFlag,PDO::PARAM_STR);
        $insert->bindParam(14,$reg_time,PDO::PARAM_STR);
        $insert->bindParam(15,$reg_time,PDO::PARAM_STR);
        $insert->bindParam(16,$emailCode,PDO::PARAM_STR);
        $insert->bindParam(17,$profile_pics);
        $insert->bindParam(18,$fundraiserStatus);
        $insert->bindParam(19,$userIP);
        $insert ->execute();
            if(isset($sanitizeRef) && $sanitizeRef != "" ) {

              $sanitizeRef;
              $_SESSION['email_code'] = $email_code;
              
              $referredId = $con -> lastinsertId();
              $accStat = 'Inactive';
              $date_time = date('Y-m-d H:i:s',time()); 
              $auction = 0;
              $inviteBonus = 0;
              $inviteeActEarns = 0;
              $que = $con -> prepare("SELECT email FROM users WHERE invite_id = ?");
              $que -> bindParam(1,$sanitizeRef);
              

          }
            //send email code to users
            $_SESSION['Lname'] = $Lname;
            $emailUname = $Fname;
            $_SESSION['emailUname'] = $emailUname;
            $_SESSION['Email'] = $Email;
            $emailCode = $_SESSION['emailCod'];
            header("location:https://my.fundreza.com/verify-mobile");
            exit();  
        
            if($insert==true){
                  
            }else {
            header("location:reg-failure.html");
                exit();
        }
    }
}else{
    header('Location: https://my.fundreza.com/createaccount');
    exit();
}

?>
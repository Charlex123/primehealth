<?php 
session_start();
ini_set('display_errors','1');
require_once'../config.php';
require_once'../ranStrGen.php';

if(isset($_POST['email']) && isset($_POST['premiselicense']) && isset($_POST['storeaddress']) ) {
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $storeAddress= isset($_POST['storeaddress']) ? $_POST['storeaddress'] : false;
    $storeState = isset($_POST['storestate']) ? $_POST['storestate'] : false;
    $storeCity = isset($_POST['storecity']) ? $_POST['storecity'] : false;
    echo $storeName = isset($_POST['storename']) ? $_POST['storename'] : false;
    $cacnumber = isset($_POST['cacnumber']) ? $_POST['cacnumber'] : false;
    $storeCategory = isset($_POST['storecategory']) ? $_POST['storecategory'] : false;
    $premiselicense = isset($_POST['premiselicense']) ? $_POST['premiselicense'] : false;
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : false;

    echo $storePhonenumber = isset($_POST['storephonenumber'])? $_POST['storephonenumber'] : false;
    
     if($storePhonenumber =="") {
            echo $error_storePhonenumber = 'storephonenumber empty!!';
        }else if($storePhonenumber != htmlentities(strip_tags($_POST['storephonenumber']))) {
            echo $error_storePhonenumber = "invalid storephonenumber <i class='fas fa-times' style='color: red'></i>";
        }else if(!preg_match("/^[ +0-9]*$/",$storePhonenumber) && !ctype_digit($storePhonenumber)) {
            echo $error_storePhonenumber = "only numbers required! <i class='fas fa-times' style='color: red'></i>";
        }  
     $query = $con->prepare("SELECT storephonenumber FROM onboardlocations WHERE storephonenumber = ? LIMIT 1");
     $e_Check = $query->bindParam(1, $storePhonenumber, PDO::PARAM_STR);
     $e_Check = $query->execute();
     $e_Check = $query->rowCount();
     if( $p_Check=$query->rowCount() > 0) {
         echo $storePhonenumber." already taken, please choose another <i class='fas fa-times' style='color: red'></i>";
        }else{
            echo  $storePhonenumber. ' is OK <i class="fas fa-check" style="color: green"></i>';
      }      


    if(htmlentities($email) && strip_tags($storeAddress) && strip_tags($premiselicense)) {
        $storeAddress= isset($_POST['storeAddress']) ? $_POST['storeAddress'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $trackingId = $_SESSION['trackingId'];
        $ip= $_SERVER['REMOTE_ADDR'];
                            
        $rating = 0;
        $dislikes = 0;
        $status = 'Inactive';
        $salesCount = 0;
        $timestatus = time();
        $totalEarning = 0;
        $totalcommission = 0;
        //insert comment into database
        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword); 
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insert = $con -> prepare("INSERT INTO onboardlocations (trackingId,storename,storephonenumber,storeEmail,storeAddress,storeState,storeCity,storeCategory,zipcode,premiselicense,salesCount,rating,storeCAC,Status,totalEarning,totalCommission,timestatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $insert -> bindParam(1,$trackingId);
        $insert -> bindParam(2,$storeName);
        $insert -> bindParam(3,$storePhonenumber);
        $insert -> bindParam(4,$email);
        $insert -> bindParam(5,$storeAddress);
        $insert -> bindParam(6,$storeState);
        $insert -> bindParam(7,$storeCity);
        $insert -> bindParam(8,$storeCategory);
        $insert -> bindParam(9,$zipcode);
        $insert -> bindParam(10,$premiselicense);
        $insert -> bindParam(11,$salesCount);
        $insert -> bindParam(12,$rating);
        $insert -> bindParam(13,$cacnumber);
        $insert -> bindParam(14,$status);
        $insert -> bindParam(15,$totalEarning);
        $insert -> bindParam(16,$totalcommission);
        $insert -> bindParam(17,$timestatus);
        if($insert -> execute()) {
            echo $successMessage = 'success';
            exit();
        }
    }
    
    }




    ?>   
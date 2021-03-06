<?php
        @session_start();
        error_reporting(E_ALL);
        ini_set('display_errors','1');
        
        require_once'../config.php';
        
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['firstname']) && $_POST['firstname'] !="") {
            
            $name = isset($_POST['firstname']) ? $_POST['firstname'] : false;

            if(strlen($name) < 3 || strlen($name) > 80) {
                echo 'Name must be between 3 - 80 characters';
                exit(); 
            }elseif(!preg_match("/^[a-z A-Z0-9.]*$/",$name) && strip_tags($name)) {
                echo 'invalid, name must be alphanumerics with no special characters';
                exit();
        }
    }
            
?>


<?php
        @session_start();
        error_reporting(E_ALL);
        ini_set('display_errors','1');
        
        require_once'../config.php';

        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['username']) && $_POST['username'] !="") {
            
            $username = isset($_POST['username']) ? $_POST['username'] : false;

            if(strlen($username) < 3 || strlen($username) > 50) {
                $message = "<div class='alert-danger pt-2 pb-2 rounded'>Username name must be between 3 - 50 characters <span class='close-err'>&times;</span> </div>";
                exit(); 
            }elseif(!preg_match("/^[a-z0-9A-Z.]*$/",$username) && strip_tags($username)) {
              $message = "<div class='alert-danger pt-2 pb-2 rounded'>invalid,  Username must be a misture of alphabets and numbers with no special characters and spaces <span class='close-err'>&times;</span> </div>";
              exit();
          }else {
                $con= new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
                $query = $con->prepare("SELECT username FROM healthprofessionals WHERE username=? LIMIT 1");
                $e_Check = $query->bindParam(1, $username, PDO::PARAM_STR);
                $e_Check = $query->execute();
                if( $e_Check=$query->rowCount() > 0) {
                    echo $message =  "username already taken, please choose another <i class='fas fa-times' style='color: red'></i>";
                exit();
                }else{
                    echo $message = $username. ' is OK <i class="fas fa-check" style="color: green"></i>';
                exit();
                }
          }
    }
            
?>


<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['password']) && $_POST['password'] !="" && !isset($_POST['password1']) && $_POST['password1'] =="") {
    
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
    
    // if(in_array($passArray,$specialChar) || in_array($passArray1,$specialChar) || in_array($passArray2,$specialChar) || in_array($passArray3,$specialChar) || in_array($passArray4,$specialChar)) {
    //     echo 'contains special char';
    // }else {
    //     echo 'no special char';
    // }

    if(strlen($password) < 5) {
           echo 'Password must be more than 5 characters';
         exit();
        }
        else if(strlen($password) >= 5 && strlen($password) <= 10) {
            echo 'Password strength .....<span style="color:#800;"> Weak ';
            exit();
         }
        else if(strlen($password) > 10 && strlen($password) <= 16) {
            echo 'Password strength .....<span style="color:#adff2f;"> Good ';
            exit();
         }
         else if(strlen($password) > 16 ) {
            echo 'Password strength .....<i class="fas fa-check" style="color: green"> </i> ';
            exit();
         }
         

         if(strlen($password) > 16 ) {
            echo 'Password strength .....<i class="fas fa-check" style="color: green"></i> ';
            exit();
         }
            
    
    
    }
    
    ?>

<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['password']) && isset($_POST['password1']) && $_POST['password'] !="" && $_POST['password1'] !="") {
    
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $password1 = isset($_POST['password1']) ? $_POST['password1'] : false;
   
    if(strlen($password) < 5) {
        echo 'Password must be more than 5 characters';
      exit();
     }
     else if(strlen($password) >= 5 && strlen($password) <= 8) {
         echo 'Password strength .....<span style="color:#800;"> Weak <i class="fas fa-times" style="color: green"></i>';
         
      }
     else if(strlen($password) > 8 && strlen($password) <= 16) {
         echo 'Password strength .....<span style="color:#adff2f;"> Good <i class="fas fa-check" style="color: green"></i>';
        
      }
      else if(strlen($password) > 16 ) {
         echo 'Password strength .....<span style="color:#008000;"> Very Good <i class="fas fa-check" style="color: green"></i>';
         
      }
      

      if(strlen($password) > 16 ) {
         echo 'Password strength .....<span style="color:#008000;"> Very Good <i class="fas fa-check" style="color: green"></i>';
         
      }
      
    if($password === $password1) {
        echo "<span style='color:#008000'> and Passwords matched <i class='fas fa-check' style='color: green'></i> </span>";
        exit();
    }
    else {
        
        echo "<span style='color:red'> and Passwords do not match</span>";
        exit();
    }    
    
    
    }else if(isset($_POST['password']) && !isset($_POST['password1'])) {
        echo "<span style='color:#008000'>Confirm password cannot be empty!!</span>";
      exit();
     }
?>

<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email']) && $_POST['email'] !="") {
    
    $email = isset($_POST['email']) ? $_POST['email'] : false;

     if($email == "") {
         echo 'email empty!!';
         exit();
     }

     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ' invalid email address, please verify your email address';
            exit();
        }else if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$email) && strip_tags($email)) {
             echo "invalid, email format not accepted, special characters not allowed <i class='fas fa-times' style='color: red'></i>";
             exit();
            
         }else{
            //check email
            $con= new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
            $query = $con->prepare("SELECT email FROM healthprofessionals WHERE email=? LIMIT 1");
            $e_Check = $query->bindParam(1, $email, PDO::PARAM_STR);
            $e_Check = $query->execute();
            if( $e_Check=$query->rowCount() > 0) {
                echo  "email already taken, please choose another <i class='fas fa-times' style='color: red'></i>";
                exit();
            }else{
                echo $email. ' is OK <i class="fas fa-check" style="color: green"></i>';
                exit();
            }
        }
    
    }
        ?>


<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['storeemail']) && $_POST['storeemail'] !="") {
    
    $email = isset($_POST['storeemail']) ? $_POST['storeemail'] : false;

     if($email == "") {
         echo 'email empty!!';
         exit();
     }

     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ' invalid email address, please verify your email address';
            exit();
        }else if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$email) && strip_tags($email)) {
             echo "invalid, email format not accepted, special characters not allowed <i class='fas fa-times' style='color: red'></i>";
             exit();
            
         }else{
            //check email
            $con= new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
            $query = $con->prepare("SELECT storeEmail FROM onboardlocations WHERE storeEmail=? LIMIT 1");
            $e_Check = $query->bindParam(1, $email, PDO::PARAM_STR);
            $e_Check = $query->execute();
            if( $e_Check=$query->rowCount() > 0) {
                echo  "store email already taken, please choose another <i class='fas fa-times' style='color: red'></i>";
                exit();
            }else{
                echo $email. ' is OK <i class="fas fa-check" style="color: green"></i>';
                exit();
            }
        }
    
    }
        ?>

<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once'../config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['phonenumber']) && $_POST['phonenumber'] !="") {
    
        $phonenumber = isset($_POST['phonenumber'])? $_POST['phonenumber'] : false;
    
     if($phonenumber =="") {
            echo $error_phonenumber = 'phonenumber empty!!';
            exit();
        }else if($phonenumber != htmlentities(strip_tags($_POST['phonenumber']))) {
            echo $error_phonenumber = "invalid phonenumber <i class='fas fa-times' style='color: red'></i>";
            exit();
        }else if(!preg_match("/^[ +0-9]*$/",$phonenumber) && !ctype_digit($phonenumber)) {
            echo $error_phonenumber = "only numbers required! <i class='fas fa-times' style='color: red'></i>";
            exit();
        }  
     $query = $con->prepare("SELECT phonenumber FROM users WHERE phonenumber = ? LIMIT 1");
     $e_Check = $query->bindParam(1, $phonenumber, PDO::PARAM_STR);
     $e_Check = $query->execute();
     $e_Check = $query->rowCount();
     if( $p_Check=$query->rowCount() > 0) {
         echo $phonenumber." already taken, please choose another <i class='fas fa-times' style='color: red'></i>";
           exit();     
        }else{
            echo  $phonenumber. ' is OK <i class="fas fa-check" style="color: green"></i>';
            exit();  
      }      
        
  }
?>

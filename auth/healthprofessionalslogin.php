<?php
session_start();
ini_set('display_errors','1');
require_once('../config.php');


if( isset($_POST['email']) && isset($_POST['password'])){
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $error = ""; 

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "invalid email address, please verify your email address";
        header("location:login");
        exit();
    }
    if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$email) && strip_tags($email)) {
        $error = "invalid, email format not accepted, special characters not allowed";
        header("location:login");
        exit();
    }

    $email = $_POST['email'];
        
    $password = trim($_POST['password']);
    
    $Active = "Active";

        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
        $login = $con->prepare("SELECT * FROM healthprofessionals WHERE email = ? ");
        $login -> bindParam(1, $email, PDO::PARAM_STR);
        
        if($login->execute()){
        $re = $login -> fetch(PDO::FETCH_ASSOC);
        if($login->rowCount() == 0 ) {
            
            $error = "You do not have account with us <a href='register' style='text-decoration;font-style:italic;color:#008;'>create account</a>";
            
            }else if($login->rowCount() > 0 && password_verify($password, $re['password'])) {
                
                
                $gd = $con->prepare("SELECT * FROM healthprofessionals WHERE id = ? ");
                $gd -> bindParam(1,$re['id']);
                $gd ->execute();
                $h = $gd ->fetch(PDO::FETCH_ASSOC);
                $userid = $h['id'];
                $_SESSION['user'] = $h;
                $name = strtolower($h['username']);
                // $refid = $h['invite_id'];
                
                $status = 'logged in';
                $last_login = date("Y-m-d H:i:s", strtotime(date('h:i:sa')));
                
                $insert = $con -> prepare("INSERT INTO healthprofessionlsloginstatus (userid,status,last_login_time) VALUES (?,?,?)");
                $insert -> bindParam(1,$h['id'],PDO::PARAM_INT);
                $insert -> bindParam(2,$status,PDO::PARAM_STR);
                $insert -> bindParam(3,$last_login);
                $insert -> execute();
                
                    if(isset($_SESSION['currentpage'])) {
                    header("Location:".$_SESSION['currentpage']);
                    exit();
                }
                
                $_SESSION['user'];
                // header("Location:https://primehealth.ng/healthprofessionals/account/$name");
                header("Location:https://localhost/primehealth/healthprofessionals/account/$name");
                $_SESSION['user'];
                exit();
                }else{
                $error = "email and password does not match";
                
            }
        

        }else {
            $error = "oops something happened, check your login details and try again";
    }
      

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <!-- 1. BOOTSTRAP v4.0.0         CSS !-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- 2. GOOGLE JQUERY JS v3.2.1  JS !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- 3. BOOTSTRAP v4.0.0         JS !-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Healthprofessionals | Register - Login Page</title>
    <script src="../javascript/subscriptions.js"></script>
    
    <link rel="stylesheet" href="register.css" />
</head>
<body>

<!------ Include the above in your HEAD tag ---------->
    <!-- Login -->
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-green-200 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="../images/primehealthlogo.png" alt="primehealth logo" title="Primehealth, Nigeria Largest Healthcare Platform" width="124" height="35" />
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
        </nav>
    </header>

            <div id="" tabindex="-1" aria-hidden="true" class="h-full w-full px-4">
                <div class="relative top-20 mx-auto rounded-md bg-white xs:w-full sm:w-full md:w-1/2 lg:w-1/2">
                    <!-- Modal content -->
                    <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                        <div class="text-center mx-auto conta">
                            <h1 class="text-xl headn font-bold text-success dark:text-white mt-2 mb-2">Maintain Good health And Increase Your Life Span</h1>
                        </div>
                        <h2 class="mx-auto text-center font-bold m-5"> Login As A Health Professional</h2>
                        <form method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8 headn mt-8" action="#" id="usersubform">
    
                            <div id='validation' style='background:#7cf39a;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #001737;margin: 2rem auto'> <span class='close-alert' style='cursor:pointer'>&times;</span></div>
        
                            <div>
                                <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email</label>
                                <input type="email" name="email" id="email" onblur="emailCheck()" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your valid email address" required>
                            </div>
                            
                            
                            <div>
                                <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Password</label>
                                <input type="password" onmouseout="loginCheck()" name="password" id="userpassword" placeholder="Enter your password" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <button type="submit" name="submit" class="w-full text-white font-bold bg-success hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer">Login</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Don't have account? <a href="../subscription-plan/" class="text-success-700 font-bold hover:underline dark:text-success-500">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
    
    document.getElementById("validation").style.display = 'none';
   

    var closeAlert = document.querySelector(".close-alert");
        closeAlert.onclick = function() {
        this.parentElement.style.display = 'none';
    }

    function _(e) {
        return document.getElementById(e);
    }
    var error = document.getElementById("validation");
    var closeAlert = document.querySelector('.close-alert');
    function emailCheck() {
        var log = true;
        var email = document.getElementById("email").value;
        if(email) {
            console.log(email)
            var hr = new XMLHttpRequest();
            hr.open("POST","hpchecklogin.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    error.style.display = 'block';
                    closeAlert.style.display = 'block';
                    error.innerHTML = hr.responseText;
              
                }
            }
            hr.send("email="+email+"&log="+log);
        }else {
            error.style.display = 'block';
            error.innerHTML = 'enter your email';
            return false;
        }

    }

    function showPassword() {
        var ddd = document.getElementById("passworded");
        var hideP = document.getElementById("hideP");

        if(ddd.getAttribute('type') == 'password') {
            ddd.setAttribute("type",'varchar');
            hideP.innerHTML = "<i class='fa fa-eye'></i>";
        }else {
            ddd.setAttribute("type",'password');
            hideP.innerHTML = "<i class='fa fa-eye-slash'></i>";
        }
      
      }


    var showP = document.getElementById("showP");
      if(showP) {
        var ddd = document.getElementById("passworded");
        var hideP = document.getElementById("hideP");
        showP.onclick = function() {
          // alert('ll')
        }
      }
    function loginCheck() {
        
        var log = true;
        var error = document.getElementById("validation");
        var closeAlert = document.querySelector('.close-alert');
        var email = document.getElementById("email").value;
        var pass = document.getElementById("userpassword").value;
        if(email != "" && email != null && pass != "" && pass != null) {
            var hr = new XMLHttpRequest();
            hr.open("POST","hpchecklogin.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    error.style.display = 'block';
                    closeAlert.style.display = 'block';
                    error.innerHTML = hr.responseText;
                }
            }
            hr.send("email="+email+"&password="+pass);
        }
        
    }

  </script>
    </body>
</html>
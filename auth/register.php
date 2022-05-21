<?php
session_start();
// require_once('../dbh.php');
// require_once('../config.php');
// var_dump($_SESSION['user']);
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
    <title>Register | Login Page</title>
    <link rel="stylesheet" href="register.css" />
    <script src="javascript/subscriptions.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script lang="javascript" type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<!--<link rel="stylesheet" href="css/style.css">-->
	<!--<link rel="stylesheet" href="css/customize.css">-->
  <!--<link rel="stylesheet" href="css/login_style.css">-->
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/fontawesome.min.css">
	<link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/all.min.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
	<script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/all.min.js"></script>
	<link rel="stylesheet" href="intltel/build/css/intlTelInput.css">
    <style>
        label {
            font-weight: 'bold';
        }
        #passeecheck {
            display: none;
            font-size: 12px;
            color: red;
        }
        #emailStatus, #allpasswordStatus, #usernameStatus {
            margin: 1rem auto;text-align: center;font-size: 12px;
        }
    </style>
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
                        <h2 class="mx-auto text-center font-bold m-5"> Sign Up </h2>
                        <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8 headn mt-8" action="#" id="usersubform">
                            <div>
                                <label for="username" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Username Of Choice</label>
                                <input type="varchar" name="username" id="username" onblur="usernameCheck()" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter username of choice" required>
                                <div id="usernameStatus" style='color: red'></div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-2">
                            
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <div>
                                    <label for="firstname" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Your First Name</label>
                                    <input type="varchar" name="firstname" id="firstname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your first name" required>
                                </div>
                            </div>
                            
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <div>
                                    <label for="lastname" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Your Last Name</label>
                                    <input type="varchar" name="lastname" id="lastname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your last name" required>
                                </div>
                            </div>
                            </div>

                            <div>
                                <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Your Personal Email</label>
                                <input type="email" name="email" id="useremail" onblur="regemailcheck()" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your valid email address" required>
                                <div id="emailStatus" style='color: red'></div>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            
                            <div>
                                <label for="practicinglicense" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Your Full Residential Address</label>
                                <input type="varchar" name="fulladdress" id="userfulladdress" placeholder="Enter your full residential address" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                    City
                                </label>
                                <input class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="city" id="city" type="text" placeholder="Enter Your City">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    State
                                </label>
                                <div class="relative">
                                    <select class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="state" id="state">
                                    <option disabled selected>--Select State--</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="FCT">Federal Capital Territory</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Zip
                                </label>
                                <input class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="zipcode" id="zipcode" type="text" placeholder="Enter Zip Code">
                            </div>
                            </div>
                            <div>
                                <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Password</label>
                                <input type="password" name="password" id="userpassword" onmouseout="passeeCheck()" placeholder="Enter your password" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="password" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Confirm Password</label>
                                <input type="password" name="confirmpassword" id="userconfirmpassword" onmouseout="passcheck()" placeholder="Enter confirm password" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                <div id='allpasswordStatus' style='color: red'><span id ="passwordStatus"></span><span id ="passStatus" style='margin-bottom:-10px;'></span></div>
                            </div>

                            <div class="passcheck" id="passeecheck">
                                <div id="perr1"></div>
                                <div id="perr2"></div>
                                <div id="perr4"></div>
                                <div id="perr5"></div>
                                <div id="perr6"></div>
                                <div id="perr7"></div>
                            </div>
                            <input name="submit" class="w-full text-white bg-success hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm font-bold px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer" value="Sign Up Now" onclick="registerUsers()">
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Already registered? <a href="login" class="text-success-700 hover:underline dark:text-success-500">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                

            function _(e) {
                return document.getElementById(e);
            }


            function passeeCheck() {
                
                $("#emailStatus").hide();
                $("#phonenumberStatus").hide();
                $("#usernameStatus").hide();
                $("#passStatus").hide();
                $("#passwordStatus").hide();
                $("#passeeStatus").show();
                $("#passeecheck").show();

                var passid = document.getElementById("passeeStatus");
                

                var p = document.getElementById("userpassword").value;
                if (p == '' || p == null) {
                _('perr1').innerHTML = "<span style='color=red'><i class='fas fa-times'></i> Password cannot be empty</span>";
                }else{
                _('perr1').style.color = '#22a349';
                _('perr1').innerHTML = "<span style='color=#22a349'><i class='fas fa-check-square'></i> Password cannot be empty</span>";
                }
                if (p.length <= 8 ) {
                _('perr2').innerHTML = "<span style='color=red'><i class='fas fa-times'></i> Password must be at least 8 characters</span>";
                }else {
                _('perr2').style.color = '#22a349';
                _('perr2').innerHTML = "<span style='color=#22a349'><i class='fas fa-check-square'></i> Password must be at least 8 characters</span>";
                }
                if (p.length > 30) {
                _('perr4').innerHTML = "<span style='color=red'><i class='fas fa-times'></i> Password must be less than 30 characters</span>";
                }
                if (p.search(/[a-zA-Z]/i) < 0) {
                _('perr5').innerHTML = "<span style='color=red'><i class='fas fa-times'></i> Password must contain both lower case and upper case letters.</span>"; 
                }
                else {
                _('perr5').style.color = '#22a349';
                _('perr5').innerHTML = "<span style='color=red'><span style='color=#22a349'><i class='fas fa-check-square'></i> Password must contain at least one lower case.</span>";
                }
                if (p.search(/[0-9]/i) < 0) {
                _('perr6').innerHTML = "<i class='fas fa-times'></i> Password must contain at least one digit.</span>";
                }else {
                _('perr6').style.color = '#22a349';
                _('perr6').innerHTML = "<span style='color=red'><span style='color=#22a349'><i class='fas fa-check-square'></i> Password must contain at least one digit.</span>";
                }
                if (p.search(/[!#$@^%&?'"]/i) < 0) {
                _('perr7').innerHTML = "<span style='color=red'><i class='fas fa-times'></i> Password must contain at least one special character.</span>";
                }else {
                _('perr7').style.color = '#22a349';
                _('perr7').innerHTML = "<span style='color=#22a349'><i class='fas fa-check-square'></i> Password must contain at least one special character.</span>";
                }
                

            }


            function usernameCheck() {
                $("#emailStatus").hide();
                $("#phonenumberStatus").hide();
                $("#usernameStatus").show();
                $("#passeeStatus").hide();
                $("#passwordStatus").hide();

                
                var u = document.getElementById("username").value;
                var status2 = document.getElementById("usernameStatus");
                
                
                if(u) {

                    status2.style.color = '#22a349';  
                    status2.innerHTML = '....checking now';
                    var hr = new XMLHttpRequest();
                    hr.open("POST","checkreg.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                                status2.style.color = '#22a349';
                                status2.innerHTML = hr.responseText;
                                console.log(hr.response)
                            }
                    }
                    hr.send("username="+u);
                }else {
                    status2.style.color = 'red';  
                    status2.innerHTML = 'PasswordRepeat cannot be empty';
                }

            };  


            function passcheck() {
                $("#emailStatus").hide();
                $("#phonenumberStatus").hide();
                $("#usernameStatus").hide();
                $("#passeeStatus").hide();
                $("#passwordStatus").show();

                var status2 = document.getElementById("passwordStatus");
                var approved = document.getElementById("passStatus");
                
                var p = document.getElementById("userpassword").value;
                var p1 = document.getElementById("userconfirmpassword").value;
                
                
                if(p !="" && p1 !="" && p != null && p1 != null) {

                    status2.style.color = '#22a349';  
                    status2.innerHTML = '....checking';
                    var hr = new XMLHttpRequest();
                    hr.open("POST","checkreg.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                                status2.style.color = '#22a349';
                                status2.innerHTML = hr.responseText;
                                
                            }
                    }
                    hr.send("password="+p+"&password1="+p1);
                }else {
                    status2.style.color = 'red';  
                    status2.innerHTML = 'PasswordRepeat cannot be empty';
                }

            };  


            function showPassword() {
                    var ddd = document.getElementById("regpassword");
                    var dddp = document.getElementById("regpassword1");
                    var hideP = document.getElementById("hideP");

                    if(ddd.getAttribute('type') == 'password') {
                        ddd.setAttribute("type",'varchar');
                        dddp.setAttribute("type",'varchar');
                        hideP.innerHTML = "<i class='fa fa-eye'></i>";
                    }else {
                        ddd.setAttribute("type",'password');
                        dddp.setAttribute("type",'password');
                        hideP.innerHTML = "<i class='fa fa-eye-slash'></i>";
                    }
                
                }
                


            function regemailcheck() {
                
                $("#passwordStatus").hide();
                $("#usernameStatus").hide();
                $("#phonenumberStatus").hide();
                $("#mainpassStatus").hide();

                var status3 = document.getElementById("emailStatus");
                status3.style.display = 'block';
                var e = document.getElementById("useremail").value;
                
                if(e !="" ) {
                    status3.innerHTML = '....checking';
                    status3.style.color = '#22a349';
                    var hr = new XMLHttpRequest();
                    hr.open("POST","checkreg.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                            status3.style.color = '#22a349';
                            status3.innerHTML = hr.responseText;
                            
                        }
                    }
                    hr.send("Email="+e);
                }else {
                    status3.style.color = 'red';
                    status3.innerHTML = 'email required!!';
                }

            };
        </script>
    </body>
</html>
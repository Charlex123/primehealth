<?php
ob_start();
session_start();
ini_set('display_errors','0');
require_once'dbh.php';
require_once'config.php';
require_once'ranStrGen.php';
require_once'mailer.php';
require'./Twilio/autoload.php';
$Email = @$_SESSION['Email'];
$emailCode = @$_SESSION['emailCod'];
$emailUname = @$_SESSION['emailUname'];
// if(!isset($_SESSION['Email'])) {
//     header("location:https://my.fundreza.com/createaccount");
// }
$message = '';
if(isset($_POST['sendOTP']) && isset($_POST['sendOTP']) || isset($_POST['resendOTP']) && isset($_POST['resendOTP'])) {
    $phonenumber = isset($_POST['phone']) ? $_POST['phone'] : false;
	$Email = @$_SESSION['Email'];
	$emailCode = @$_SESSION['emailCod'];
	$emailUname = @$_SESSION['emailUname'];
    header("location:https://fundreza.com/s/choose-type");
    $sid = "AC4f1557b7e063a6f92b34775fad6f3bcc"; // Your Account SID from www.twilio.com/console
    $token = "ce506e35292ba892704a5342fe45c827"; // Your Auth Token from www.twilio.com/console
    $smscode = rand(00000,99999);
    $client = new Twilio\Rest\Client($sid, $token);
    $smsmessage = $client->messages->create(
      $phonenumber, // Text this number
      [
        'from' => '+12016853359', // From a valid Twilio number
        'body' => 'Your fundreza.com verification code is'.$smscode
      ]
    );
    print $smsmessage->sid;
    if($smsmessage) {
        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_db;" , $serverusername, $serverpassword);
        $activ = $con->prepare("UPDATE users SET smsCode = ?, active = 1, phonenumber = ? WHERE email = ?");
        $activ->bindParam(1, $smscode);
		$activ->bindParam(2, $phonenumber);
        $activ->bindParam(3, $Email);
        $activ -> execute();
        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">
	<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Girassol' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Kulim Park' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=cabin' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Antic' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="css/fontastic.css">
	<!-- Google fonts - Poppins -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<title>Verify Mobile | Primehealth.ng </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
	<!-- End plugin css for this page -->
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
    <!-- inject:css -->
	
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script type="text/javascript">_atrk_opts = { atrk_acct:"jSv+k1aQeSI1/9", domain:"ecoinofficial.org",dynamic: true};(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();</script><noscript><img src="https://certify.alexametrics.com/atrk.gif?account=jSv+k1aQeSI1/9" style="display:none" height="1" width="1" alt="javascript required" /></noscript>
    <style>
        body,.container-scroller {
            background: #f8fff6 !important;
        }
        .full-height {
            margin: 5rem auto;position: relative;background: #f8fff6 !important;
        }
        ul {
            margin: 0 !important;
        }
        ul li {
            float: none;white-space: initial;text-align: left;font-size: 13px;
            list-style: none;margin-left: 0 !important;
        }
        .fa-check {
            color: #09da47 !important;
        }
        .container-fluid,body,.full-height {
    background-color: #f8fff6;background-size: cover;
    background-repeat: no-repeat;color: #545454;height: inherit;max-height: inherit;
        }
        .overlay {
            position: fixed;opacity: .3;filter: opacity(1);
            width: 100%;height: inherit;max-height: inherit;background-size: auto;background-color: #545454;
            top: 0;left: 0;right: 0;bottom: 0;
        }
        .hero-heading {
            position: relative;z-index: 90;padding: 1rem auto;margin: 1rem auto;
        }
        .orange {
            color: #22a349 !important;
        }
        .text-sec {
            color: #545454;
        }
        .headline h1, .headline h2 {
            z-index: 90000;color: #545454;font-family: 'Montserrat';margin: 1rem auto;
        }
        .pro-banner {
            margin-top: 0;display: block;
        }
        .reg-steps {
            height: 10rem;width: 100%;
        }
        .reg-steps h4 {
            color: #545454;font-weight: 600;margin: 2rem;
        }
        .reg-steps .steps {
            background-color: #545454;height: 1rem;width: 100%;border-radius: 4px;
        } 
        .reg-steps .steps .step1{
            color: #ffffff;font-size: 20px;font-weight: bolder;font-family: 'Montserrat';
            margin-left: 12.5%;background-color: #545454;margin-top: -1rem;border-radius: 50%;
            padding: 1rem;
        } 
        .reg-steps .steps span:nth-child(1) {
            color: #22a349;
        }
        header {
            height: 5rem;max-height: 6rem;background-color: #ffffff;width: 100%;border-bottom: 1px solid #f1f1f1;
        }
        .authfy-panel-right {
            background-color: #ffffff;padding: 1rem auto;width: 40%;position: relative;
            text-align: center;margin: 1rem auto;color: #ffffff;border-radius: 10px;
            margin-bottom: 5rem;padding-bottom: 2rem;z-index: 900000;box-shadow: 1px 2px 1px 3px #f1f1f1;
        }
        .authfy-panel-right p {
            color: #545454;
        }
        .no-float {
        clear: both;
        }
        .facebook-google .fa-google-plus-square {
        color: red;font-size: 25px;
        }
        .facebook-google .fa-facebook-square {
        color: blue;font-size: 25px;
        }
        /*.headline h1,.headline h2,h5 {*/
        /*    font-family: "Source Sans Pro", sans-serif;margin-top: 3rem;*/
        /*    font-weight: bold;text-transform: capitalize;;*/
        /*}*/
        /*.authfy-panel-right h3 {*/
        /*    font-size: 18px;font-weight: 500;font-family: "Source Sans Pro", sans-serif;margin-top: 1rem;*/
        /*    color: #868688;*/
        /*}*/
        /*.progressbar {*/
        /*    white-space: nowrap;width: 100%;*/
        /*  }*/
        /*.pbar {*/
        /*    width: 22%;margin-left: 2%;height: .4rem;background-color: #cccccc;display: inline-block;*/
        /*    border-radius: 6px;*/
        /*  }*/
        /*  .showP {*/
        /*      float: right;margin: -1.8rem .4rem auto auto;color: #22a349;*/
        /*  }*/
        /*  .validate {*/
        /*      width: 100%;box-shadow: 2px 2px 2px 3px #f1f1f1;color: #545454;*/
        /*  }*/
        /*.funds_btn {*/
        /*    width: 100%;color: #ffffff;*/
        /*}*/
        /*.funds_btn a {*/
        /*    border: none;box-shadow: none;color: #ffffff;padding: .4rem;*/
        /*}*/
        /*.funds_btn a:hover {*/
        /*    color: #ffffff;*/
        /*}*/
        /*.preva {*/
        /*    width: 100%;color: #545454;background-color: #ffffff;*/
        /*    padding: .4rem;border: none;border-radius: 4px;margin-top: 1rem;*/
        /*    box-shadow: 1px 2px 2px 3px #eaeaea;*/
        /*}*/
        /*.preva:hover {*/
        /*    width: 100%;color: #545454;background-color: #ffffff;*/
        /*    box-shadow: 1px 2px 2px 3px #eaeaea;*/
        /*}*/
        /*.prv {*/
        /*    width: 100%;color: #ffffff;background-color: #025faa;*/
        /*    padding: .4rem;border: none;border-radius: 4px;margin-top: 1rem;*/
        /*}*/
        /*.prv a {*/
        /*    border: none;box-shadow: none;color: #ffffff;padding: .4rem;*/
        /*}*/
        /*.prv a:hover {*/
        /*    color: #ffffff;*/
        /*}*/
        /*.fundrais {*/
        /*    width: 10rem;border-radius: 28px;margin: 1rem;margin-left:.2rem;height: 3rem;*/
        /*}*/
        /*.fundraisa {*/
        /*    width: 5rem;border-radius: 28px;margin: 1rem;*/
        /*}*/
        /*.inner {*/
        /*    display: inline-block;width: 100%;padding-left: 0;margin-left: 0;padding-right: 0;margin-right: 0;*/
        /*}*/
        /*.inner .col-inn {*/
        /*    display: inline-block;padding: 0;margin: 0;width: 48%;*/
        /*}*/
        /*.inner .col-inn#ffn {*/
        /*    margin-left: 0;margin-right: 1%;*/
        /*}*/
        /*.inner .col-inn#lln {*/
        /*    margin-right: 0;margin-left: 1%;*/
        /*}*/
        /*hr {*/
        /*    width: 1rem;color: white;*/
        /*}*/
        /*.authfy-panel-right .fa-user-lock,.fa-lock {*/
        /*    color: #22a349;*/
        /*}*/
        /*.authfy-panel-right .social-login {*/
        /*    margin: 2rem auto;padding: 2rem auto;border-bottom: 1px solid white;*/
        /*}*/
        /*.authfy-panel-right .social-login .facebook-google ul {*/
        /*    margin: auto;padding: auto;*/
        /*}*/
        /*.authfy-panel-right .social-login .facebook-google ul li a{*/
        /*    margin: auto;padding: auto;margin: auto 1rem auto 1rem; */
        /*}*/
        /*.auth-title {*/
        /*    color: #888686;margin-top: 1rem auto;*/
        /*}*/
        /*.authfy-panel-right .social-login a {*/
        /*    color: rgb(192, 189, 189);text-decoration: none;margin: 1rem auto;padding: auto;*/
        /*    margin-bottom: 0;font-weight: lighter;*/
        /*}*/
        /*.authfy-panel-right .social-login a:hover {*/
        /*    color: #22a349;*/
        /*}*/
        /*.authfy-panel-right h2.reg-login-method {*/
        /*    font-size: 18px;margin-bottom: 2rem;*/
        /*}*/
        /*.form-col {*/
        /*    width: 100%;text-align: center;margin: .5rem auto 2rem auto;z-index: 2;*/
        /*    padding: auto;padding-left: 1rem;padding-right: 1rem;position: relative;*/
        /*}*/
        /*input.form-control {*/
        /*    border: 1px solid #e0dfe0;border-radius: 8px;height: 38px;*/
        /*}*/
        /*.authfy-panel .talent-bg {*/
        /*    width: 100%;height: initial;max-height: 35rem;z-index: 1;*/
        /*}*/
        /*.authfy-panel-right h4 {*/
        /*    font-weight: 600;color: #22a349;*/
        /*}*/
        /*.authfy-panel-right label {*/
        /*    text-align: left;float: left;font-size: 14px;*/
        /*}*/
        /*.terms-conditions {*/
        /*    margin-top: .6rem;margin-right: .4rem;border-top: 1px solid #f1f1f1;color: #888686;*/
        /*}*/
        /*.authfy-panel-right button.btn, .authfy-panel-right p a, .authfy-panel-right a#agree{*/
        /*    background-color: #22a349;color: #ffffff;text-decoration: none;*/
        /*}*/
        /*.authfy-panel-right input.btn{*/
        /*    background-color: #22a349;color: #ffffff;text-decoration: none;font-weight: normal;*/
        /*}*/
        /*.authfy-panel-right p a.login{*/
        /*    background-color: white;color: #22a349;text-decoration: none;font-weight: normal;*/
        /*}*/
        /*.authfy-panel-right p a.login:hover{*/
        /*    background-color: #22a349;color: #ffffff;text-decoration: none;*/
        /*}*/
        /*.authfy-panel-right span.not-sent input{*/
        /*    background-color: white;color: #545454;text-decoration: none;*/
        /*    text-transform: capitalize;*/
        /*}*/
        /*.authfy-panel-right .passnet a {*/
        /*    float: right;color: #22a349;text-decoration: none;font-weight: 400;*/
        /*    padding-bottom: .4rem;*/
        /*}*/
        /* 1.mail 2.turkey 3.update 4.hub 5.million 6.chaos 7.negative 8.away 9.gravity 10.act 11.transfer 12.embark */
        /*.fa-eye-slash {*/
        /*    float: right;margin: -1.6rem .4rem auto auto;color: #545454;cursor: pointer;*/
        /*}*/
        /*.hideP {*/
        /*    float: right;margin: -2rem .4rem auto auto;*/
        /*}*/
        /*.nf {*/
        /*    width: fit-content;padding: .4rem;color: #ffffff;background-color: #22a349;*/
        /*    margin-right: 2rem;border-radius: 4px;font-weight: bold;*/
        /*}*/
        /*.nav-btn {*/
        /*    width: fit-content;padding: .4rem;color: #ffffff;background-color: #f3960a;*/
        /*    margin-right: 2rem;border-radius: 4px;font-weight: bold;*/
        /*}*/
        /*.authfy-panel-right button.btn:hover, .authfy-panel-right p a:hover {*/
        /*    background-color: #22a349;color: #ffffff;*/
        /*}*/
        /*.mail-message ul li {*/
        /*    text-align: left;font-size: 14px;*/
        /*}*/
        /*.mail-message ul li .fa-check {*/
        /*    color: white;*/
        /*}*/
        /*#alsswordStatus,#passwordStatus,#passStatus {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr1 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr2 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr3 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr4 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr5 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr6 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        /*#perr7 {*/
        /*    color: red;font-size: 13px;margin-top: .5rem;text-align: left;*/
        /*}*/
        @media screen and (max-width:967px) {
            
            .reg-steps .steps .step1{
                font-size: 14px;padding: .6rem;margin-left: 10%;
            } 
            .headline h1 {
                font-size: 30px;
            }
            .authfy-panel-right {
                width: 80%;
            }
            .authfy-panel-right .social-login {
                margin-bottom: 2rem;padding-bottom: 2rem;border-bottom: 1px solid white;
            }
            .authfy-panel-right h3 {
                font-size: 25px;
            }
        }
        
        @media screen and (max-width:767px) {
            
            .authfy-panel-right {
                width: 80%;
            }
            .authfy-panel-right .social-login {
                margin-bottom: 2rem;padding-bottom: 2rem;border-bottom: 1px solid white;
            }
            .authfy-panel-right h3 {
                font-size: 25px;
            }
        }
        
        
        @media screen and (max-width:633px) { 
            
            
        }
        
        
        @media screen and (max-width:625px) { 
            
        }
        
        @media screen and (max-width:567px) {
            
            .reg-steps .steps .step1{
                font-size: 12px;font-weight: bolder;margin-left: 10%;
                padding: .6rem;
            }
            .headline h1,.headline h2 {
                font-size: 24px;
            }
            .authfy-panel-right {
                width: 80%;
            }
            .authfy-panel-right .social-login {
                margin-bottom: 2rem;padding-bottom: 2rem;border-bottom: 1px solid white;
            }
            .authfy-panel-right h3 {
                font-size: 25px;
            }
        }
    </style>
    <body>
    <header><a href="home"><img src="images/fundrezalogo.png" alt="" class="fundrais"></a></header>
    <div class="container-scroller">
		<!-- partial:partials/_horizontal-navbar.html -->
    
    <div class="container-fluid full-height">
    <div class="row full-height">
      
      <div class="authfy-panel authfy-panel-right">
      
        <!-- authfy-login start -->
        <div class="authfy-login">
          <!-- panel-login start -->
          <div class="authfy-panel panel-login text-center active ">
            <div class="authfy-heading">
              <h3 class="auth-title pt-3 text-dark" style='font-size: 24px;'> <i class="fas fa-phone" style='color: #09da47'></i> Verify Mobile</h3>
            </div>
            
            <hr><br>

            <?php echo @$message;?>
            <!-- <div class="row"> -->
              <div class="col-xs-12 col-sm-12 col-md-12 form-col text-dark">
              <?php echo @$message;
                if(isset($_POST['smsOTP'])) {
                    $otp = isset($_POST['smsOTP']) ? $_POST['smsOTP'] : false;
                    $chk = $con -> prepare("SELECT smsCode FROM users WHERE email = ? LIMIT 1");
                    $chk -> bindParam(1,$Email);
                    $chk ->  execute();
                    $rst = $chk -> fetch(PDO::FETCH_ASSOC);
                    $rs = $rst['smsCode'];
                    if(isset($rs) && isset($otp) && $rs == $otp) {
                            $Email = @$_SESSION['Email'];
                            $emailCode = @$_SESSION['emailCod'];
                            $emailUname = @$_SESSION['emailUname'];
                            // sendregistrationMail($Email,$emailCode,$emailUname);
                             header("location:https://my.fundreza.com/s/choose-type");
                            ob_end_flush();
                    }
                }
              ?>
              
                <form action="" method="POST">
                    <?php 
                        require_once'dbh.php';
                        require_once'config.php';
                        $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_db;" , $serverusername, $serverpassword);
                        $selv = $con -> prepare("SELECT smsCode FROM users WHERE email = ? LIMIT 1");
                        $selv -> bindParam(1,$Email);
                        $selv ->  execute();
                        $rslt = $selv -> fetch(PDO::FETCH_ASSOC);
                        $r = $rslt['smsCode'];
                        if(isset($r) && $r != null) {
                            
                    ?>
                    <div class="form-group">
                        <div class="col-12">
                            <label style='color: #888688;margin-top: 1rem'>Enter SMS Code</label>
                            <input type="varchar" name="smsOTP" class="form-control" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-sm" value="Confirm Code" /> <span class="not-sent"> <input type="submit" name="sendOTP" class="btn btn-sm" style="cursor:pointer" id ="resend" value="resend code"> </span> 
                    </div>

                    <?php }else { ?>
                              
                    <div class="form-group">
                        <div class="col-12" style="width:100%;"><label style='color: #888688;margin-top: 1rem'>Enter Mobile Number</label><br/></div>
                        <div class="row" style="width: 100%;">
                                <br><div class="col-10"><input id="phone" name="phone" type="tel" class="form-control" style="width:100%;"/></div>
                                <div class="col-2 pull-right"><button type="submit" name="sendOTP" class="bg-success border-0 rounded text-white" style="white-space: nowrap;height: 35px;cursor:pointer;">Submit</button></div>
                        </div>
                    </div>          
                    <?php } ?>
                </form>
              </div>
            <!-- </div> -->
          </div>
         
        </div>
      </div>
    </div>
  </div>
		<!-- partial:partials/_footer.html -->
		
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
		  <script src="intltel/build/js/intlTelInput.js"></script>
          <script type="text/javascript">
		function toggleSidebar(ref){
			document.getElementById("sidebar").classList.toggle('active');
			}
			var input = document.querySelector("#phone");
    window.intlTelInput(input, {
    //   allowDropdown: false,
    //   autoHideDialCode: false,
    //   autoPlaceholder: "off",
    //   dropdownContainer: document.body,
    //   excludeCountries: ["us"],
    //   formatOnDisplay: false,
      initialCountry: "",
      geoIpLookup: function(callback) {
        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "ng";
          callback(countryCode);
        });
      },
    //   hiddenInput: "full_number",
    //   initialCountry: "auto",
    //   localizedCountries: { 'de': 'Deutschland' },
    //   nationalMode: false,
    //   onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      placeholderNumberType: "MOBILE",
    //   preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "intltel/build/js/utils.js",
    });
	</script>

    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
	 <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="javascript/login.js" type="text/javascript"></script>
  <script src="javascript/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
  <script type="text/javascript">
   
    </script>
    </body>
</html>
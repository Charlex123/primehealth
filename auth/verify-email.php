<?php
ob_start();
session_start();
ini_set('display_errors','0');
require_once'dbh.php';
require_once'config.php';
require_once'ranStrGen.php';
require_once'mailer.php';
$Email = $_SESSION['Email'];
if(!isset($_SESSION['Email'])) {
  header("location:https://primehealth.ng/auth/register.php");
}
$emailcode = $_SESSION['emailCode'];
$emailUname = $_SESSION['emailUname'];
$message = '';
if(isset($_POST['emailOTP'])) {
    $emailCode = intval($_POST['emailOTP']);
    if($emailCode == $_SESSION['emailCode']) {
     $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_db;" , $serverusername, $serverpassword);
        $activ = $con->prepare("UPDATE users SET user_emailStatus ='verified', emailCode = 0 WHERE email = ?");
        $activ->bindParam(1, $Email);
        $activ -> execute();
        $selv = $con -> prepare("SELECT user_emailStatus FROM users WHERE email = ? LIMIT 1");
        $selv -> bindParam(1,$Email);
        $selv -> execute();
        $reslt = $selv -> fetch(PDO::FETCH_ASSOC);
        $emailStat = $reslt['user_emailStatus'];
        $emailStat;
    if($emailStat == 'verified'){
        $message = 'Email Verification Success';
        $Email = $_SESSION['Email'];
        $emailUname = $_SESSION['emailUname'];
        accountverificationSuccess($Email,$emailUname);
        }else{
        header("Location:https://my.fundreza.com/verify-email");
        // exit();
        }
        }else{
            $message = "<div clecass='alert-danger pt-2 pb-2 rounded'>Wrong Email OTP <span class='close-err'>&times;</span> </div>";
            // exit();
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
	<title>Verify Email | Primehealth.ng </title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script lang="javascript" type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/fontawesome.min.css">
	<link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/all.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
	<script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/all.min.js"></script>
    <!-- inject:css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/customize.css">
  <link rel="stylesheet" href="../css/login_style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script type="text/javascript">_atrk_opts = { atrk_acct:"jSv+k1aQeSI1/9", domain:"ecoinofficial.org",dynamic: true};(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();</script><noscript><img src="https://certify.alexametrics.com/atrk.gif?account=jSv+k1aQeSI1/9" style="display:none" height="1" width="1" alt="javascript required" /></noscript>
    <style>
        body,.container-scroller {
            background: #f8fff6 !important;
        }
        .full-height {
            margin: 5rem auto;position: relative;
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
    </style>
    <body>
    <header><a href="home"><img src="../images/primehealthlogo.png" alt="primehealth logo" title="Primehealth, Nigeria Largest Healthcare Platform" width="124" height="35" class="fundrais"/></a></header>
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
              <h3 class="auth-title pt-3" style='font-size: 16px;'> <i class="fas fa-mail-bulk" style='color: #09da47'></i> Verify Email</h3>
            </div>
            
            <hr><br>

            <?php #echo @$message;?>
            <!-- <div class="row"> -->
              <div class="col-xs-12 col-sm-12 col-md-12 form-col">
                
              <?php
                // require_once'dbh.php';require_once'config.php';require_once'mailer.php';
                
                // $Email = $_SESSION['Email'];
                // $emailCode = $_SESSION['emailCode'];
                // $emailUname = $_SESSION['emailUname'];
                // if(isset($_POST['resendEmail']) && $_POST['resendEmail'] != "" && $_POST['resendEmail'] != null ) {
                
                //     $Email = $_SESSION['Email'];
                //     $emailCode = $_SESSION['emailCode'];
                    
                //     sendregistrationMail($Email,$emailCode,$emailUname);
                //         $message = "<div class='alert-danger pt-2 pb-2 rounded'>Email resend successfull <span class='close-err'>&times;</span> </div>";
                    
                    
                // }
                
              ?>
              
              <div class="panel-heading">
                <h4 class="panel-title">Confirm Email OTP </h4>

              </div>
              <?php echo @$message;?>
              <div class="mail-message">
                <ul class="text-left text-dark">
                    <li>
                        <i class="fas fa-check"></i> Hello <span class='' style='color: #888688'><?php echo @$_SESSION['emailUname'];?></span>, Check your email , you have been sent a code during your time of registration, it might take up to 10minutes to arrive.
                    </li>
                    <li>
                        <i class="fas fa-check"></i> Follow the instructions as sent to your mail
                    </li>
                    <li>
                        <i class="fas fa-check"></i> If you have not received a mail, please verify that you registered with your correct email address and also check your email spam folder
                    </li>
                </ul>
              </div>
                <form action="" method="POST">
                  <div class="form-group">
                    <label style='color: #888688;margin-top: 1rem'>Enter Email OTP</label>
                    <input type="varchar" name="emailOTP" class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-sm" value="Confirm OTP" /> <span class="not-sent"> <input type="submit" name="resendEmail" class="btn btn-sm" style="cursor:pointer" id ="resend" value="resend code"> </span> 
                  </div>
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
	<script type="text/javascript">
		function toggleSidebar(ref){
			document.getElementById("sidebar").classList.toggle('active');
			}
	</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
  <script src="javascript/popper.js/umd/popper.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="javascript/login.js" type="text/javascript"></script>
  <script src="javascript/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
  <script type="text/javascript">
   
    </script>
    </body>
</html>
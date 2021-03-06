<?php
session_start();
ob_start();
// session_set_cookie_params(0, '/', 'primehealth');
ini_set('display_errors','1');
require_once'../dbh.php';
require_once'../config.php';

// include'footer.php';
// include'navbar.php';
// include'sidebar.php';
// @$_SESSION['currentpage'] = $_SERVER['REQUEST_URI'];
// strip_tags(@$_SESSION['currentpage']);
$user_data = @$_SESSION['user'];
$userid = @$user_data['id'];
$name = @$user_data['fname'];


if(!isset($_SESSION['user'])) {
    header('Location:https://primehealth.ng/auth/healthprofessionalslogin');
    // exit();
}else {
    $user_data = @$_SESSION['user'];
    $userid = @$user_data['id'];
    $username = @$user_data['username'];
    $firstname = @$user_data['firsttname'];
    $lname = @$user_data['lastname'];
    $trackingId = @$user_data['trackingId'];
    $email = @$user_data['email'];

    $ptitle = @$user_data['profession'];
    if($ptitle == "Pharmacy") {
      $professiontitle = "Pharm.";
    }else if($ptitle == "MedLab") {
      $professiontitle = "MLS";
    }else if($ptitle == "MedLab") {
      $professiontitle = "Dr.";
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    if($page == 0) {
        $page = 1;
    }
    $limit = 10;
    $start = ($page - 1) * $limit;
    $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;", $serverusername, $serverpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ob_end_flush();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- <base href="http://localhost" /> -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../images/favicon.png">
  <title>
    My Store | Primehealth.ng
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- javascript -->
  <script src="../javascript/healthprofessionalsdashboard.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> -->
  <script src="https://cdn.tiny.cloud/1/s2dq9a4aoaulcq80cjf6ec0bmwezjtrm6t4gkfs1bsstxorl/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <!-- CSS Files -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/hpstyles.css?v=1.0.5" rel="stylesheet" />
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ../../ " target="_blank">
      <img src="../../images/primehealthlogo.png" alt="primehealth logo" title="Primehealth, Nigeria Largest Healthcare Platform" width="124" height="35" />
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="<?php echo "https://localhost/primehealth/healthprofessionals/account/$username" ?>">
            <div class="icon icon-shape icon-sm border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-store"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link cursor-pointer" onclick="openList('storelist')" >
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-cog text-dark"></i>
            </div>
            <span class="nav-link-text ms-1">Store Update</span>
          </a>
          <ul id="storelist" class="d-none list-unstyled nav-ul-button">
            <li class="nav-link-text ms-1 text-xs">
              <button type="submit">Upload Store logo</button>
            </li>
            <li class="nav-link-text ms-1 text-xs">
              <button type="submit">Upload Profile Logo</button>
            </li>
            <li class="nav-link-text ms-1 text-xs">
              <button type="submit">Upload Store logo</button>
            </li>
            <li class="nav-link-text ms-1 text-xs">
              <button type="submit">Upload Store logo</button>
            </li>
          </ul>
        </li>
        <?php
        if(@$user_data['profession'] == "Pharmacy") {
        ?>
        <li class="nav-item">
          <form method="POST">
            <input type="text" name="add_drug" hidden>
            <button type="submit" name="submit" class="nav-link">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-medkit text-dark"></i>
              </div>
              <span class="nav-link-text ms-1">Add Drugs</span>
            </button>
        </form>
        </li>
        
        <li class="nav-item">
          <form method="POST">
            <input type="text" name="addnewpharmacystore" hidden>
            <button type="submit" name="submit" class="nav-link">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-store text-dark"></i>
              </div>
              <span class="nav-link-text ms-1">Add New Pharm Store</span>
            </button>
        </form>
        </li>
        <?php }else if(@$user_data['profession'] == "MedLab") {?>

          <li class="nav-item">
            <form method="POST">
              <input type="text" name="addLabTest" hidden>
              <button type="submit" name="submit" class="nav-link">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa fa-medkit text-dark"></i>
                </div>
                <span class="nav-link-text ms-1">Add Lab Test</span>
              </button>
          </form>
        </li>

          <li class="nav-item">
          <form method="POST">
            <input type="text" name="addnewmedlabcenter" hidden>
            <button type="submit" name="submit" class="nav-link">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-clinic-medical text-dark"></i>
              </div>
              <span class="nav-link-text ms-1">Add New Medlab Center</span>
            </button>
        </form>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link  " href="rtl.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>settings</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(304.000000, 151.000000)">
                        <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                        <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="profile.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="sign-in.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="sign-up.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>spaceship</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(4.000000, 301.000000)">
                        <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                        <path class="color-background opacity-6" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                        <path class="color-background opacity-6" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                        <path class="color-background opacity-6" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-danger font-weight-bold active" aria-current="page"><?php echo "<span class='text-green-700'>Health Profession: </span> ". ucfirst(@$user_data['profession']); ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?php echo "<span class='text-green-700'>Health Professional: </span>". "$professiontitle " . ucfirst(@$user_data['firstname'])." ".ucfirst(@$user_data['lastname']); ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../../auth/login" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                    <h5 class="font-weight-bolder mb-0">
                      $53,000
                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                    <h5 class="font-weight-bolder mb-0">
                      2,300
                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                    <h5 class="font-weight-bolder mb-0">
                      +3,462
                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h3 class="text-sm mb-0 text-capitalize font-weight-bolder">My Health Vault</h3>
                    <h6 class="font-weight-normal text-sm mb-0">
                      Health History
                    </h6>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-user-shield text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- conytent -->
      
      <div class="row my-4">
        <div class="col-lg-12 col-md-12 mt-6 mb-md-0 mb-4">
              <?php
              if(isset($_POST['add_drug'])) {
                $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
                $storenames = $con->prepare("SELECT onboardlocations.storename FROM onboardlocations INNER JOIN healthprofessionals ON healthprofessionals.trackingId = onboardlocations.trackingId WHERE healthprofessionals.trackingId = ? GROUP BY healthprofessionals.trackingId");
                $storenames -> bindParam(1, $trackingId, PDO::PARAM_STR);
                if($storenames->execute()){
                  $re = $storenames -> fetchAll(PDO::FETCH_ASSOC);
              ?>
          <div class="card">
            <div class="card-body px-0 pb-2">
              <div id="" tabindex="-1" aria-hidden="true" class="inset-0 h-full w-full px-4 ">
                  <div class="relative mx-auto rounded-mde ">
                      
                      <div class="relative bg-white px-4 xs:px-0 sm:px-0 md:px-0 pt-4 rounded-lg">
                          <div class="text-center mx-auto conta">
                              <h1 class="text-xl headn font-bold text-green-500 dark:text-white mt-2 mb-2">Add Drug To Your Pharmacy Store</h1>
                              <div class="mt-4 mb-4"><em class="text-danger pt-6 py-6"><small>You Must be The Qualified And Certified Pharmacist To Continue</small></em></div>
                              <div class="mt-4 mb-4"><span>NB:</span> Post Only Products/Drug That You Have Available In Your Pharmacy Stores</div>
                            </div>
                          
                          <div class="py-2 px-2 text-center text-capitalize"><h1 class="font-weight-bold text-red-700 mx-auto">Products also refers to drugs and all health products</h1></div>

                          <form class="lg:px-8 md:px-2 sm:px-0 xs:px-0 pb-4 space-y-6 lg:px-4 sm:pb-6 xl:pb-8 headn" action="#" id="addproduct" method="post" enctype="multipart/form-data">
                            
                              <div>
                                    <label for="storename" class="">Pharmacy Store Name</label>
                                    <select name="storename" id="storename" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                      <option value="">Select Store </option>
                                    <?php 
                                      foreach($re as $storenames) {
                                        echo "<option value='storename'>".$storenames['storename']."</option>";
                                      }
                                      ?>
                                    </select>
                                    
                              </div>
                                
                              <div>
                                  <label for="productname" class="position-relative">Product/Drug Name <span class="text-danger">*</span></label>
                                  <input type="text" name="productname" id="productname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter product name" required>
                              </div>

                              <div>
                                  <label for="brand" class="position-relative">Product Brand (Optional)</label>
                                  <input type="text" name="brandname" id="brandname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your valid email address" required>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                    <div class="relative">
                                    <label class=' position-relative' style='margin-left:.4rem;'> Product Category <span class="text-danger">*</span></label>
                                        <select name="productcategory" id="productcategory" onchange="selectproductCategory('productcategory')" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Product Category--</option>
                                        <option value="Drug">Drug</option>
                                        <option value="Cream">Cream</option>
                                        <option value="Supplements">Supplements</option>
                                        <option value="Medical-devices">Medical devices</option>
                                        </select>
                                  </div>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                  <div class="relative d-none" id="drugsubcat">
                                      <label class=' position-relative' style='margin-left:.4rem;'> Drug SubCategory </label>
                                      <select name="drugsubcategory" id="drugsubcategory" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Drug SubCategory--</option>
                                        <option value="Hypertensive-drugs">Hypertensive Drugs</option>
                                        <option value="Sex-enhancing-drugs">Sex Enhancing drugs</option>
                                        <option value="Diabetic-drugs-devices">Diabetic Drugs</option>
                                        <option value="Antibiotics">Antibiotics</option>
                                      </select>
                                  </div>
                                  <div class="relative d-none" id="creamsubcat">
                                      <label class=' position-relative' style='margin-left:.4rem;'> Cream/Ointment SubCategory <span class="text-danger">*</span></label>
                                      <select name="creamsubcategory" id="creamsubcategory" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Cream/Ointment SubCategory--</option>
                                        <option value="Loxal Cream">Loxal Cream</option>
                                        <option value="Skin-Light">Skin Light</option>
                                        <option value="Lighten">Lighten</option>
                                      </select>
                                  </div>
                                  <div class="relative d-none" id="supplementsubcat">
                                      <label class=' position-relative' style='margin-left:.4rem;'> Supplements SubCategory <span class="text-danger">*</span></label>
                                      <select name="supplementsubcategory" id="supplementsubcategory" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Supplements SubCategory--</option>
                                        <option value="Andrew">Andrew</option>
                                        <option value="G-Growth">G Growth</option>
                                      </select>
                                  </div>
                                  <div class="relative d-none" id="medicaldevicesubcat">
                                      <label class='position-relative' style='margin-left:.4rem;'> Supplements SubCategory <span class="text-danger">*</span></label>
                                      <select name="medicaldevicesubcategory" id="medicaldevicesubcategory" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Medical devices SubCategory--</option>
                                        <option value="B-Check">Andrew</option>
                                        <option value="Sphygnomanometer">Sphygnomanometer</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="d-none" id="showdruginfo">
                                <div class="mt-0 mb-3">
                                    <label for="drugdosage" class="position-relative">Drug Dosage Information <span class="text-danger">*</span><div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Brand name is the official brand name of the product/drug</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                    <input type="text" name="drugdosage" id="drugdosage" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter drug dosage information" required>
                                </div>
                                <div class="my-3">
                                  <label for="drugdosage" class="position-relative">Drug Adverse Effects <span class="text-danger">*</span><div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Brand name is the official brand name of the product/drug</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="text" name="drugadverseeffects" id="drugadverseeffects" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter drug adverse effects" required>
                                </div>
                                <div class="my-3">
                                  <label for="drugdosage" class="position-relative">Drug Contra-Indications <span class="text-danger">*</span><div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Brand name is the official brand name of the product/drug</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="text" name="drugcontraindications" id="drugcontraindications" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter drug contraindications" required>
                                </div>
                                <div class="my-3">
                                  <label for="drugusageinfo" class="position-relative">Drug Usage Information <span class="text-danger">*</span><div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2"><small>Brand name is the official brand name of the product/drug</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="text" name="drugusageinfo" id="drugusageinfo" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter drug usage information" required>
                                </div>
                              </div>
                              
                              <div>
                                  <label for="availableqty" class="position-relative">Available Qty <span class="text-danger">*</span></label>
                                  <input type="varchar" name="availablequantity" id="availablequantity" placeholder="Available quantity" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>
                              <div>
                                  <label for="productweight" class="">Product Weight <span class="text-danger">*</span></label>
                                  <input type="varchar" name="productweight" id="productweight" placeholder="Enter your full residential address" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>
                              <div class="form-group">
                                  <label class='position-relative' style='margin-left:.4rem;'> Short Product Description <span class="text-danger">*</span></label>
                                  <textarea rows="5" cols="4" placeholder="Short product description" class='form-control' name="shortproductdescription" id='shortproductdescription'></textarea>
                              </div>
                              <div class="form-group">
                                  <label class='' style='margin-left:.4rem;'> Full Product Description <span class="text-danger">*</span></label>
                                  <textarea rows="5" cols="4" placeholder="Full product description" class='form-control' name="fullproductdescription" id='fullproductdescription'></textarea>
                              </div>
                              <div class="d-block" id="pusageinfo">
                                  <label for="productusage" class="position-relative">Product Usage Information <span class="text-danger">*</span><div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Copy and paste product usage information as </br> it is in product/drug leaf(or from your source), </br> or type it in the textarea below</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="text" name="productusageinfo" id="productusageinfo" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter " required>
                              </div>
                                
                              <div>
                                  <label for="discount" class="position-relative"> Percentage discount(Optional)<div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Copy and paste product usage information as </br> it is in product/drug leaf(or from your source), </br> or type it in the textarea below</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="varchar" name="discount" id="discount" placeholder="Enter desired disscount for this product" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>

                              <div>
                                  <label for="variants" class="position-relative"> Product Variants (Optinal)<div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Copy and paste product usage information as </br> it is in product/drug leaf(or from your source), </br> or type it in the textarea below</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <button type="button" onclick="toggleproductVariant('pvariant')" class="bg-green-400 text-black rounded-3 p-2 font-weight-bold"><small>Does your product have variants?</small></button>
                                  <div class="d-none py-2" id="pvariant">
                                    <input type="varchar" name="varaint1" id="varaint1" placeholder="Enter product first variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant2" id="variant2" placeholder="Enter product second variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant3" id="variant3" placeholder="Enter product third variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant4" id="variant4" placeholder="Enter product fourth variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant5" id="variant5" placeholder="Enter product fifth variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant6" id="variant6" placeholder="Enter product sixth variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    <input type="varchar" name="variant7" id="variant7" placeholder="Enter product sevent variant" class="bg-gray-50 forma my-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                  </div>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                  <div class="relative">
                                  <label class='' style='margin-left:.4rem;'> Stock Status <span class="text-danger">*</span></label>
                                      <select name="stockstatus" id="stockstatus" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Product Stock Status--</option>
                                        <option value="In-stock">In Stock</option>
                                        <option value="Out-of-stock">Out Of Stock</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                    <label for="" class="">Select Which Store To Display This Product</label>
                                    <div>
                                      <input type="radio" name="storedisplayoption" value="Selected" class="">
                                      <label for="Selected" class="font-weight-normal text-sm">Display in only my selected storename </label>
                                    </div>
                                    <div>
                                      <input type="radio" name="storedisplayoption" value="All" class="">
                                      <label for="username" class="font-weight-normal text-sm">Display in all my stores</label>
                                    </div>
                                </div>

                              <div>
                                      <span id="errAlert"></span>
                              </div>
                              
                              <div class="mx-auto text-center">
                                  <input name="submit" class="mx-auto text-center xs:w-full md:w-1/2 lg:w-2/5 text-white font-weight-bolder bg-green-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer" value="Add Product" onclick="addProduct()">
                              </div>

                              <div class="d-none">
                                  <label for="password" class="">Upload Product Images <span class="text-danger">*</span></label>
                                  <input type="file" name="files[]" id="productimages" multiple class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                  <input name="submit" class="mx-auto text-center xs:w-full md:w-1/2 lg:w-2/5 text-white font-weight-bolder bg-green-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer" value="Add Product" onclick="uploadfiles('productimages')">
                              </div>
                              
                           </form>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <?php } } else if(isset($_POST['addLabTest'])) { 
                    $con = new PDO("mysql:host=$serverhost;dbname=fundgcmf_primehealth;" , $serverusername, $serverpassword);
                    $storenames = $con->prepare("SELECT onboardlocations.storename FROM onboardlocations INNER JOIN healthprofessionals ON healthprofessionals.trackingId = onboardlocations.trackingId WHERE healthprofessionals.trackingId = ? GROUP BY healthprofessionals.trackingId");
                    $storenames -> bindParam(1, $trackingId, PDO::PARAM_STR);
                    if($storenames->execute()){
                      $re = $storenames -> fetchAll(PDO::FETCH_ASSOC);
            ?>
<div class="card">
            <div class="card-body px-0 pb-2">
              <div id="" tabindex="-1" aria-hidden="true" class="inset-0 h-full w-full px-4 ">
                  <div class="relative mx-auto rounded-mde ">
                      
                      <div class="relative bg-white px-4 xs:px-0 sm:px-0 md:px-0 pt-4 rounded-lg">
                          <div class="text-center mx-auto conta">
                              <h1 class="text-xl headn font-bold text-green-500 dark:text-white mt-2 mb-2">Add Lab Tests To Your MedLab Center</h1>
                              <div class="mt-4 mb-4"><em class="text-danger pt-6 py-6"><small>You Must be A Qualified And Certified Medical Lab Scientist To Continue</small></em></div>
                              <div class="mt-4 mb-4"><span>NB:</span> Post Only Labs That You Perform Competently In Your Center</div>
                          </div>
                          
                          <div class="py-2 px-2 text-center text-capitalize"><h1 class="font-weight-bold text-red-700 mx-auto">Products also refers to drugs and all health products</h1></div>

                          <form class="lg:px-8 md:px-2 sm:px-0 xs:px-0 pb-4 space-y-6 lg:px-4 sm:pb-6 xl:pb-8 headn" action="#" id="addproduct" method="post" enctype="multipart/form-data">
                            
                              <div>
                                    <label for="username" class="">MedLab Center Name</label>
                                    <select name="storename" id="" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                      <option value="">Select MedLab Center </option>
                                    <?php 
                                      foreach($re as $storenames) {
                                        echo "<option value='storename'>".$storenames['storename']."</option>";
                                      }
                                      ?>
                                    </select>
                                    
                              </div>
                                
                              <div>
                                  <label for="productname" class="position-relative">Lab Test Name <span class="text-danger">*</span></label>
                                  <input type="text" name="productname" id="productname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter product name" required>
                              </div>

                              <div>
                                  <label for="brand" class="position-relative">Product Brand <span class="text-danger">*</span></label>
                                  <input type="text" name="brandname" id="brandname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your valid email address" required>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                    <div class="relative">
                                    <label class=' position-relative' style='margin-left:.4rem;'> Test Category <span class="text-danger">*</span></label>
                                        <select name="productcategory" id="productcategory" onchange="selecttestCategory('productcategory')" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option disabled selected>--Select Test Category--</option>
                                        <option value="Drug">Drug</option>
                                        <option value="Cream">Cream</option>
                                        <option value="Supplements">Supplements</option>
                                        <option value="Medical-devices">Medical devices</option>
                                        </select>
                                  </div>
                              </div>
                              
                              <div>
                                  <label for="availableqty" class="position-relative">Available Qty <span class="text-danger">*</span></label>
                                  <input type="varchar" name="availablequantity" id="availablequantity" placeholder="Available quantity" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>
                                
                              <div>
                                  <label for="discount" class="position-relative"> Percentage discount(Optional)<div class="producttooltip d-none bottom-10 mb-4 position-absolute bg-gray-200 px-2 py-1 rounded-2 "><small>Copy and paste product usage information as </br> it is in product/drug leaf(or from your source), </br> or type it in the textarea below</small></div><button type="button" class="m-1 bg-transparent addproducttooltip"><i class="fa fa-question-circle-o text-red-500"></i></button></label>
                                  <input type="varchar" name="discount" id="discount" placeholder="Enter desired disscount for this product" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>

                              <div class="w-full mb-6 md:mb-0">
                                    <label for="" class="">Select Which Store To Display This Product</label>
                                    <div>
                                      <input type="radio" id="html" name="storedisplayoption" value="Selected" class="">
                                      <label for="Selected" class="font-weight-normal text-sm">Display in only my selected storename </label>
                                    </div>
                                    <div>
                                      <input type="radio" id="html" name="storedisplayoption" value="All" class="">
                                      <label for="username" class="font-weight-normal text-sm">Display in all my stores</label>
                                    </div>
                                </div>

                              <div>
                                      <span id="errAlert"></span>
                              </div>
                              
                              <div class="mx-auto text-center">
                                  <input name="submit" class="mx-auto text-center xs:w-full md:w-1/2 lg:w-2/5 text-white font-weight-bolder bg-green-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer" value="Post Lab Test" onclick="addProduct()">
                              </div>

                              <div class="d-none">
                                  <label for="password" class="">Upload Product Images <span class="text-danger">*</span></label>
                                  <input type="file" name="files[]" id="productimages" multiple class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                  <input name="submit" class="mx-auto text-center xs:w-full md:w-1/2 lg:w-2/5 text-white font-weight-bolder bg-green-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success cursor-pointer" value="Upload Image" onclick="uploadfiles('productimages')">
                              </div>
                              
                           </form>
                      </div>
                  </div>
              </div>
            </div>
          </div>
            
              <?php  }} else if(isset($_POST['addnewpharmacystore'])) {?>
                <div id="pharmplan-storeonboardmodal" class="h-full w-full px-4">
                    <div class="relative mx-auto bg-white w-full">

                        <div class="relative bg-white lg:px-8 py-8">
                            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#" id="pharmstoreform">
                                <h1 class="text-xl font-weight-bolder text-center mx-auto text-green-700 dark:text-white">Add New Pharmacy Store</h1>
                                <div>
                                    <label for="storename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store Name</label>
                                    <input type="text" name="storename" id="pharmacystorename" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Pharmacy Store Full Name" required>
                                </div>
                                <div>
                                    <label for="storephonenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store Contact Phonenumber</label>
                                    <input type="text" name="storephonenumber" id="pharmacystorephonenumber" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Pharmacy Store Contact Phonenumber" required>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store Email</label>
                                    <input type="email" name="email" id="pharmacystoreemail" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Pharmacy Store Email Address" required>
                                </div>
                                <div>
                                    <label for="license" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">License Covering Pharmacy Premise </label>
                                    <input type="varchar" name="premiselicense" id="pharmacystorepremiselicense" placeholder="Pharmacy Store Premise License Number" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="cac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store CAC Reg. No</label>
                                    <input type="varchar" name="cacregno" id="pharmacystorecacregno" placeholder="Pharmacy Store CAC Registration Number" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store Full Address</label>
                                    <input type="varchar" name="address" id="pharmacystoreaddress" placeholder="Pharmacy Store Full Address" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-2">
                                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                          City
                                      </label>
                                      <input class="appearance-none block w-full bg-gray-50 text-gray-700 rounded p-2.5 leading-tight" name="city" id="pharmacystorecity" type="text" placeholder="Enter Pharmacy Store City Location">
                                  </div>
                                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                          State
                                      </label>
                                      <div class="relative">
                                          <select class="block appearance-none w-full bg-gray-50 text-gray-700 p-2.5 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="state" id="pharmacystorestate">
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
                                      <input class="appearance-none block w-full bg-gray-50 text-gray-700 rounded p-2.5 leading-tight border-0 border-none focus:outline-none focus:bg-white focus:border-gray-500" name="zipcode" id="pharmacystorecityzipcode" type="text" placeholder="Enter Pharmacy Store City Zip Code">
                                  </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                        </div>
                                        <!-- <div class="ml-3 text-sm">
                                        <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                        </div> -->
                                    </div>
                                    <!-- <button type="button" class="text-lg font-bold text-white p-1 rounded bg-success hover:underline dark:text-green-500" onClick="onboardLocations('pharmplan-modal')">Next >></button> -->
                                    <div class="mx-auto">
                                      <input name="submit" class="text-lg font-bold text-white text-center p-1 rounded bg-green-700 hover:underline dark:text-green-500" value="Next >>" onclick="onboardLocations('pharmacy-submit')">
                                    </div>
                                </div>
                                <!-- <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                    Not registered? <a href="#" class="text-success hover:underline dark:text-blue-500">Create account</a>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
                <?php } else if(isset($_POST['addnewmedlabcenter'])) {?>
                  <div id="medlab-onboardlocation" class="h-full w-full px-4">
                    <div class="relative mx-auto rounded-md bg-white w-full">

                        <div class="relative bg-white lg:px-8 py-8">
                            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#" id="medlabstoreform">
                                <h3 class="text-xl font-weight-bolder text-center mx-auto text-green-700 dark:text-white">Add New Medical Laboratory Center</h3>
                                <div>
                                    <label for="storename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medical Lab Center Email</label>
                                    <input type="text" name="storename" id="medlabstorename" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Med Lad Center Email Address" required>
                                </div>
                                <div>
                                    <label for="storephonenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medical Lab Center Contact Phonenumber</label>
                                    <input type="text" name="storephonenumber" id="medlabstorephonenumber" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Med Lad Center Contact Phonenumber" required>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Medical Lab Center Email</label>
                                    <input type="email" name="email" id="medlabstoreemail" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Med Lab Center " required>
                                </div>
                                <div>
                                    <label for="license" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">License Covering Med Lab Center </label>
                                    <input type="varchar" name="premiselicense" id="medlabstorepremiselicense" placeholder="Pharmacy Store Premise License Number" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="cac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Med Lab  Center CAC Reg. No</label>
                                    <input type="varchar" name="cacregno" id="medlabstorecacregno" placeholder="Pharmacy Store CAC Registration Number" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pharmacy Store Full Address</label>
                                    <input type="varchar" name="address" id="medlabstoreaddress" placeholder="Pharmacy Store Full Address" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-2">
                                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                          City
                                      </label>
                                      <input class="appearance-none block w-full bg-gray-50 text-gray-700 rounded p-2.5 leading-tight" name="city" id="medlabstorecity" type="text" placeholder="Enter Pharmacy Store City Location">
                                  </div>
                                  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                          State
                                      </label>
                                      <div class="relative">
                                          <select class="block appearance-none w-full bg-gray-50 text-gray-700 p-2.5 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="state" id="medlabstorestate">
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
                                      <input class="appearance-none block w-full bg-gray-50 text-gray-700 rounded p-2.5 leading-tight border-0 border-none focus:outline-none focus:bg-white focus:border-gray-500" name="zipcode" id="medlabstorecityzipcode" type="text" placeholder="Enter Pharmacy Store City Zip Code">
                                  </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                        </div>
                                        <!-- <div class="ml-3 text-sm">
                                        <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                        </div> -->
                                    </div>
                                    <!-- <button type="button" class="text-lg font-bold text-white p-1 rounded bg-success hover:underline dark:text-green-500" onClick="onboardLocations('pharmplan-modal')">Next >></button> -->
                                    <div class="mx-auto">
                                      <input name="submit" class="text-lg font-bold text-white p-1 text-center rounded bg-green-700 hover:underline dark:text-green-500" value="Next >>" onclick="onboardLocations('medlab-submit')">
                                    </div>
                                    
                                </div>
                                <!-- <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                    Not registered? <a href="#" class="text-success hover:underline dark:text-blue-500">Create account</a>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ?? <script>
                  document.write(new Date().getFullYear())
                </script>,
                <span  class="font-weight-bold">PrimeHealth</span>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0"><img src="../../images/primehealthlogo.png" alt="primehealth logo" title="Primehealth, Nigeria Largest Healthcare Platform" width="124" height="35" /></h5>
          <p class="mt-2">My Activities</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Upload Profile Picture</h6>
        </div>
        <div>
          <h6 class="mb-0">Upload Practicing Licence</h6>
        </div>
        <!-- <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a> -->
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>

    // CKEDITOR.replace( 'shortproductdescription' );
    // CKEDITOR.replace( 'fullproductdescription' );
    // CKEDITOR.replace( 'productusageinfo' );
    // CKEDITOR.replace( 'drugusageinfo' );
    // CKEDITOR.replace( 'drugadverseeffects' );
    // CKEDITOR.replace( 'drugcontraindications' );
    // CKEDITOR.replace( 'drugdosage' );

    tinymce.init({
        selector: '#shortproductdescription'
      });

      tinymce.init({
        selector: '#fullproductdescription'
      });

      tinymce.init({
        selector: '#drugadverseeffects'
      });

      tinymce.init({
        selector: '#drugusageinfo'
      });

      tinymce.init({
        selector: '#productusageinfo'
      });

      tinymce.init({
        selector: '#drugcontraindications'
      });
      tinymce.init({
        selector: '#productusageinfo'
      });
      tinymce.init({
        selector: '#drugdosage'
      })

      // var container1 = document.getElementById('shortproductdescription');
      // var editor1 = new Quill(container1);
      // var container2 = document.getElementById('fullproductdescription');
      // var editor2 = new Quill(container2);
      // var container3 = document.getElementById('productusageinfo');
      // var editor3 = new Quill(container3);
      // var container4 = document.getElementById('drugusageinfo');
      // var editor4 = new Quill(container4);
      // var container5 = document.getElementById('drugadverseeffects');
      // var editor5 = new Quill(container5);
      // var container6 = document.getElementById('drugcontraindications');
      // var editor6 = new Quill(container6);
      // var container7 = document.getElementById('drugdosage');
      // var editor7 = new Quill(container7);


    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/healthprofessionalsdashboard.js?v=1.0.5"></script>
  <script src="../assets/js/addproduct.js?v=1.0.5"></script>
</body>

</html>
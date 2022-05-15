<?php 
    include_once 'header.php';
    include_once '../footer.php';
    include_once '../aboutsection.php';
?>
<!DOCTYPE html>
<!-- Chrome, Firefox OS, Opera and Vivaldi -->

<!-- Mirrored from www.1mg.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 17:38:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->
<meta name="theme-color" content="#FFF3E3" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FFF3E3" />
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FFF3E3" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<html>
    <head prefix="og: http://ogp.me/ns# nodejsexpressdemo: http://ogp.me/ns/apps/nodejsexpressdemo#">
        <!--Newrelic Header-->
        <!-- Application styles-->
        <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="msvalidate.01" content="099F7701BE7D0B79C7C51734FDC2A2D9" />
        <meta name="ahrefs-site-verification" content="eb0267c26a6f598370b8474c41fc54fc21b4cd8609ec062ce06f47f413eea869" />
        <link rel="manifest" href="notifyvisitors_push/chrome/manifest.json" />
        <!-- Apple Touch Icons-->
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png" />
        <link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
        <link rel="preload" as="font" type="font/woff2" crossorigin href="https://static.1mg.com/css/fonts/clearsans-1.00/WOFF2/ClearSans-Regular.woff2" />
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="../javascript/subscriptions.js"></script>
        <link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/fontawesome.min.css">
        <link rel="stylesheet" type='text/css' href="../fontawesome/fontawesomefiles/css/all.min.css">
        <script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
        <script lang="javascript" type="text/javascript" src="../fontawesome/fontawesomefiles/js/all.min.js"></script>
        <style>
            html {
                height: 100%;
                font-size: 14px;
            }
            body {
                font-family: "Roboto", "Clear Sans", "Poppins", "Helvetica Neue", Helvetica, Arial, sans-serif;
                line-height: 1.42857143;
                color: #333;
                height: inherit;
                background: #edf1f4;
                margin: 0px;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -o-user-select: none;
            }
            .ul-list {
                font-family: 'arial'
            }
            * {
                box-sizing: border-box;
            }
            @media screen and (max-width: 468px) {
                html {
                    font-size: 16px;
                }
            }
            @media screen and (min-width: 469px) and (max-width: 768px) {
                html {
                    font-size: 15px;
                }
            }
        </style>
        <style>
          #overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: #000000;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            opacity: .4;
            display: none;
            z-index: 3;
          }
          .pharmmodal {
            display: none;z-index: 5;position: absolute;transfor
          }
            a {
                text-decoration: none;
                color: #ff6f61;
            }
            .m10 {
                margin: 10px;
            }
            .mt8 {
                margin-top: 8px;
            }
            .mt10 {
                margin-top: 10px;
            }
            .mb10 {
                margin-bottom: 10px;
            }
            .ml10 {
                margin-left: 10px;
            }
            .p8 {
                padding: 8px;
            }
            .p10 {
                padding: 10px;
            }
            .plr10 {
                padding-left: 10px;
                padding-right: 10px;
            }
            .pt10 {
                padding-top: 10px;
            }
            .pb10 {
                padding-bottom: 10px;
            }
            .pb50 {
                padding-bottom: 50px;
            }
        </style>
        
        <style id="inject-async-stylesheets" type="text/css"></style>
        <style type="text/css">
            /* .flash-style {
                visibility: hidden;
            } */
        </style>
        <link rel="stylesheet" href="../css/main.css" />
        <link rel="stylesheet" href="../css/socials.css" />
        <link rel="stylesheet" href="../css/main2.css" />
        <!-- Google Publisher Tag-->
        <link rel="publisher" href="https://plus.google.com/+Healthkartplus" />
        <script src="../static.1mg.com/js/babel-polyfill.min.js"></script>
        <meta http-equiv="content-language" content="en" />
        <script>
            var dataLayer = [
                {
                    page: "home",
                    pType: "",
                    restricted: false,
                    isLoggedIn: false,
                    isPhoneNumberLinked: false,
                    city: "New Delhi",
                    citySlug: "new-delhi",
                    uname: "Guest",
                    affiliateDetails: "default",
                    isLabsReplica: false,
                    labsBasename: "/labs",
                    visitorId: "a8c3a4bd-91fe-4afb-ca97-82621164c6cd_acce55_1641749910",
                    criteo: { userData: { event: "setEmail", email: "" }, siteData: { event: "setSiteType", type: "d" }, eventData: { event: "viewHome" } },
                    showExternalElements: true,
                    home_ad_experiment: "Full",
                },
            ];
            var loadCss = function (cssPath) {
                var cssLink = document.createElement("link");
                cssLink.rel = "stylesheet";
                cssLink.href = cssPath;
                var head = document.getElementsByTagName("head")[0];
                var injectionPoint = document.getElementById("inject-async-stylesheets");
                // If referenceNode is null, the newNode is inserted at the end of the list of child nodes.
                head.insertBefore(cssLink, injectionPoint);
            };
        </script>
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no" />
        <link rel="canonical" href="index.html" />
        <link rel="amphtml" href="amp.html" />
        <style>
            #content-container {
                background: #f6f6f6;
            }
        </style>
        <title>Online Health Service | Primehealth</title>
        <meta name="keywords" content="online pharmacy, online medicine, medicine online, online medical store, buy medicine online, online pharmacy India, buy medicine online India, online chemist, online medicine purchase" />
        <meta
            name="description"
            content="India's best online pharmacy with a wide range of Prescription and OTC medicines. Order medicines online at 1mg's medicine store in 100+ cities like - Delhi, Mumbai, Bangalore, Kolkata, Hyderabad, Gurgaon, Noida, Pune etc. with free home delivery and exciting offers. Check Now!"
        />
        <meta property="og:title" content="Online Pharmacy India | Buy Medicines from India's Trusted Medicine Store: 1mg.com" />
        <meta
            property="og:description"
            content="India's best online pharmacy with a wide range of Prescription and OTC medicines. Order medicines online at 1mg's medicine store in 100+ cities like - Delhi, Mumbai, Bangalore, Kolkata, Hyderabad, Gurgaon, Noida, Pune etc. with free home delivery and exciting offers. Check Now!"
        />
        <meta property="og:url" content="https://www.1mg.com/" />
        <meta property="fb:app_id" content="212401972496595" />
        <meta property="og:site_name" content="1mg" />
        <meta property="og:image" content="https://img.1mg.com/images/1mg-logo-large.png" />
        <meta property="twitter:card" content="summary" />
        <meta property="twitter:site" content="@1mgofficial" />
        <meta property="twitter:domain" content="1mg.com" />
        <meta property="twitter:title" content="Online Pharmacy India | Buy Medicines from India's Trusted Medicine Store: 1mg.com" />
        <meta
            property="twitter:description"
            content="India's best online pharmacy with a wide range of Prescription and OTC medicines. Order medicines online at 1mg's medicine store in 100+ cities like - Delhi, Mumbai, Bangalore, Kolkata, Hyderabad, Gurgaon, Noida, Pune etc. with free home delivery and exciting offers. Check Now!"
        />
        <meta property="twitter:image" content="https://img.1mg.com/images/1mg-logo-large.png" />
        <script type="text/javascript">
            var rudderanalytics = (window.rudderanalytics = []);
            var methods = ["load", "page", "track", "identify", "reset", "ready"];
            for (var i = 0; i < methods.length; i++) {
                var method = methods[i];
                rudderanalytics[method] = (function (methodName) {
                    return function () {
                        rudderanalytics.push([methodName, ...arguments]);
                    };
                })(method);
            }
            rudderanalytics.load("1Xw0r3h5UkJhTd7i4MyWYyjDQFZ", "https://rudderapi.1mg.com/");
            var dl = window.dataLayer && window.dataLayer[0] ? Object.assign({}, window.dataLayer[0]) : null;
            var device = navigator && navigator.userAgent && navigator.userAgent.indexOf("Mobile") > -1 ? "mobile" : "desktop";
            if (dl) {
                var page = dl.page,
                    uname = dl.uname,
                    userId = dl.visitorId,
                    email = dl.email || "",
                    city = dl.city;
                if (page && page.length > 0) {
                    page = dl.page.charAt(0).toUpperCase() + dl.page.slice(1);
                }
                dl.criteo = null;
                rudderanalytics.identify(userId, { name: uname, email, city });
                rudderanalytics.page(page, `${page} page visited.`, { datalayer: dl, device: device });
            }
        </script>
        <script defer src="../cdn.rudderlabs.com/rudder-analytics.min.js"></script>
        <style>
            /* !critical:start */
            
        </style>
    </head>
    <script>
        !(function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(window, document, "script", "../connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1533315340292439");
        fbq("track", "PageView");
    </script>
    <body class="flash-style">
        <div id="layout-container">
            <div id="content-container" class="homepage-container">
                <div>
                    <!--if (headerType === req.enums.headerTypeEnum.CHECKOUT.value.type)--><!--  include ../includes/headers/headerCheckout--><!--else-->
                    <div class="main-content">
                        <div class="content">
                            <button style="display: none;" class="btn btn-secondary btn-back-to-top hide-imp"><i class="fa fa-angle-up"></i></button><input type="hidden" name="_csrf" value="y8QPLZ4Q-MBxGbqLAQBd7VkwyGkgRtgagDrw" />
                            <div id="container">
                            <div id="overlay"></div>
                                <div data-reactroot="">
                                    <?php echo @$header?>
                                    <!-- care plan head -->
                                    <div class="sub-head-container flex items-center w-screen min-h-screen">
                                        <div class="container ml-auto mr-auto flex flex-wrap items-start">
                                            <div class="w-full md:w-1/2 lg:w-1/2 pl-5">
                                              <h1 class="h1">Whatever your health needs are?</h1>
                                              <h3 class="h3">We've got you covered</h2>
                                              <h4 class="h4">Unbeatable health offers you can't find elsewhere, take our word for it</h4>                                            
                                            </div>
                                            <div class="w-full md:w-1/2 lg:w-1/2 pl-5">
                                              <img src="../images/headimgpic.jpg" class="headimg rounded" />
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="">
                                        <div class="flex items-center bg-indigo-100 w-screen min-h-screen" style="font-family: 'Muli', sans-serif;margin: 2rem auto;padding: 2rem auto">
                                            <div class="container ml-auto mr-auto flex flex-wrap items-start" style="margin: 2rem auto;padding: 2rem auto">
                                              <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
                                                <h1 class="text-3xl lg:text-4xl text-gray-700 my-8 mb-12">
                                                  Our Unbeatable Offers
                                                </h1>
                                              </div>
                                              <div class="w-full md:w-1/2 lg:w-1/5 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                                                <div class="rounded conta m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                  <div class="topright">25% OFF</div>
                                                  <div class="card-title">For Pharmacy Stores<img src="../images/pharmacylogo.png" alt="secticon" class="secticon"/></div>
                                                  <div class="rounded conta p-4 flex flex-col">
                                                    <div class="headn">Benefits you get ...</div>
                                                    <ul>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Reach Unlimited Number of Patients/customers
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Increase revenue and customer retention
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Decrease over-head expenses
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Keep easy track of important business metrics
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Increase visibility and online presence
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Provide tools to keep track of important business KPI
                                                      </li>
                                                    </ul>
                                                    <div class="startingfrom">
                                                      Starting from <span class="pricep">₦50,999</span> Monthly
                                                    </div>
                                                    <div class="sub-amount">
                                                      <div class="w-full px-3 mb-6 md:mb-0">
                                                        <a class="bg-gray-50 hover:bg-gray-50 text-gray font-semibold hover:text-white py-2 px-4 hover:border-transparent sub-button rounded" onclick="openModal('pharmacist-onboard-modal')">
                                                          Get Started
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="w-full md:w-1/2 lg:w-1/5 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                                                <div class="rounded conta m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                  <div class="topright1">18% OFF</div>
                                                  <div class="card-title">For Doctors<img src="../images/doctorlogo.png" alt="secticon" class="secticon"/></div>
                                                  <div class="rounded conta p-4 flex flex-col">
                                                    <div class="headn">Benefits you get ...</div>
                                                    <ul>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Reach Unlimited Number of Patients/customers
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Get more income by consulting patients online.
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Get to determine when you want to work.
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Get additional bonuses on patient recommendations
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Follow up your patients with ease from  one dashboard
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Collaborate with other health professionals from our app.
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Provide tools to keep track of important business KPI
                                                      </li>
                                                    </ul>
                                                    <div class="startingfrom">
                                                      Starting from <span class="pricep">₦0.00</span> Monthly
                                                    </div>
                                                    <div class="sub-amount">
                                                      <div class="w-full px-3 mb-6 md:mb-0">
                                                        <a class="bg-gray-50 hover:bg-gray-50 text-gray font-semibold hover:text-white py-2 px-4 hover:border-transparent sub-button rounded" onclick="openModal('docplan-modal')">
                                                          Get Started
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="w-full md:w-1/2 lg:w-1/5 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                                                <div class="rounded conta m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                  <div class="topright2">15% OFF</div>
                                                  <div class="card-title">For Medical Lab<img src="../images/medlablogo.png" alt="secticon" class="secticon"/></div>
                                                  <div class="rounded conta p-4 flex flex-col">
                                                    <div class="headn">Benefits you get ...</div>
                                                    <ul>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Reach Unlimited Number of Patients/customers
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Increase revenue
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i>  Increase visibility and   establish a strong online presenc
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Reduce lab reagents expiration
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Keep easy track of important business metrics
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Provide tools to keep track of important business KPI
                                                      </li>
                                                    </ul>
                                                    <div class="startingfrom">
                                                      Starting from <span class="pricep">₦0.00</span> Monthly
                                                    </div>
                                                    <div class="sub-amount">
                                                      <div class="w-full px-3 mb-6 md:mb-0">
                                                        <a class="bg-gray-50 hover:bg-gray-50 text-gray-200 font-semibold hover:text-white py-2 px-4 hover:border-transparent sub-button rounded" onclick="openModal('medlabplan-modal')">
                                                          Get Started
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="w-full md:w-1/2 lg:w-1/5 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                                                <div class="rounded conta m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                  <div class="topright3">15% OFF</div>
                                                  <div class="card-title">For Users <img src="../images/userlogo.png" alt="secticon" class="secticon"/></div>
                                                  <div class="rounded conta p-4 flex flex-col">
                                                    <div class="headn">Benefits you get ...</div>
                                                    <ul>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Get your medications delivered to your home
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Access your medical history/records with ease
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Keep track of your health status
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Avoid wait times, consult doctor at the comfort of your home
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Get discount of Lab and drug purchase
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Reach Unlimited Number of Patients/customers
                                                      </li>
                                                    </ul>
                                                    <div class="startingfrom">
                                                      Starting from <span class="pricep">₦6,999</span> Monthly
                                                    </div>
                                                    <div class="sub-amount">
                                                      <div class="w-full px-3 mb-6 md:mb-0">
                                                        <a class="bg-gray-50 hover:bg-gray-50 text-gray-700 font-semibold hover:text-white py-2 px-4 hover:border-transparent sub-button rounded" onclick="openModal('userplan-modal')">
                                                          Get Started
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="w-full md:w-1/2 lg:w-1/5 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                                                <div class="rounded conta m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                  <div class="topright4">35% OFF</div>
                                                  <div class="card-title"> Diabetic Care Plan <img src="../images/wheelchairlogo.png" alt="secticon" class="secticon"/></div>
                                                  <div class="rounded conta p-4 flex flex-col">
                                                    <div class="headn">Benefits you get ...</div>
                                                    <ul>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> 1 Free consultation with a Specialist per month
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> 1 Free FBC or Malaria test per month
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> 1 free Widal test per month
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Early access to sales
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-check checkfa"></i> Automatic prescription refills with Free home delivery
                                                      </li>
                                                    </ul>
                                                    <div class="startingfrom">
                                                      Starting from <span class="pricep">₦12,999</span> Monthly
                                                    </div>
                                                    <div class="sub-amount">
                                                      <div class="w-full px-3 mb-6 md:mb-0">
                                                        <a class="bg-gray-50 hover:bg-gray-50 text-gray-700 font-semibold hover:text-white py-2 px-4 hover:border-transparent sub-button rounded" onclick="openModal('chronicplan-modal')">
                                                          Get Started
                                                        </a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- Main modal -->
                                          <div id="medlabplan-modal" tabindex="-1" aria-hidden="true" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white max-w-md">
                                                  <!-- Modal content -->
                                                  <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('medlabplan-modal')">x</button>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                                          <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                                          <div>
                                                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                                              <input type="email" name="email" id="email" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                                                              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div class="flex justify-between">
                                                              <div class="flex items-start">
                                                                  <div class="flex items-center h-5">
                                                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                                                  </div>
                                                                  <div class="ml-3 text-sm">
                                                                  <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                                  </div>
                                                              </div>
                                                              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                                          </div>
                                                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Main modal -->
                                          <div id="docplan-modal" tabindex="-1" aria-hidden="true" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white max-w-md">
                                                  <!-- Modal content -->
                                                  <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('docplan-modal')">x</button>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                                          <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                                          <div>
                                                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                                              <input type="email" name="email" id="email" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                                                              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div class="flex justify-between">
                                                              <div class="flex items-start">
                                                                  <div class="flex items-center h-5">
                                                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                                                  </div>
                                                                  <div class="ml-3 text-sm">
                                                                  <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                                  </div>
                                                              </div>
                                                              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                                          </div>
                                                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="chronicplan-modal" tabindex="-1" aria-hidden="true" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white max-w-md">
                                                  <!-- Modal content -->
                                                  <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('chronicplan-modal')">x</button>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                                          <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                                          <div>
                                                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                                              <input type="email" name="email" id="email" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="pharmacy store email address" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                                                              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div class="flex justify-between">
                                                              <div class="flex items-start">
                                                                  <div class="flex items-center h-5">
                                                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                                                  </div>
                                                                  <div class="ml-3 text-sm">
                                                                  <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                                  </div>
                                                              </div>
                                                              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                                          </div>
                                                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          <div id="userplan-modal" tabindex="-1" aria-hidden="true" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white max-w-md">
                                                  <!-- Modal content -->
                                                  <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('userplan-modal')">x</button>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                                          <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                                          <div>
                                                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                                              <input type="email" name="email" id="email" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                                                              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div class="flex justify-between">
                                                              <div class="flex items-start">
                                                                  <div class="flex items-center h-5">
                                                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded  focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                                                  </div>
                                                                  <div class="ml-3 text-sm">
                                                                  <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                                  </div>
                                                              </div>
                                                              <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                                          </div>
                                                          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          
                                              <!-- Pharmacy onboarding component -->

                                              <div id="pharmacist-onboard-modal" tabindex="-1" aria-hidden="true" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white xs:w-full sm:w-full md:w-1/2 lg:w-1/2">
                                                  <!-- Modal content -->
                                                  <div class="flex justify-end p-2">
                                                        <button class="font-bold text-gray-900" onclick="closeModal('pharmacist-onboard-modal')">x</button>
                                                  </div>
                                                  <div class="relative bg-white px-8 py-8 rounded-lg shadow dark:bg-gray-700">
                                                      <div class="text-center mx-auto conta">
                                                          <h1 class="text-xl headn font-bold text-success dark:text-white mt-2 mb-2">Sign Up Your Pharmacy Store And Increase Your Drug Sales</h1>
                                                          <em class="text-danger"><small>You Must be The Pharmacy Store Owner Or The Pharmacist SupreIntendent (Or Both) In Order To Continue</small></em>
                                                          <h2 class="text-xl headn font-bold text-success-900 dark:text-white mt-2 mb-2">What you get <i class="fas fa-check fa-2x text-success"></i></h2>
                                                          <ul class="text-left font-light mt-3 mb-2 ul-list">
                                                              <li>
                                                                  <i class="fas fa-check-circle text-success"></i> Increased drug sales
                                                              </li>
                                                              <li>
                                                                  <i class="fas fa-check-circle text-success"></i> Familiarize your pharmacy store within your locality  
                                                              </li>
                                                              <li>
                                                                  <i class="fas fa-check-circle text-success"></i> Increased customer/patients retention rate due to increased Familiarity with drug store
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8 headn" action="#" id="pharmacistonboardform">
                                                          <h3 class="text-xl headn text-center mx-auto font-medium text-gray-900 dark:text-white">Increase Your Drug Sales By 200%</h3>
                                                          <div>
                                                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Username Of Choice</label>
                                                                <input type="varchar" name="username" id="pharmacistusername" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter username of choice" required>
                                                          </div>
                                                            
                                                          <div class="flex flex-wrap -mx-3 mb-2">
                                                            
                                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                                <div>
                                                                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your First Name</label>
                                                                    <input type="varchar" name="firstname" id="pharmacistfirstname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your first name" required>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                                <div>
                                                                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Last Name</label>
                                                                    <input type="varchar" name="lastname" id="pharmacistlastname" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your last name" required>
                                                                </div>
                                                            </div>
                                                          </div>

                                                          <div>
                                                              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Personal Email</label>
                                                              <input type="email" name="email" id="pharmacistemail" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your valid email address" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Pharmacist License Number</label>
                                                              <input type="varchar" name="practicinglicense" id="pharmacistlicensenumber" placeholder="Enter your pharmacist license number" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                                                              <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-50 forma text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <div>
                                                              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm Password</label>
                                                              <input type="password" name="password" id="confirmpassword" placeholder="Enter confirm password" class="bg-gray-50  text-gray-900 text-sm forma rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                          </div>
                                                          <button type="submit" class="w-full text-white bg-success hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success" onclck="registerhealthProfessionals('pharmplan-storeonboardmodal')">Sign Up Now</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Already registered? <a href="#" class="text-success-700 hover:underline dark:text-success-500">Login</a>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          <div id="pharmplan-storeonboardmodal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white xs:w-full sm:w-full md:w-1/2 lg:w-1/2">

                                                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8 py-8">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('pharmplan-storeonboardmodal')">x</button>
                                                      </div>
                                                      <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                                                          <h3 class="text-xl font-medium text-center mx-auto text-success dark:text-white">Onboard Your Pharmacy Store</h3>
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
                                                              <button type="button" class="text-lg font-bold text-white p-1 rounded bg-success hover:underline dark:text-green-500" onClick="onboardLocations('pharmplan-modal')">Next >></button>
                                                          </div>
                                                          <!-- <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Not registered? <a href="#" class="text-success hover:underline dark:text-blue-500">Create account</a>
                                                          </div> -->
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Payment modal -->
                                          <div id="payment-modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                                              <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white xs:w-full sm:w-full md:w-1/2 lg:w-1/2">

                                                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-1 py-8">
                                                      <div class="flex justify-end p-2">
                                                        <button onclick="closeModal('payment-modal')">x</button>
                                                      </div>
                                                      <div class="flex justify-center items-center ">
                                                        <div class="h-auto w-100 bg-white p-3 rounded-lg">
                                                            <p class="text-xl font-semibold">Payment Details</p>
                                                            <div class="input_text mt-6 relative"> <input type="text" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="John Row" /> <span class="absolute left-0 text-sm -top-4">Cardholder Name</span> <i class="absolute left-2 top-4 text-gray-400 fa fa-user"></i> </div>
                                                            <div class="input_text mt-8 relative"> <input type="text" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="0000 0000 0000 0000" data-slots="0" data-accept="\d" size="19" /> <span class="absolute left-0 text-sm -top-4">Card Number</span> <i class="absolute left-2 top-[14px] text-gray-400 text-sm fa fa-credit-card"></i> </div>
                                                            <div class="mt-8 flex gap-5 ">
                                                                <div class="input_text relative w-full"> <input type="text" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="mm/yyyy" data-slots="my" /> <span class="absolute left-0 text-sm -top-4">Expiry</span> <i class="absolute left-2 top-4 text-gray-400 fa fa-calendar-o"></i> </div>
                                                                <div class="input_text relative w-full"> <input type="text" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="000" data-slots="0" data-accept="\d" size="3" /> <span class="absolute left-0 text-sm -top-4">CVV</span> <i class="absolute left-2 top-4 text-gray-400 fa fa-lock"></i> </div>
                                                            </div>
                                                            <p class="text-lg text-center mt-4 text-gray-600 font-semibold">Payment amount:$12.98</p>
                                                            <div class="flex justify-center mt-4"> <button class="outline-none pay h-12 bg-orange-600 text-white mb-3 hover:bg-orange-700 rounded-lg w-1/2 cursor-pointer transition-all">Pay</button> </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="care-benefits">
                                            <h1>Additional Benefits</h1>
                                              <div class="col flex">
                                                <div class="w-full md:w-1/2 lg:w-1/3 mx-4 my-4">
                                                  <div class="rounded conta1 m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                    <div class="card-title1">Free delivery for orders above #5,000<img src="../images/freedelivery.png" alt="secticon" class="logoicon"/></div>
                                                    <div class="rounded flex flex-col">
                                                      <p>Buy medicines every month and spend #10,000 and above.</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="w-full md:w-1/2 lg:w-1/3 mx-4 my-4">
                                                  <div class="rounded conta1 m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                    <div class="card-title1">1 Free HbA1c or FBC<img src="../images/orderlogo.png" alt="secticon" class="logoicon"/></div>
                                                    <div class="rounded flex flex-col">
                                                      <p>If you visit a consultant or specialist doctor at least once every month</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="w-full md:w-1/2 lg:w-1/3 mx-4 my-4">
                                                  <div class="rounded conta1 m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                                                    <div class="card-title1">1 Free Widal test<img src="../images/labtest.png" alt="secticon" class="logoicon"/></div>
                                                    <div class="rounded flex flex-col">
                                                      <p>If you get a specific Lab test done at least every month</p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                    <?php echo @$aboutsection;?>
                                    <?php echo @$footer;?>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="mob-overlay" data-role="hide-mob-menu"></div>
        </div>
        <input type="hidden" value="FromHome" class="fromPage" />
        <script id="raven-bundle" src="../cdn.ravenjs.com/3.8.1/raven.min.js" async defer></script>
        <script src="../static.1mg.com/js/header-essentials.min.b3866860b1240a696c4c98611dcea126.js"></script>
        
        <div id="component"></div>
        
        <!-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                if (typeof userFlow !== "undefined") {
                    // userFlow.initPincodeContainer();
                    userFlow.initCityContainer();
                    userFlow.initSearchBar();
                    userFlow.initModal();
                    userFlow.initHeaderEvents();
                    userFlow.initFooterEvents();
                    userFlow.initHeader();
                    userFlow.initScrollTop();
                    userFlow.updateCityFromCookie();
                } else if (dataLayer.length && getCookie("affiliateDetails").indexOf("flipkart") > -1) {
                    dataLayer[0].showExternalElements = false;
                }
                if (document.getElementsByClassName("no-animate")[0]) {
                    document.getElementsByClassName("no-animate")[0].classList.remove("no-animate");
                }
            });

            if (document.getElementById("raven-bundle")) {
                document.getElementById("raven-bundle").onload = function () {
                    Raven.config("https://af0a11ecba564bd9ae2e978b96f6f3d3@frontend-sentry.1mg.com/3").install();
                };
            } -->
        </script>
        <script>
            // var googletag = googletag || {};
            // googletag.cmd = googletag.cmd || [];
        </script>
        <script>
            // document.addEventListener("DOMContentLoaded", function () {
            //     var buttons = Array.from(document.getElementsByClassName("sub-menu-link"));
            //     buttons.forEach((btn) => {
            //         btn.addEventListener("click", () => {
            //             var btnType = btn.getAttribute("data-value");
            //             if (btnType === "login" || btnType === "signup") {
            //                 var event = new CustomEvent("MOUNT", { bubbles: true, detail: btnType });
            //                 btn.dispatchEvent(event);
            //             }
            //         });
            //     });
            // });
        </script>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-KR9MB8");
        </script>
        <script type="text/javascript"></script>
        <script type="text/javascript">
            // (function () {
            //     var d = document,
            //         w = window;
            //     w.MgSensorData = w.MgSensorData || [];
            //     w.MgSensorData.push({
            //         cid: 625948,
            //         lng: "us",
            //         project: "a.mgid.com",
            //     });
            //     var l = "a.mgid.com";
            //     var n = d.getElementsByTagName("script")[0];
            //     var s = d.createElement("script");
            //     s.type = "text/javascript";
            //     s.async = true;
            //     var dt = !Date.now ? new Date().valueOf() : Date.now();
            //     s.src = "https://" + l + "/mgsensor.js?d=" + dt;
            //     n.parentNode.insertBefore(s, n);
            // })();
        </script>
        <div class="push"></div>
        
    </body>
    <!-- Mirrored from www.1mg.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 17:46:59 GMT -->
</html>
<script>
    function onboardProf() {
    document.getElementById("pharmacistonboardform").onsubmit = function(event) {
        event.preventDefault();
    }
    alert()
}
</script>
<script>
    
</script>

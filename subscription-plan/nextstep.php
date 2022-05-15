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
                                          
                                              <!-- Pharmacy onboarding component -->

                                            <div id="pharmacist-onboard" aria-hidden="true" class="">
                                              <div class="">
                                                  <!-- Modal content -->

                                                  <div class=" ">
                                                      <div class="">
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
                                                          <input name="submit" class="mx-auto text-center nf w100 sbn" id="preSub" value="Next" onclick="prevSubmit()">
                                                          <!-- <button type="button" class="w-full text-white bg-success hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-success-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-success dark:focus:ring-success" class="nextBtn" onclck="onboardProfessionals()">Sign Up Now</button> -->
                                                          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                              Already registered? <a href="#" class="text-success-700 hover:underline dark:text-success-500">Login</a>
                                                          </div>
                                                      </form>
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
            // (function (w, d, s, l, i) {
            //     w[l] = w[l] || [];
            //     w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            //     var f = d.getElementsByTagName(s)[0],
            //         j = d.createElement(s),
            //         dl = l != "dataLayer" ? "&l=" + l : "";
            //     j.async = true;
            //     j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            //     f.parentNode.insertBefore(j, f);
            // })(window, document, "script", "dataLayer", "GTM-KR9MB8");
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
        <script src="../javascript/subscriptions.js"></script>
        <script type="text/javascript">
   
</script>
    </body>
    <!-- Mirrored from www.1mg.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 17:46:59 GMT -->
</html>
<script>
    
</script>

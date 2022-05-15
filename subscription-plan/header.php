<?php 
    $header = '
        <header id="header">
            <div id="update-city-modal--react"></div>
            <div id="interstitial-view--react"></div>
            <div id="mob-search--react"></div>
            <div class="row hidden-xs styles__top-row___1GOEC" >
                <div class="col-sm-8 styles__top-right-col___2VrGG">
                    <div itemscope="" itemtype="http://schema.org/Organization" class="col-sm-3 col-md-2 company-logo default styles__company-logo___16bHp">
                        <meta itemprop="name" content="Primehealth.ng" />
                        <a href="index.html" class="styles__logo-link-new___2YHUJ styles__button-text___3JQsb" data-auto-logo="true">
                            <img src="../images/primehealthlogo.png" alt="primehealth logo" title="Primehealth, Nigeria Largest Healthcare Platform" width="124" height="35" />
                        </a>
                    </div>
                    <ul itemscope="" itemtype="https://www.schema.org/SiteNavigationElement" class="styles__list-navigation___3k1hk">
                        <li itemprop="name" data-auto-navlinks="Pharmacy" class="styles__active-tab___Upih6">
                            <a itemprop="url" href="index.html" class="button-text web-left-nav" target="_self" data-vars-event-label="Pharmacy">DRUGS<img src="../images/drugicon1.png" alt="drugicon" class="drugicon"/></a>
                        </li>
                        <li itemprop="name" data-auto-navlinks="Doctors" class="">
                            <a itemprop="url" href="online-doctor-consultation.html" class="" target="_blank" data-vars-event-label="Doctors"><i class="fa fa-map-marker text-danger glow2"></i> Nearby Labs</a>
                        </li>
                        <li itemprop="name" data-auto-navlinks="Doctors" class="">
                            <a itemprop="url" href="online-doctor-consultation.html" class="" target="_blank" data-vars-event-label="Doctors"><i class="fa fa-map-marker glow"></i> Nearby Doctors</a>
                        </li>
                        <li itemprop="name" data-auto-navlinks="Doctors" class="">
                            <a itemprop="url" href="online-doctor-consultation.html" style="color: red" target="_blank" data-vars-event-label="Doctors"> CONSULT A DOCTOR</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 pad0 lang-profile">
                    <div class="styles__profile-navigation___3SV-l">
                        <div class="hidden-xs styles__user-info___1cXqm">
                            <div class="styles__login-container___nk2No">
                                <a class="styles__login-link___2PwqA" data-auto-login="true"  href="../auth/register.php"><span>Login</span></a><span class="styles__seprator___1JeJP"> | </span>
                                <a class="styles__login-link___2PwqA" data-auto-signup="true" href="../auth/register.php"><span>Sign Up</span></a>
                            </div>
                        </div>
                        <div class="hidden-xs styles__offers___3H4Fh">
                            <a href="offers.html" class="styles__offers-link___3UIpv"><span>Offers</span></a>
                        </div>
                        <div class="styles__cart-counter___2nq62">
                            <div data-auto-cart-counter="true" class="CartCounter__cart-counter-list___1a7tL"><div class="CartCounter__cart-img___3xOz1 CartCounter__cart-black___RXZ58"></div></div>
                        </div>
                        <div class="hidden-xs styles__need-help___zkNiE">
                            <a href="help.html" class="t-need-help styles__need-help-link___jbEq-" data-auto-need-help="true"><span>Need Help?</span></a>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
            <div class="row styles__bottom-row___1a89P styles__border-one___2wAfi">
                <div class="col-sm-8 pad0 styles__location-search-div___XoEew">
                    <div class="col-sm-3 col-md-3 hidden-xs styles__location-container___1v8qv">
                        <div class="styles__container___2U-Bk">
                            <div class="styles__city-locator___2uYRv">
                                <span class="styles__locator-fa___3WHNG"><i class="fa fa-map-marker"></i></span>
                                <input placeholder="My Current Location" value="" name="city" class="styles__city-input___6e65P font-light" data-auto-location-select="dweb" id="location-selector" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 searchbar-container styles__search-bar___e1Afp">
                        <div class="styles__search-bar___nwXaU">
                            <form id="srchBarShwInfo-form" name="searchForm" class="styles__search-form___3JMjr">
                                <input
                                    type="text"
                                    id="srchBarShwInfo"
                                    placeholder="Search for Medicines and Health Products"
                                    value=""
                                    autocomplete="off"
                                    name="name"
                                    data-auto-search-bar="true"
                                    class="styles__search-input___3I6VS"
                                />
                                <span><div class="header_search_icon"></div></span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 hidden-xs styles__right-bottom___w9hKT">
                    <div class="styles__container___11wxb">
                        <div class="styles__quick-buy___33q_a">
                            <div class="header_quick_buy"></div>
                            <span class="styles__quick-buy-text___1wiL7 text-lg" style="color: #3090C7;font-weight: bold">
                                QUICK BUY!
                                <!-- -->Flat 25% off
                            </span>
                        </div>
                        <div class="styles__upload-prescription___TymaI">
                            <a class="t-prescription-order styles__link___2Wj-m" style="font-weight: bold" href="order-with-prescription.html" data-auto-upload-prescription="true"><span>Upload Prescription</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    
    ';
?>
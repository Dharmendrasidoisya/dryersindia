<?php  
session_start(); // Start the session

// Generate a random CAPTCHA value and store it in the session
$mycaptcha = mt_rand(100000, 999999);
$_SESSION['scaptcha'] = $mycaptcha;

// Optionally, store the CAPTCHA in a cookie (though not necessary for passing via session)
setcookie("ccaptcha", $mycaptcha, time() + 300, '/', 'dryersindia.com', isset($_SERVER['HTTPS']), true);


// Check if the request is over HTTPS or HTTP
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";

// Get the current domain
$domain = $_SERVER['HTTP_HOST'];

// Get the current page URL
$current_url = $protocol . $domain . $_SERVER['REQUEST_URI'];

// Output the current page URL
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="index, follow" />

    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon" />

    <!-- PAGE TITLE HERE -->
    <title>Contact Us - Industrial Fabricators</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- IMAGE POPUP -->
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin-1.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <style>
        @media (min-width: 840px) and (max-width: 1522px) {
            .float {
                left: 94.5% !important;
            }
        }
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WXCMZ2FX');</script>
   <!-- End Google Tag Manager -->

</head>

<body oncontextmenu="return false;">

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu">
            <div class="top-bar site-bg-white" style="background-color:#0b408a">
                <div class="container">
                    <div class="col-lg-12" style="padding-right: 0px;">

                        <div class="wt-topbar-left  flex-wrap text-right">
                            <ul class="wt-topbar-left-info">

                                <li style="color:#fff; float: left;border-right: none;"> <a class="fa fa-clock-o"></a>
                                    10:00 am to 7:00 pm </li>

                                <li><a style="color:#fff" class="flaticon-call" href="tel:+9181410 89669"> +91 81410
                                        89669</a></li>
                                <li><a style="color:#fff" class="flaticon-mail" href="mailto:response@dryersindia.com">
                                        response@dryersindia.com</a></li>

                                <li><a style="color:#e17a1e"
                                        href="https://www.facebook.com/people/Industrial-Fabricators/100067915088414/"
                                        target="_blank" class="fa fa-facebook"></a></li>
                                <li><a style="color:#e17a1e" href="https://twitter.com/dryersindia" target="_blank"
                                        class="fa fa-twitter"></a></li>
                                <li><a style="color:#e17a1e" href="https://www.instagram.com/ifabricators/"
                                        target="_blank" class="fa fa-instagram"></a></li>
                                <li><a style="color:#e17a1e" href="https://www.linkedin.com/company/dryersindia"
                                        target="_blank" class="fa fa-linkedin"></a></li>
                                <li><a style="color:#e17a1e" href="https://www.youtube.com/@industrialfabricators4925"
                                        target="_blank" class="fa fa-youtube"></a></li>
                            </ul>


                        </div>

                    </div>
                </div>
            </div>


            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container clearfix">

                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="images/logo.jpg" loading="lazy" alt="Industrial Fabricators">
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <!-- <li><a href="products.html">Products</a></li>    -->

                                <li class="has-child"><a href="javascript:(0)">Industry</a>
                                    <div class="fa fa-angle-right submenu-toogle"></div>
                                    <ul class="sub-menu">
                                        <li><a href="pharmaceuticals.html">Pharmaceuticals</a></li>
                                        <li><a href="chemicals.html">Chemicals</a></li>
                                        <li><a href="food-processing-systems.html">Food </a></li>
                                        <li><a href="others.html">Others</a></li>

                                    </ul>
                                </li>

                                <li class="has-child"><a href="javascript:(0)">Product</a>
                                    <div class="fa fa-angle-right submenu-toogle"></div>
                                    <ul class="sub-menu">
                                        <li><a href="air-drying-systems.html">Air Drying Systems</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="tray-dryer.html">Tray Dryer</a></li>
                                                <li><a href="fluid-bed-dryer.html">Fluid Bed Dryer</a></li>
                                                <li><a href="rotary-tray-dryer.html">Rotary Tray Dryer</a></li>
                                                <li><a href="rotary-dryer.html">Rotary Dryer</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="vacuum-drying-systems.html">Vacuum Drying Systems</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="rotocone-vacuum-dryer.html">Rotocone Vacuum Dryer</a></li>
                                                <li><a href="vacuum-tray-dryer.html">Vacuum Tray Dryer</a></li>
                                                <li><a href="rotary-vacuum-paddle-dryer.html">Rotary Vacuum Paddle
                                                        Dryer</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="heating-systems.html">Heating Systems</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="industrial-ovens.html">Industrial Ovens</a></li>
                                                <li><a href="hot-air-generators.html">Hot Air Generators</a></li>
                                                <li><a href="hot-water-generator.html">Hot Water Generator</a></li>
                                                <li><a href="hot-oil-generation-system.html">Hot Oil Generation
                                                        System</a></li>
                                                <li><a href="heat-exchangers.html">Heat Exchangers</a></li>
                                                <li><a href="electric-heaters.html">Electric Heaters</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="powder-processing-systems.html">Powder Processing Systems</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="vibro-shifters.html">Vibro Shifters</a></li>
                                                <li><a href="vibrating-screens.html">Vibrating Screens</a></li>
                                                <li><a href="multi-mill.html">Multi mill</a></li>
                                                <li><a href="pharmaceutical-pulverizer.html">Pharmaceutical
                                                        Pulverizer</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="mixers.html">Mixers </a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="ribbon-blender.html">Ribbon Blender</a></li>
                                                <li><a href="double-cone-blender.html">Double Cone Blender</a></li>
                                                <li><a href="octagonal-blender.html">Octagonal Blender</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="food-processing.html">Food Processing</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="food-dehydration-plant-machineries.html">Food Dehydration
                                                        Plant & Machineries</a></li>
                                                <li><a href="multi-purpose-cutting-machine.html">Multi-Purpose Cutting
                                                        Machine</a></li>
                                                <li><a href="fruits-peeling-machine.html">Fruits Peeling Machine</a>
                                                </li>
                                                <li><a href="root-vegetable-peeling-machine.html">Root Vegetable Peeling
                                                        Machine</a></li>
                                                <li><a href="#">Wet Grinder</a></li>
                                                <li><a href="fruits-vegetable-washing-systems.html">Fruits & Vegetable
                                                        Washing Systems</a></li>
                                                <li><a href="#">Commercial kitchen Equipment’s</a></li>
                                                <li><a href="#">Blanching Systems</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="pollution-control.html">Pollution Control </a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="dust-collection-systems.html">Dust Collection Systems</a>
                                                </li>
                                                <li><a href="scrubbing-systems.html">Scrubbing Systems</a></li>
                                                <li><a href="incinerators.html">Incinerators</a></li>
                                                <li><a href="etp-plants.html">ETP Plants</a></li>
                                                <li><a href="sludge-drying-systems.html">Sludge Drying Systems</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="fabrication-work.html">Fabrication Work</a>
                                            <div class="fa fa-angle-right submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li><a href="tanks-vessels.html">Tanks & Vessels</a></li>
                                                <li><a href="special-structures-fixtures.html">Special structures &
                                                        Fixtures</a></li>
                                            </ul>
                                        </li>


                                </li>

                            </ul>
                            </li>

                            <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-1-nav">
                            <div class="extra-cell two">
                                <div class="ap-btn-outer">
                                    <a href="contact.php" class="ap-btn contact-slide-show">Request A Quote <i
                                            class="fa fa-angle-double-right slide-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Nav -->
                        <div class="contact-slide-hide bg-cover"
                            style="background-image:url(images/background/bg11.jpg);">
                            <div class="contact-nav">
                                <a href="javascript:void(0)" class="contact_close">&times;</a>
                                <div class="contact-nav-form p-a30">
                                    <div class="contact-info   m-b30">

                                        <div class="wt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"></div>
                                            <div class="icon-content">
                                                <img src="images/request.png" loading="lazy" style="width: 150px;"
                                                    alt="Industrial Fabricators">
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h4 class="m-t0  wt-title">Phone number</h4>
                                                <p><a href="tel:8141089669"> +91 81410 89669</a></p>
                                            </div>
                                        </div>
                                        <div class="wt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="m-t0 wt-title">Email address</h4>
                                                <p><a
                                                        href="mailto:response@dryersindia.com">response@dryersindia.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="m-t0 wt-title">Address info</h4>
                                                <p>Shed No. 2321, 22'J' Type,<br> 3rd Phase, Lane Adj. B.O.B.,<br>
                                                    G.I.D.C., Vapi - 396195, Gujarat, India</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span>&copy; 2023 Industrial Fabricators</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SITE Search -->
                        <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input class="form-control" value="" name="q" type="search"
                                        placeholder="Type to search" />
                                    <span class="input-group-append"><button type="button" class="search-btn"><i
                                                class="fa fa-paper-plane"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->


        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center"
                style="background-image:url(images/banner/contact-us.jpg);">
                <div class="overlay-main site-bg-black opacity-06"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h1 class="wt-title">Contact Us</h1>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact us</li>
                            </ul>
                        </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <style>
                .error-message {
                    color: red;
                }

                .input-group {
                    margin-bottom: 5px;
                    z-index: 1;
                }

                .lblmb {
                    margin-bottom: 10px;
                }
            </style>

            <!-- CONTACT FORM -->
            <div class="section-full  p-t120 p-b120">
                <div class="section-content">
                    <div class="container">
                        <div class="contact-one">
                            <!-- CONTACT FORM-->
                            <div class="row no-gutters d-flex justify-content-center flex-wrap align-items-center">

                                <div class="col-lg-7 col-md-12">
                                    <div class="contact-form-outer site-bg-gray">
                                    <form id="defaultForm" method="post" action="pmail.php" class="cons-contact-form" enctype="multipart/form-data">
                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h3 class="wt-title m-b30">Contact Form</h3>
                                            <p>Feel free to contact us any time we will get back to you as soon as
                                                we can.</p>
                                        </div>
                                        <!-- TITLE END-->
                                        <input type="hidden" value="<?php echo $current_url; ?>"  name="curl" class="form-control">
                                        <input type="hidden" value="Get It From Industrial Fabricators Contact Us"  name="pname" class="form-control">
                                        <input type="hidden" value="<?php echo $mycaptcha; ?>"  name="capcode" class="form-control">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <input name="name" class="form-control" type="text" placeholder="Your Name:" required="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <input name="email" class="form-control" type="email" placeholder="Your Email:" required="true">
                                                </div>
                                            </div>
                               
     <div class="col-xs-12 col-sm-6">
    <div class="form-group">
        <input type="text" 
               name="phone" 
               id="phone" 
               placeholder="Phone / Mobile Number:" 
               class="form-control"
               pattern="^\+?[0-9]{1,12}$"
               maxlength="13"
               required="true"
               title="Please Put Valid Number">

        <!-- LIVE ERROR MESSAGE -->
        <small id="phoneError" style="color:red; display:none; font-size:13px;">
            Only digits are allowed.
        </small>
    </div>
</div>

<script>
document.getElementById('phone').addEventListener('input', function () {
    let value = this.value;
    let cleaned = value.replace(/[^0-9+]/g, ""); // remove alphabets & special chars

    // Show/hide error message
    if (value !== cleaned) {
        document.getElementById('phoneError').style.display = "block";
    } else {
        document.getElementById('phoneError').style.display = "none";
    }

    // Allow only one + at start
    if (cleaned.indexOf('+') > 0) {
        cleaned = cleaned.replace(/\+/g, "");
    }
    if ((cleaned.match(/\+/g) || []).length > 1) {
        cleaned = '+' + cleaned.replace(/\+/g, "").replace(/\D/g, "");
    }

    // Limit to 12 digits (not counting +)
    let plus = cleaned.startsWith('+') ? '+' : '';
    let digits = cleaned.replace(/\D/g, "").substring(0, 12);

    this.value = plus + digits;
});
</script>

                                           
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <input name="address" class="form-control" type="text" placeholder="Location:" required="true">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <textarea name="message" oncopy="return false" onpaste="return false" onkeypress="allowAlphaNumericSpace(event)" class="form-control" cols="" rows="5" placeholder="Enter Message:" required="true"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-submit text-center setbtnset formsetcpt">
                                                <div>
                                                <h4> Validation Code : <?php echo $mycaptcha;?></h4>
                                                <input id="captcha" type="text" name="captcha" placeholder="Enter Validation Code" required>
                                                <input id="kcaptcha" type="hidden" name="kcaptcha" value="<?php echo $mycaptcha; ?>" >
                                                </div>
                                                <a href="#">
                                                    <input type="submit" class="site-button sb-bdr-dark ctdcontactbtn" id="submit1" value="Submit Now" name="submit1">
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-12">
                                    <div class="contact-info site-bg-black"
                                        style="background-image: url(images/background/footer-map.png);">
                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer when-bg-dark">
                                            <h3 class="wt-title">Info</h3>
                                        </div>
                                        <!-- TITLE END-->

                                        <div class="contact-info-section">
                                            <div class="c-info-column">
                                                <h3 style="color: #fff; font-size: 24px;">Industrial Fabricators</h3>
                                                <br>
                                                <span class="m-t0">Address info</span>
                                                Shed No. 2321, 22'J' Type, 3rd Phase, Lane Adj. B.O.B., G.I.D.C., Vapi -
                                                396195, Gujarat, India
                                            </div>

                                            <div class="c-info-column">
                                                <span class="m-t0">Phone number</span>
                                                <p><a href="tel:91260-2421347"> Phone - +91260-2421347</a></p>
                                                <p><a href="tel:+91 8141089669"> Mobile - +91 8141089669</a></p>
                                            </div>

                                            <div class="c-info-column">
                                                <span class="m-t0">Email address</span>
                                                <p><a
                                                        href="mailto:response@dryersindia.com">response@dryersindia.com</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- GOOGLE MAP -->
            <div class="section-full">
                <div class="container">
                    <div class="gmap-outline p-b120">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29922.08679964964!2d72.949144!3d20.372132!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2e9f2d2809%3A0x112a0c5cfb830714!2sIndustrial%20Fabricators!5e0!3m2!1sen!2sin!4v1681795914363!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0; border-radius:10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top bg-bottom-center bg-no-repeat">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <div class="widget widget_about">
                                <h3 class="widget-title">About Us</h3>
                                <p>Industrial Fabricators is a proficient company, which from past many years has been
                                    fulfilling the heating requirements of many industries with its products. Simple to
                                    use and efficient in operations, our products are remarkable. </p>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/people/Industrial-Fabricators/100067915088414/"
                                            target="_blank" class="fa fa-facebook"></a></li>
                                    <li><a href="https://twitter.com/dryersindia" target="_blank"
                                            class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.instagram.com/ifabricators/" target="_blank"
                                            class="fa fa-instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/company/dryersindia" target="_blank"
                                            class="fa fa-linkedin"></a></li>
                                    <li><a href="https://www.youtube.com/@industrialfabricators4925" target="_blank"
                                            class="fa fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Company Links</h3>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="javascript:(0)">Industry</a></li>
                                    <li><a href="javascript:(0)">Product</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <style>
                            .widget_services ul li a.lbla:before {
                                display: none;
                            }

                            .widget_services ul li a.lblleft {
                                padding: 2px 0 0 0px;
                            }
                        </style>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services">
                                <h3 class="widget-title">Contact Us</h3>
                                <p>INDUSTRIAL FABRICATORS</p>
                                <span>
                                    Shed No. 2321, 22'J' Type, 3rd Phase, Lane Adj. B.O.B., G.I.D.C., Vapi - 396195,
                                    Gujarat, India
                                </span>
                                <ul>
                                    <li><a class="lbla lblleft" href="tel:+9181410 89669"><i class="flaticon-call"></i>
                                            + 91 81410 89669</a></li>
                                    <li><a class="lbla lblleft" href="mailto:response@dryersindia.com"><i
                                                class="flaticon-mail"></i> response@dryersindia.com</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_newsletter">
                                <h3 class="widget-title">Find Us</h3>
                            </div>
                            <a href="https://goo.gl/maps/DRXPdkVLWbpaymie9" target="_blank"> <img class="lblfooter"
                                    src="img/locate.png" alt="google map"> </a>

                        </div>


                    </div>


                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-info">
                        <div class="footer-copy-right">
                            <span class="copyrights-text">Made with <i class="fa fa-heart" aria-hidden="true"
                                    style="color: red;"></i> and passion by <span class="site-text-primary">Ads
                                    India.</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <a href="https://web.whatsapp.com/send?l=en&amp;phone=+918141089669&amp;text=Welcome To Industrial Fabricators"
            class="float deskwhatsapp" target="_blank">
            <img loading="lazy" src="img/whatsapp.gif">
        </a>
        <a href="https://api.whatsapp.com/send?phone=+918141089669&text=Welcome To Industrial Fabricators"
            class="float mobiwhatsapp" target="_blank">
            <img loading="lazy" src="img/whatsapp.gif">
        </a>

        <style>
            .float {
                position: fixed;
                width: 80px;
                bottom: 60px;
                left: 96%;
                z-index: 100;
                transform: rotate(0deg);
            }
        </style>

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <img loading="lazy" src="img/icon.gif" style="width: 350px;">
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    <script src="js/waypoints-sticky.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/theia-sticky-sidebar.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/lc_lightbox.lite.js"></script>

    <script type="text/javascript">
  function allowAlphaNumericSpace(e) {
  var code = ('charCode' in e) ? e.charCode : e.keyCode;
  if (!(code == 32) && // space
    !(code > 47 && code < 58) && // numeric (0-9)
    !(code > 64 && code < 91) && // upper alpha (A-Z)
    !(code > 96 && code < 123)) { // lower alpha (a-z)
    e.preventDefault();
  }
}
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXCMZ2FX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>
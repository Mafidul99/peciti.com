<?php include('process-mail.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PECITI-HOME | DIGITAL SERVICES </title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favic copy.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    
</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/Logo/Logo copy4.png" alt="logo"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Services-1</a></li>
                                        <li><a href="#">Services-2</a></li>
                                        <li><a href="#">Services-3</a></li>
                                    </ul>
                                    <li><a href="#">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <a href="#" class="btn btn-danger btnlog" target="_blank">Log-in</a>
                            <!--<a href="#" class="open-popup-link btn login-btn mr-im" target="_blank">Log-in</a>-->
                            <!--<a href="#signup-popup" class="open-signup-link btn login-btn">Signup </a>-->
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- Login popup form  -->

    <!--<div id="test-popup" class="white-popup mfp-hide">
        <div class="top-form-header">
            <h4>Login Form</h4>
        </div>
        <form action="#" method="post" id="main_login_form" novalidate="">
            <div class="row">

                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name0" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name1" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>

                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" class="btn dream-btn">Login</button>
                </div>
                <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Don't have an account? <a href="#signup-popup">Sign up</a></p>
                </div>
            </div>
        </form>

        <div class="other-accounts text-center">
            <p class="w-text">Login with other account</p>
            <div class="footer-social-info">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>-->

    <!-- signup popup form so: -->

    <!--<div id="signup-popup" class="white-popup mfp-hide">
        <div class="top-form-header">
            <h4>Signup Form</h4>
        </div>
        <form action="#" method="post" id="main_Signup_form" novalidate="">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name3" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Name</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="name" id="name4" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name5" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="password" name="name" id="name6" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Confirm Password</label>
                    </div>
                </div>

                <div class="col-12 col-sm-5 text-left ">
                    <button type="submit" class="btn dream-btn">Login</button>
                </div>
                <div class="col-12 col-sm-7 text-left">
                    <p class="mb-0 mt-10">Don't have an account? <a href="#test-popup">Sign up</a></p>
                </div>
            </div>
        </form>

        <div class="other-accounts text-center">
            <p class="w-text">Login with other account</p>
            <div class="footer-social-info">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>-->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area demo2 flex align-items-center">

        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="welcome-content v2">
                        <h1 class="wow fadeInUp w-text" data-wow-delay="0.2s">PECITI DIGITAL MULTIPLE SERVICES</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">We have over 3 year exprience in business consultting arena. We have over 3 year exprience in business consultting arena and artficial intelligence.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="banner-box">
                        <img src="img/core-img/banner2.png" alt="Banner">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="clearfix"></div>
    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-70 ring-bg" id="services">
        <div class="container">

            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Services</h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/aeps2.png" alt="">
                        </div>
                        <h6>Aadhaar Enabled Payment System (AEPS)</h6>
                        <p>Aadhaar Enabled Payment System also known as AEPS in short is basically a new payment service of India).</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/bbps.png" alt="">
                        </div>
                        <h6>Bharat Bill Pay (BBPS)</h6>
                        <p>Bharat Bill Payment System (BBPS) is an integrated bill payment system in India offering interoperable and accessible bill payment service.

                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/dmt2.png" alt="">
                        </div>
                        <h6>Domestic Money Transfer (DMT) </h6>
                        <p>Pefast-Digital is one of the top Money Transfer allows you to automate and maintain every facet of your money transfer business.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/multir.png" alt="">
                        </div>
                        <h6>All in One Mobile & DTH Recharge</h6>
                        <p>Mobile Recharge, postpaid mobile recharge, data card recharge, DTH recharge, etc.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/microatm.png" alt="">
                        </div>
                        <h6>Micro ATM </h6>
                        <p>Micro ATMs are card swipe machines through which banks can remotely connect to their core banking system.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="img/services/uti.png" alt="">
                        </div>
                        <h6>UTI & NSDL Pan Services</h6>
                        <p>Previously getting a PAN Card created is quite a difficult process. But now people can easily create their PAN Card online.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our Services Area End ##### -->



    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                        <img src="img/svg/right-image5.png" class="img-responsive center-block" alt="">
                        <!-- client meta -->
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant mt-s">
                        <!-- Dream Dots -->
                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">PECITI-Digital</h4>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Founded in 2020, Pefast Digital is a PECITI start up company which works towards financial inclusion and has developed innovative products and services under its brand, Peindia. Enables 1. billion Indians to transact cash-less
                            and paper-less while making payments or availing financials products & services.</p>
                        <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">
                        <!-- Dream Dots -->
                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">All Bank-Fastag</h4>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Your FASTag prepaid wallet will need to be recharged periodically to make e-toll payments. Just like any other e-payment wallet, you will be able to perform a FASTag wallet recharge in a few simple steps using below options</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Recharge your FASTag wallet by visiting BillPay/Recharge section in Mobile Banking App or any Bank Net-Banking or on any Other Websites / App’s with BillPay feature like Google Pay, Paytm, PhonePe etc.</p>
                        <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp mt-s" data-wow-delay="0.7s">
                        <img src="img/svg/All-Bank.png" class="center-block" alt="FASTag">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
    <div class="clearfix"></div>
    <div class="sh-bg">
        <!-- ##### Our features Area start ##### -->
        <section class="features section-padding-100">

            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Mobile Application</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="services-column col-lg-5 col-lg-offset-1 col-md-10 offset-md-1 col-xs-10 offset-xs-1">
                        <!--Services Block Four-->
                        <div class="services-block-four">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon ti-mobile"></span>
                                </div>
                                <h3><a href="#">Powerfull Mobile and Online App</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis quas tempore. Consequuntur commodi facilis sed similique.</div>

                            </div>
                        </div>

                        <!--Services Block Four-->
                        <div class="services-block-four">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon ti-widget"></span>
                                </div>
                                <h3><a href="#">Brings more Transparency and Speed</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aut repudiandae harum, fugit, necessitatibus veritatis molestias a eligendi distinctio. Nostrum expedita deserunt maiores adipisci.</div>
                            </div>
                        </div>

                        <!--Services Block Four-->
                        <div class="services-block-four" style="margin-bottom:0">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon ti-settings"></span>
                                </div>
                                <h3><a href="#">Special for Multiple Use Capabilities</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia maiores, ducimus animi a. Nulla ab dolor doloribus, aperiam, quam dolorum dicta vitae tempora, vero at quod error alias incidunt quidem.</div>
                            </div>
                        </div>

                    </div>
                    <div class="service-img-wrapper col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img src="img/phone1.png" class="center-block img-responsive phone-img" alt="Mobile App">
                            <img src="img/core-img/rings-bg.png" class="center-block img-responsive rings " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Our features Area End ##### -->
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                   
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="name"  required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                        <input type="text" name="email"  required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn dream-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <div class="footer-content-area spec">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img src="img/Logo/footer-logo2.png" alt="logo"></a>
                                </div>
                                <p>PECITI Digital is a start up company which works towards financial inclusion and has developed innovative products and services under its brand, paper-less while making payments or availing financials products & services.
                                </p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href="#">
                                    <p>Advertiser Agreement</p>
                                </a>
                                <a href="#">
                                    <p>Acceptable Use Policy</p>
                                </a>
                                <a href="#">
                                    <p>Privacy Policy</p>
                                </a>
                                <a href="#">
                                    <p>Technology Privacy</p>
                                </a>
                                <a href="#">
                                    <p>Developer Agreement</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href="#">
                                    <p>Advertisers</p>
                                </a>
                                <a href="#">
                                    <p>Developers</p>
                                </a>
                                <a href="#">
                                    <p>Resources</p>
                                </a>
                                <a href="#">
                                    <p>Company</p>
                                </a>
                                <a href="#">
                                    <p>Connect</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>342, Pakdi Pakri</p>
                                <p>Ballia, Uttar Pradesh - 277124</p>
                                <p>+91 8447949268</p>
                                <p>support@peciti.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/particles.html"></script>
    <script src="js/app.html"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>

    <script src="js/jquery.syotimer.min.js"></script>

    <script src="js/sweetalert2@11.js"></script>

    <!-- script js -->
    <script src="js/script.js"></script>

    <script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    ?>
        <script>            
            Swal.fire({
            position: 'top-end',
            toast: true,
            icon: '<?php echo $_SESSION['status_code']; ?>',            
            //title: 'Thank you !',
            text: "<?php echo $_SESSION['status']; ?>",
            showConfirmButton: false,
            timer: 7000
            })
        </script>        
    <?php
    unset($_SESSION['status']);
}
?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/622460131ffac05b1d7d2c23/1ftf1ejus';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->





</body>

</html>
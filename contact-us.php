<?php include('process-mail.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favic copy.png">
    <title>PECITI-CONTACT US | DIGITAL SERVICES </title>

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
   <?php include('page/header.php'); ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <div class="breadcumb-area" data-options='{direction: "normal"}'>
        <!--<div class="divimage dzsparallaxer--target" style="width: 100%; height: 60%; background-image: url(img/bg-img/bg-2.jpg)"></div>-->
        <!-- breadcumb content -->
        <div class="breadcumb-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                            <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">CONTACT US</h2>
                            <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Welcome Area End ##### -->   
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
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Have You Any Query?</h2>
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-md-8">                    
                        <div class="contact_form">
                            <form action="#" method="POST">
                                <div class="row">
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
                <div class="col-md-4">                    
                        <div class="contact_info mt-s fadeInUp" data-wow-delay="0.4s">
                            <h5 class="text-cont">Make Your Business Online?</h5><hr>                           
                            <p>Digital Marketing, App Development and other related services.</p>
                            <a href="#signup-popup" class="open-signup-link btn login-btn">Get Quote </a>
                        </div>
                        <hr>
                        <div class="contact_info mt-s fadeInUp" data-wow-delay="0.4s">
                            <h5 class="text-cont">PECITI- DIGITAL SERVICES</h5>
                            <hr>
                            <p class="textpra"> 342, Pakdi Pakri, Ballia, Uttar Pradesh - 277124</p><hr>
                            <ul>
                                <li><i class="fa-solid fa-square-phone faicon"></i>
                                <a class="callcont" href="#">+91 8447949268</a></li>                                
                                <li> <i class="fa-solid fa-envelope faicon"></i>
                                 <a class="callcont" href="mailto:support@peciti.com"> support@peciti.com</a></li>
                            </ul>
                        </div>
                </div>
                
            </div>
        </div>
            <!-- Contact Form -->
            
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
    <div id="signup-popup" class="white-popup mfp-hide">
        <div class="top-form-header">
            <h4>Get Quote Form</h4>
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
                        <input type="text" name="email" id="name4" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="phone" id="name5" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Mobile</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                        <input type="text" name="service" id="name6" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Services</label>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="group">
                    <textarea name="message" id="name6" required=""></textarea>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Message</label>
                    </div>                    
                </div>
                <div class="col-12 col-sm-5 text-left ">
                    <button type="button" class="btn dream-btn">Submit</button>
                </div>                
            </div>
        </form>        
    </div>

    <!-- ##### Footer Area Start ##### -->
    <?php include('page/footer.php') ?>
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
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/6bc3d12848.js" crossorigin="anonymous"></script>

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
                });                
            </script>        
        <?php
        unset($_SESSION['status']);
    }
    ?>

</body>
</html>
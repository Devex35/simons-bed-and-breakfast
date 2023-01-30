<?php

$myemail = 'exanton904@gmail.com';

$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to            = $myemail;
$email_subject = "$subject";
$email_body    = "\n Name: $name \n Email: $email \n Subject: $subject \n Message: \n $message";
$headers       = "From: $email";
 
mail($to, $email_subject, $email_body, $headers)
or die("Error!");

echo`


<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <title>
            Semente's | Windhoek bed and breakfast
        </title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- ex nihilo || September 2022 -->
        <!-- style start -->
        <link href="css/plugins.css" media="all" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
        <!-- style end -->
        <!-- google fonts start -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CMontserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type=
            "text/css">
        <!-- google fonts end -->
    </head>
    <body>
        <!-- preloader start -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader">
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- tst line start -->
        <div class="tst-line-t"></div>
        <div class="tst-line-l"></div>
        <div class="tst-line-r"></div>
        <div class="tst-line-b"></div>
        <!-- tst line end -->
        <!-- border top start -->
        <!-- container start -->
        <div class="container-fluid nopadding">
            <div class="extra-margin-border">
                <div class="border-top"></div>
            </div>
        </div>
        <!-- container end -->
        <!-- border top end -->
        <!-- navigation start -->
       
        <!-- navigation end -->
        <!-- home start -->
        <div class=" bg-dark" id="home">
            
            <!-- hero bg end -->
            <!-- scroll indicator start -->
            <div class="scroll-indicator">
                <div class="scroll-indicator-wrapper">
                    <div class="scroll-line fadeIn-element"></div>
                </div>
            </div>
            <!-- scroll indicator end -->
        </div>
        <!-- home end -->
        <!-- vertical lines start -->
        <div class="vertical-lines-wrapper">
            <div class="vertical-lines"></div>
        </div>
        <!-- vertical lines end -->
        <!-- about start -->

        <!-- about end -->
        <!-- video testimonials start -->
       
        <!-- video testimonials end -->
        <!-- facilities start -->
        <div id="facilities" class="section-all bg-light">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- section title start -->
                        <h2 class="section-heading">
                            <a href="/index.html" style="color: black;">Click to go me Home</a> 
                        </h2>
                        <!-- section title end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2 class="hero-heading hero-heading-dark">
                            Thank you for contacting us , we will get back to you as soon as possibe!
                        </h2>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container start -->
            
            <!-- container end -->
        </div>
        <!-- facilities end -->
        <!-- team start -->
        
        <!-- team end -->
        <!-- container start -->
        <div class="container-fluid">
            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-lg-12">
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                    <!-- line start -->
                    <div class="the-line"></div>
                    <!-- line end -->
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-lg-12">
                    <!-- parallax wrapper start -->
                    <div class="parallax-title">
                        <!-- HTML5 video URL start -->
                        <video playsinline autoplay muted loop>
                            <source src="https://www.11-76.com/html5-videos-22/luxex/luxex.mp4" type="video/mp4">
                        </video>
                        <!-- HTML5 video URL end -->
                        <!-- page title start -->
                        <div class="parallax-title-content">
                            Semente<br>
                            b&b
                        </div>
                        <!-- page title end -->
                    </div>
                    <!-- parallax wrapper end -->
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
        <!-- footer start -->
        <div id="footer" class="section-all bg-dark bg-dark-blog">
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row footer-credits">
                    <!-- footer logo start -->
                    <div class="footer-credits-logo">
                        <a href="#"><img alt="Logo Footer" src="img/logo-footer.png"></a>
                    </div>
                    <!-- footer logo end -->
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- social icons start -->
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a class="ion-social-twitter" href="#"><span>Twitter</span></a>                                
                                </li>
                                <li>
                                    <a class="ion-social-facebook" href="#"><span>Facebook</span></a>                                
                                </li>
                                <li>
                                    <a class="ion-social-instagram" href="#"><span>Instagram</span></a>                                
                                </li>
                            </ul>
                        </div>
                        <!-- social icons end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- copyright start -->
                        <div class="copyright">
                            &copy; All Rights Reserved.
                        </div>
                        <!-- copyright end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- footer end -->
        <!-- to top arrow start -->
        <div class="to-top-arrow">
            <span class="ion-ios-arrow-up"></span>
        </div>
        <!-- to top arrow end -->
        <!-- scripts start -->
        <script src="js/plugins.js"></script> 
        <script src="js/luxex.js"></script>
        <!-- scripts end -->
    </body>
</html>


`;

?>
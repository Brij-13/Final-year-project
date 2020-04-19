<?php
session_start();
include("checklogin.php");
check_login();

	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Home | Project Name</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=0.0.1">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mmenu.min.all.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/project_custom.js"></script>

    <!-- Css  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all_plugin.css" rel="stylesheet">
    <link href="css/project_custom.css" rel="stylesheet">

</head>

<!-- <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;"> -->

<body>
    <div class="main_page" id="page">
        <header class="main_header abc">
            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 logo_col">
                            <img src="images/logoo.png" alt="">
                            <!-- <h4>Worth Wheels Service</h4> -->
                        </div><!-- end logo_col -->
                        <div class="col-md-7">
                            <ul class="pull_right">
								<li><a href="index.php">HOME</a></li>
                                <li><a href="#">BOOK A SERVICE</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="#">CONTACT US</a></li>
                                <li><a href="login.php">LOGIN</a></li>
								<li><a href="register.php">REGISTER</a></li>
                            </ul>
                        </div><!-- end nav_cover -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end top_nav -->
        </header><!-- end main_header -->

        <div class="mo_menu abc">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="mobile_logo">
                            <!-- <a href="#"><img src="images/logo.png"></a> -->
                            <h4>Worth Wheels Service</h4>
                        </li>
                        <!-- end mobile_atm_logo -->
                        <li class="menu pull_right">
                            <a href="#mobile_menu">Menu</a>
                        </li>
                        <!-- end menu -->
                    </ul>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end mo_menu -->

        <nav id="mobile_menu">
            <ul class="nav_listing">
				<li><a href="index.php">HOME</a></li>
                <li><a href="#">BOOK A SERVICE</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="login.php">LOGIN</a></li>
				<li><a href="register.php">REGISTER</a></li>
            </ul><!-- end nav_listing-->
        </nav><!-- end mobile_menu -->

        <!-- Hero -->
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>India's First Doorstep Car Service</h1>
                        <h3>#Ghar<span>Pe</span>Service</h3>
                        <h5>Service At Your Place, Your Time. 7 Days A Week. Fair And Transparent Pricing.</h5>
                        <button> GET AN INSTANT QUOTE </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero -->

        <!-- Online -->
        <div class="online space-band-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Pitstop is the most trusted car service provider online.</h1>
                        <h3>Transparent. Economical. Convenient.</h3>
                    </div>
                    <div class="col-md-3">
                        <img src="images/home-2.png" alt="">
                        <h4>FIXED PRICING</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="images/home-2.png" alt="">
                        <h4>FIXED PRICING</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="images/home-2.png" alt="">
                        <h4>FIXED PRICING</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="images/home-2.png" alt="">
                        <h4>FIXED PRICING</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online -->

        <!-- Price -->
        <div class="price">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>We aim to build our services on 5 key pillars of
                            Convenience, Quality, Price, Transparency and Fast Delivery</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price -->

        <!-- service -->
        <div class="service space-band-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Is car service at doorstep possible? How does it work?</h1>
                        <h3>We always strive to break the conventional norms.</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="images/homep-6.png" alt="">
                        <h4>GET A QUOTE</h4>
                        <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent
                            quote.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/homep-6.png" alt="">
                        <h4>GET A QUOTE</h4>
                        <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent
                            quote.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/homep-6.png" alt="">
                        <h4>GET A QUOTE</h4>
                        <p>Tell us what your car needs or ask for a diagnostic. Receive a free, fast, fair & transparent
                            quote.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- service -->

        <!-- Offer -->
        <div class="offer space-band-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Services We Offer</h1>
                        <h3>Expert Technicians. Doorstep Service. On-Time Delivery.</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-box">
                            <img src="images/home-9.png" alt="">
                            <h4>GENERAL SERVICE</h4>
                            <p>This service is recommended after every 6 months/10,000 km.It Includes oil and filter
                                change,visual inspection, top up of all the key fluids & cleaning of brake parts.</p>
                            <label>Starts At 2900/-</label>
                            <button>BOOK SERVICE</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-box">
                            <img src="images/home-10.png" alt="">
                            <h4>GENERAL SERVICE</h4>
                            <p>This service is recommended after every 6 months/10,000 km.It Includes oil and filter
                                change,visual inspection, top up of all the key fluids & cleaning of brake parts.</p>
                            <label>Starts At 2900/-</label>
                            <button>BOOK SERVICE</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-box">
                            <img src="images/home-12.png" alt="">
                            <h4>GENERAL SERVICE</h4>
                            <p>This service is recommended after every 6 months/10,000 km.It Includes oil and filter
                                change,visual inspection, top up of all the key fluids & cleaning of brake parts.</p>
                            <label>Starts At 2900/-</label>
                            <button>BOOK SERVICE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer -->

        <!-- App -->
        <div class="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Car Service in your pocket</h1>
                        <h3>We always strive to break conventional norms.</h3>
                    </div>
                    <div class="col-md-6">
                        <img src="images/mobile.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h4>Variety of services</h4>
                        <p>Instant services like a Preventive Maintenance Schedule (PMS), General Service, Washing &
                            Cleaning, Body Repair and complex repair jobs are easily available at your fingertips.</p>

                        <h4>Easy payment</h4>
                        <p>We provide smooth payment options.</p>

                        <h4>Live updates</h4>
                        <p>You can track the progress on the servicing of your vehicle through live updates on the app.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- App -->

        <!-- TESTIMONIALS -->
        <div class="testi">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc enim eros, commodo et
                                    est non, lobortis accumsan nisi. Vivamus porttitor, tortor ac pharetra imperdiet,
                                    metus ligula pulvinar ex, vitae vulputate purus dui vitae arcu. Vivamus consectetur
                                    purus pulvinar est porttitor finibus.!”
                                </p>
                                <img src="images/client-1.jpg" alt="">
                                <h3>John Doe</h3>
                            </div>
                            <div class="item">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc enim eros, commodo et
                                    est non, lobortis accumsan nisi. Vivamus porttitor, tortor ac pharetra imperdiet,
                                    metus ligula pulvinar ex, vitae vulputate purus dui vitae arcu. Vivamus consectetur
                                    purus pulvinar est porttitor finibus.!”
                                </p>
                                <img src="images/client-1.jpg" alt="">
                                <h3>John Doe</h3>
                            </div>
                            <div class="item">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc enim eros, commodo et
                                    est non, lobortis accumsan nisi. Vivamus porttitor, tortor ac pharetra imperdiet,
                                    metus ligula pulvinar ex, vitae vulputate purus dui vitae arcu. Vivamus consectetur
                                    purus pulvinar est porttitor finibus.!”
                                </p>
                                <img src="images/client-1.jpg" alt="">
                                <h3>John Doe</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIALS -->

        <!-- Store -->
        <div class="store">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Download our App</h1>
                    </div>
                    <div class="col-md-6">
                        <img src="images/playstore.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Store -->

        <!-- Google Map -->
        <div class="map space_band">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.5908876314365!2d72.11971611494438!3d21.71860658562872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f574ba735c539%3A0x387d9b85bd2cd04e!2sGyanmanjari%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1571202370831!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Google Map -->

        <!-- cars -->
        <div class="car">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Top Most Serviced Cars</h1>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Honda City (petrol)</li>
                            <li>Hyundai i10 (petrol)</li>
                            <li>Hyundai Santro (petrol)</li>
                            <li>Hyundai i20 (petrol)</li>
                            <li>Maruti Suzuki Swift (petrol)</li>
                            <li>Ford Figo (diesel)</li>
                            <li>Chevrolet Beat (petrol)</li>
                            <li>Volkswagen Polo (petrol)</li>
                            <li>Tata Indica (petrol)</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Honda City (petrol)</li>
                            <li>Hyundai i10 (petrol)</li>
                            <li>Hyundai Santro (petrol)</li>
                            <li>Hyundai i20 (petrol)</li>
                            <li>Maruti Suzuki Swift (petrol)</li>
                            <li>Ford Figo (diesel)</li>
                            <li>Chevrolet Beat (petrol)</li>
                            <li>Volkswagen Polo (petrol)</li>
                            <li>Tata Indica (petrol)</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Honda City (petrol)</li>
                            <li>Hyundai i10 (petrol)</li>
                            <li>Hyundai Santro (petrol)</li>
                            <li>Hyundai i20 (petrol)</li>
                            <li>Maruti Suzuki Swift (petrol)</li>
                            <li>Ford Figo (diesel)</li>
                            <li>Chevrolet Beat (petrol)</li>
                            <li>Volkswagen Polo (petrol)</li>
                            <li>Tata Indica (petrol)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- cars -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul>
                            <li>About Us</li>
                            <li>Contact Us</li>
                            <li>Privacy Policy</li>
                            <li>Terms and Conditions</li>
                        </ul>
                        <p>© 2019 - Worth Wheels Services. - All rights reserved</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="soc">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->

    </div><!-- end main_page -->

</body>

</html>
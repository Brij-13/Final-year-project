<?php 
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['submit']))
{
 	
	$name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
	$message=$_POST['message'];
	$a=date('Y-m-d');
    $msg=mysqli_query($con,"INSERT INTO `contactus`(`id`,`name`,`email`,`mobile`,`message`,`date`) VALUES (null,'$name','$email','$mobile','$message','$a')");

if($msg)
{
    
	echo "<script>alert('Thanks!! Your Message Registered');</script>";
    $extra="welcome.php";
}
else
{
    // echo "<script>alert('Register not successfully');</script>";
    echo "error in insert".mysqli_error($con);
}
}


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
								<li><a href="welcome.php">HOME</a></li>
                                <li><a href="#">BOOK A SERVICE</a></li>
                                <li><a href="#about-us">ABOUT US</a></li>
                                <li><a href="#offer">OFFERS</a></li>
                                <li><a href="#">CONTACT US</a></li>
                                <!-- <li><a href="login.php">LOGIN</a></li>
								<li><a href="register.php">REGISTER</a></li> -->
                                <li><a href="logout.php">LOG OUT</a></li>
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
                <li><a href="#about-us">ABOUT US</a></li>
                <li><a href="#offer">OFFERS</a></li>
                <li><a href="#">CONTACT US</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="register.php">REGISTER</a></li>
            </ul><!-- end nav_listing-->
        </nav><!-- end mobile_menu -->

        <!-- Login Form -->
        <div class="container">
            <div class="login">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-logo">
                            <img src="images/wlogo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-form">
                            <h2>Contact Us</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName"
                                        aria-describedby="emailHelp" name="name" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputnumber"
                                        aria-describedby="emailHelp" name="mobile" placeholder="Enter Contact Number">
                                </div>

                                <div class="form-group">
                                    <textarea rows="3" cols="100" name="message" placeholder="Your Message"></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-login">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form -->

                <!-- Price -->
                <div class="price" id="about-us">
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
        <div  class="service space-band-margin">
            <div class="container" >
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
                </div >
            </div>
        </div>
        <!-- service -->

        <!-- Offer -->
        <div class="offer space-band-margin"  id="offer" >
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

<?php include "main_footer.php" ?>
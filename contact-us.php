<?php 
session_start();
include('dbconnection.php');
if(isset($_POST['login']))
{
	$password=$_POST['password'];
	$dec_password=$password;
$ret= mysql_query("SELECT * FROM users WHERE email='".$_POST['email']."' and password='$dec_password'");
$num=mysql_fetch_array($ret);
if($num>0)
{
	
	$extra="welcome.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
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
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName"
                                        aria-describedby="emailHelp" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputnumber"
                                        aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                </div>

                                <div class="form-group">
                                    <textarea rows="2" cols="2" name="comment" form="usrform" placeholder="Your Message"></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-login">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form -->

<?php include "main_footer.php" ?>
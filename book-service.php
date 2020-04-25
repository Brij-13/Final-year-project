<?php 
require_once('dbconnection.php');
require_once('geoplugin.class.php');

//Code for Registration 
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
                                <li><a href="book-service.php">BOOK A SERVICE</a></li>
                                <li><a href="#about-us">ABOUT US</a></li>
                                <li><a href="#offer">OFFERS</a></li>
                                <li><a href="contact-us.php">CONTACT US</a></li>
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
            <li><a href="welcome.php">HOME</a></li>
                                <li><a href="book-service.php">BOOK A SERVICE</a></li>
                                <li><a href="#about-us">ABOUT US</a></li>
                                <li><a href="#offer">OFFERS</a></li>
                                <li><a href="#">CONTACT US</a></li>
                                <li><a href="logout.php">LOG OUT</a></li>
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
                            <h2>Book Service</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                <h3>Enter Full Name</h3><input type="text" class="form-control" id="exampleInputName"
                                        aria-describedby="emailHelp" name="name" placeholder="Enter Full Name" required>
                                </div>

                                <div class="form-group">
                                <h3> Enter Contact Number</h3><input type="text" class="form-control" id="exampleInputnumber"
                                        aria-describedby="emailHelp" name="mobile" placeholder="Enter Contact Number" required>
                                </div>

                                <div class="form-group">
                                <h3>Enter Car Number</h3>

                                <div class="form-control">
                                    GJ-
                                <select name="code">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    

                                    </select> - <select name="serial">
                                    <option value="AA">AA</option><option value="AB">AB</option><option value="AC">AC</option><option value="AD">AD</option>
                                    <option value="AE">AE</option><option value="AF">AF</option><option value="AG">AG</option><option value="AH">AH</option>
                                    <option value="AI">AI</option><option value="AJ">AJ</option><option value="AK">AK</option><option value="AL">AL</option>
                                    <option value="AM">AM</option><option value="AN">AN</option><option value="AO">AO</option><option value="AP">AP</option>
                                    <option value="AQ">AQ</option><option value="AR">AR</option><option value="AS">AS</option><option value="AT">AT</option>
                                    <option value="AU">AU</option><option value="AV">AV</option><option value="AW">AW</option><option value="AX">AX</option>
                                    <option value="AY">AY</option><option value="AZ">AZ</option>
                                </select> - <input type="text" name="number" maxlength ="4" pattern="^(0{3}[1-9]|0{2}[1-9]\d|0[1-9]\d{2}|[1-9]\d{3})$" required >
                                </div>
                                </div>

                                <div class="form-group">
                                <h3>  Choose a car:</h3>
                                <div class="form-control">
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" placeholder="Enter Email"> -->
                                        
                                <select name="car_name">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                    </select>
                                </div></div>
                                

                                <div class="form-group">
                                <h3>  Service Description</h3>
                                    <textarea rows="3" cols="50" name="description" required></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-login">Submit</button>
                            </form>
                            
                                <h3 style="color:white">*Here we Access your location</h3>

                            <?php
                            $geoplugin = new geoPlugin();
                            echo $geoplugin->locate();

                            $city = $geoplugin->city;
                    
                            echo $geoplugin->city;?><br>
                            
                    <?php   $countryName = $geoplugin->countryName;
                            echo $geoplugin->countryName; ?><br>
                    
                    <?php   $latitude=$geoplugin->latitude;
                            echo $geoplugin->latitude; ?><br>
                    
                    <?php   $longitude=$geoplugin->longitude;
                            echo $geoplugin->longitude; ?>

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
<?php
        if(isset($_POST['submit']))
{
 	
	$name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $code=$_POST['code'];
    $serial=$_POST['serial'];
    $number=$_POST['number'];
    $car_name = $_POST['car_name'];
    $description = $_POST['description'];
    
	$a=date('Y-m-d');
    $msg=mysqli_query($con,"INSERT INTO `services`(`id`,`name`,`mobile`,`code`,`serial`,`number`,`car_name`,`description`,`city`,`countryName`,`latitude`,`longitude`,`date`) VALUES (null,'$name','$mobile','$code','$serial','$number','$car_name','$description', '$city','$countryName','$latitude','$longitude','$a')");

if($msg)
{
    
	echo "<script>alert('Thanks!! Your Service Registered Successfull, Our team contact you quickly :)');</script>";
    $extra="welcome.php";
}
else
{
    // echo "<script>alert('Register not successfully');</script>";
    echo "error in insert".mysqli_error($con);
}
}


?>

<?php include "main_footer.php" ?>
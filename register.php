<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
 	
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];
	$enc_pass=md5($pass);
	$a=date('Y-m-d');
    $msg=mysqli_query($con,"INSERT INTO `users`(`id`,`email`,`mobile`,`pass`,`date`) VALUES (null,'$email','$mobile','$enc_pass','$a')");

if($msg)
{
    
	echo "<script>alert('Register successfully');</script>";
    $extra="welcome.php";
}
else
{
    // echo "<script>alert('Register not successfully');</script>";
    echo "error in insert".mysqli_error($con);
}
}


?>





<?php include("main_header.php"); ?>
        <!-- Login Form -->
        <div class="container">
            <div class="login">
                <div class="row">
                    <div class="col-md-6">
                        <div class="login-logo">
                            <img src="images/wlogo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-form">
                            <h2>REGISTER</h2>
                            <form method="post">
								<div class="form-group">
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>
								<div class="form-group">
                                    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Mobile Number" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" required>
                                </div>
                                <button type="submit" name="signup" class="btn btn-primary btn-login">Submit</button>
                            </form>
                            <div class="reg">
                                <a href="login.php">Already have account!!</a>
                            </div>
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
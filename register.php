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
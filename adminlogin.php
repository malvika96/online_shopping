<?php 
if(!isset($_SESSION)) { session_start(); } 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login']))
{
	$name=$_POST['username'];
	$pass=$_POST['password'];
	
	$query = "select * from adminlogin where password='$pass' AND email='$name'";
	$result = $conn->query($query);
	$data1=$result->fetch_assoc();
	
	if ($result->num_rows > 0)
	 {
		 $_SESSION['first']=$data1["adminname"];
		 $_SESSION['last']=$data1["lastname"];
		 $_SESSION['loginstatus']="yes";
		header('location:admin/default/adminhome.php'); // Redirecting To Other Page
		//<a href="../admin/default/adminhome.php">Flat Able - Premium Admin Template by Phoenixcoded</a>
	} 
	
	else
	{
	 	echo "<script>alert('Username or Password is invalid');</script>";
	}

$conn->close();
	
}

	


?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/slim1.1/template/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 13:26:57 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Slim Responsive Bootstrap 4 Admin Template</title>

    <!-- Vendor css -->
    <link href="adminpowerlogin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="adminpowerlogin/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="adminpowerlogin/css/slim.css">

  </head>
  <body background="adminpowerlogin/img/bacground.jpg">

    <div class="signin-wrapper">

      <div class="signin-box">
        <h2 class="slim-logo"><a href="index.html"></a></h2>
        <h2 class="signin-title-primary" align="center">Welcome</h2>
        <h3 class="signin-title-secondary" align="center">Sign in to continue.</h3>
<form action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your email" name="username">
        </div><!-- form-group -->
        <div class="form-group mg-b-50">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
        </div><!-- form-group -->
        <input type="submit" class="btn btn-primary btn-block btn-signin" name="login" value="SIGN IN">
        <p class="mg-b-0">Don't have an account? <a href="page-signup.html">Sign Up</a></p>
	</form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="adminpowerlogin/lib/jquery/js/jquery.js"></script>
    <script src="adminpowerlogin/lib/popper.js/js/popper.js"></script>
    <script src="adminpowerlogin/lib/bootstrap/js/bootstrap.js"></script>

    <script src="adminpowerlogin/js/slim.js"></script>

  </body>

<!-- Mirrored from themepixels.me/slim1.1/template/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 13:26:57 GMT -->
</html>

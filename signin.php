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
	$email=$_POST['username'];
	$pass=md5($_POST['pwd']);
	$sql="select * from customer where password='".$pass."' and email='".$email."'";
	$result=$conn->query($sql);
	$data3= $result->fetch_assoc();
	if ($result->num_rows > 0)
	 {
		 $_SESSION['first_name']=$data3["firstname"];
		 $_SESSION['email']=$data3["email"];
		 $_SESSION['loginstatus']="yes";
		header('location:home.php'); // Redirecting To Other Page
		//<a href="../admin/default/adminhome.php">Flat Able - Premium Admin Template by Phoenixcoded</a>
	} 
	

	
	
	else
	  {
		echo "<script>alert('invalid')</script>";
		}
}


	
	

$conn->close();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php include 'header.php';?>
<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Sign In</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">SignIn<span> Form</span></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Welcome back to Modern Shoppe ! <br> Not a Member? <a href="register.html">  Register Now »</a> </h4>
			</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
				<form action="" method="post">
                	<div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Email </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
                   	<input type="text" class="user" name="username" placeholder="Enter your email" required="">
                    </div>
                    </div>
					<div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Password </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
					<input type="password" name="pwd" class="lock" placeholder="Password">
                    </div>
                    </div>
					<input type="submit" name="login" value="Sign In">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
		</div>
		<div class="login-page-bottom">
			<h5> - OR -</h5>
			<div class="social-btn"><a href="#"><i>Sign In with Facebook</i></a></div>
			<div class="social-btn sb-two"><a href="#"><i>Sign In with Twitter</i></a></div>
		</div>
	</div>
	<!--//login-->
	
<?php include 'footer.php';?>
</body>
</html>
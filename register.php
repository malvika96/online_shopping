<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshopping";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
   die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];
	
	$pwd=md5($_POST['pwd']);
	$conpwd=md5($_POST['conpwd']);
	
	$sql="insert into customer(first_name,last_name,email,mobile,password,confirmpassword) values('$fnm','$lnm','$email','$mno','$pwd','$conpwd')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	}
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
	
}
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
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Register<span> Form</span></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="signin.html">  Sign In »</a> </h4>
			</div>
           
			<div class="login-body">
				<form class="wow fadeInUp animated"  action="" method="post">
                
					<div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> First name </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
                    <input type="text" placeholder="First Name" required="" name="fnm">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Last name </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
                    <input type="text" placeholder="Last Name" required="" name="lnm">
                    </div>
                    </div>
					<div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Email Address </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
					<input type="email" class="email" placeholder="Email Address" required="" name="email">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Mobile Number </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
                	<input type="text" class="number" placeholder="mobile number" required="" name="mno">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Password </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
					<input type="password"  placeholder="Password" name="pwd">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-5 col-form-label">
 					<label> Confirm Password </label>
                    </div>
                    <div class="col-sm-5 col-form-label">
                    <input type="password"   placeholder="Confirm Password" name="conpwd">
                    </div>
                    </div>
					<input type="submit" name="submit" value="REGISTER">
				</form>
			</div>
		</div>
	</div>
	<!--//login-->
	
<?php include 'footer.php';?>

</body>
</html>
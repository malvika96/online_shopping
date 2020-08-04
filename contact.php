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
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['msg'];
	
	$sql="insert into customer_contact(cname,email,subject,message) values('$name','$email','$subject','$message')";
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
				<li class="active">Contact Us</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">How To <span> Find Us</span></h3>
				<img src= "images/contact-logo-black.jpg">
			</div>
			</div>	
	</div>
	<div style="background:url(images/contact.jpg)"><!--address-->
		<div class="container">
        
			<div class="address-row" >
            <br>
            <br>
				<div class="col-md-6 address-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid" style="background-color:#FFFBF0">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s"><font color="#AA0000" size="+2"><b>CONTACT US</b></font> </h4>
                        <br>
						<form action="" method="post">
                        <p>
							<input class="wow fadeIndown animated form-control" data-wow-delay=".6s" type="text" placeholder="Enter Your Name" name="name" required></p><br>
							<p><input class="wow fadeIndown animated form-control" data-wow-delay=".7s" type="email" placeholder="Enter your Email" name="email"required></p><br>
							<p><input class="wow fadeIndown animated form-control" data-wow-delay=".8s" type="text" placeholder="Enter Subject" name="subject"required></p><br>
							<p><textarea class="wow fadeIndown animated form-control" data-wow-delay=".8s" placeholder="Message" name="msg" style="resize:none" required></textarea></p><br>
                            <div  align="center">
							<p><input class="wow fadeIndown animated btn btn-success"  data-wow-delay=".9s"  type="submit" value="SEND" name="submit"></p>
						</div>
                        </form>
                                               
					</div>
                    <br>
                        <br>
                        
				</div>
              
                <?php 
				$ret="select * from admin_contact";
	$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())

	  {
	  
				?>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s" style="background-color:#FFFBF0">
						<h4><font color="#AA0000" size="+2"><b>ADDRESS</b></font></h4>
						<p><font color="#000000"><b><?php echo $row->address;  ?></b></font></p>
					<br>
                    <br>
                    <br>
                    <br>
                    
						<h4><font color="#AA0000" size="+2"><b>PHONE</b></font> </h4>
						<font color="#000000">
                        <b>
                        <p><?php echo $row->phone;  ?></p>
                        <br>
						<p><?php echo $row->phone1;  ?></p>
                        </b>
                        </font>
					<br>
                    <br>
                    <br>
					
                    
						<h4><font color="#AA0000" size="+2"><b>MAIL</b></font></h4>
                        <font color="#000000">
                        <b>
						<p><a href="mailto:example@mail.com"> <?php echo $row->mail;  ?></a></p>
						
                        </b>
                        <?php $cnt++;} ?>
                        </font>
                        
                        
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact-->	
	

<?php include 'footer.php';?>

</body>
</html>
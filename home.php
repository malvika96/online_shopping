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
function make_query($conn)
{
	$qry="select * from advertisement";
	$result=mysqli_query($conn,$qry);
	return $result;
}
function make_slide($conn)
{
	$output='';
	$count=0;
	$result=make_query($conn);
	while($row=mysqli_fetch_array($result))
	{
		if($count == 0)			
		{
			$output .= '<div class="item active">';
		}
  		else
  		{
			$output .= '<div class="item">';
  		}
   		$output .= '
   		<img class="mySlides" src="admin/default/images/'.$row["advimg"].'" height="400px" width="1080px"/>
		</div>
   		';
		$count=$count+1;
		
   }
   return $output;
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>

	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
		     <?php
				if(!isset($_SESSION['email']))
				{
				?>
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p>Welcome to Mobile Shoppe <a href="register.php">Register </a> Or <a href="signin.php">Sign In </a></p>
				</div>
				<?php
				}
					else
					{
					?>
					<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p>Welcome to Mobile Shoppe <a href="custlogout.php">Sign Out
				</div>
				<?php
					}
					?>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						<li><a href="#" class="you"> </a></li>
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+918487045482</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mobileshopper@gmail.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html">Mobile <b>Shoppe</b><span class="tag">Everything for you </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<?php
				if(!isset($_SESSION['email']))
				{
				?>		
						<h4><a href="checkout.html">
								
								<span> Rs. 0.00 </span> (<span > 0 </span>) 
						</a></h4>
						<?php }
						else
						{
							$uemail=$_SESSION['email'];
							$qur="select * from cart where email='$uemail'";
							$result= $conn -> query($qur);
							$cnt=1;
							$count=0;
							$total=0;
							while($data1= mysqli_fetch_assoc($result))
							{
								
								$price1=$data1["price"];
								$total=$total+$price1;
								$count=$count+1;
								$cnt++;
							}
							
						
						?>
						<h4><a href="checkout.html">
								
								<span > Rs. <?php echo $total;?> </span> (<span > <?php echo $count;?> </span>) 
						</a></h4>
						<?php
						}
						?>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				
								
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="home.php" class="active">Home</a></li>
							
                            
								<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Mobile<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
                                
									<div class="row">
										<div class="col-sm-4 menu-grids">
										
											<ul class="multi-column-dropdown ">
                                             <?php 
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);
								 $ret="select * from brand";
                                
$result= $conn -> query($ret);
	$cnt=1;
while($data1= mysqli_fetch_assoc($result))
	  {
	  	?>	
												<li><a class="list" href="listproduct.php?bid=<?php echo $data1["bid"];?>"><?php echo $data1["brandname"];?></a></li>
												<?php $cnt++;} ?>
											</ul>
											
										
										
										
										
									
							</div>
                            </div>
                            </ul>
                        	</li>
                            
                            
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Accessories<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
									<div class="row">
										<div class="col-sm-4 menu-grids">
											<ul class="multi-column-dropdown">
											<?php 
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);
								 $ret="select * from accbrand";
                                
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())

	  {
	  	?>	
											<li><a class="list" href="acclistproduct.php?accbid=<?php echo $row->accbid;?>"><?php echo $row->accbrandname;?></a></li>
												<?php $cnt++;} ?>
												
											</ul>
										</div>				
									</div>	
								</ul>
							</li>	
							<li><a href="contact.php" >Contact Us</a></li>			
							
						<!--//navbar-collapse-->
						
					</div>
					<!--//navbar-header-->
				</nav>
				
				
			</div>
		</div>
	</div>
	<!--//header-->
	<!--banner-->
	
		
						
				


  <!-- Full-width images with number and caption text -->
  
  <div class="w3-content w3-section" style="max-width:1080px" id="#dynamic_slide_show">
  <?php echo make_slide($conn);?> 
  
  
</div>

  
				
		
				
	<!--//banner-->
	<!--new-->
    
	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title"><span>YOU MAY LIKE</span></h3>
				<p>Based on your active </p>
			</div>
           
					
			<div class="new-info">
            <div class="row">
            <?php 
            $ret="select * from productuplode";
                                
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())

	  {
	  	?>	
              
				<div class="col-md-3 menu-grids simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
              
               <div class="new-top">
						<a href="single.html"><img src="admin/default/images/<?php echo $row->img1;  ?>" class="img-responsive" alt="img1"/></a>
                       
						<div>
							
						</div>
					</div>
					<div class="new-bottom">
                   
						<h5><a class="name" href="single.html"><?php echo $row->productname;?> </a></h5>
                        <p>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div></p>	
						<div class="ofr">
							
							<p><span class="item_price"><?php echo $row->price;?></span></p>
                            <a href="quickview.php?pid=<?php echo $row->pid;?>"  class="btn btn-success">Quick View </a>
						</div>
                        
					</div>
                    	
				</div>
			
				<?php $cnt++;} ?>
                
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title"> <span>MOBILE ACCESSORIES</span></h3>
				
			</div>
           
					
			<div class="new-info">
            <div class="row">
            <?php 
                                          	
	$ret="SELECT DISTINCT b.accbid,a.aproductname,a.aprice,a.img1 from accproduct a,accbrand b, accmodel c,mobile_acc_category d,accgeneral e where a.accbid=b.accbid and a.accmid=c.accmid and a.acccategaryid=d.acccid";
	$result= $conn -> query($ret);
	$cnt=1;
while($data1= mysqli_fetch_assoc($result))
	  {
	  	?>	
              
				<div class="col-md-3 menu-grids simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
              
               <div class="new-top">
						<a href="single.html"><img src="admin/default/images/<?php echo $data1["img1"];  ?>" class="img-responsive" alt="img1"/></a>
                       
						<div>
							
						</div>
					</div>
					<div class="new-bottom">
                   
						<h5><a class="name" href="single.html"><?php echo $data1["aproductname"];?> </a></h5>
                        <p>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div></p>	
						<div class="ofr">
							
							<p><span class="item_price"><?php echo $data1["aprice"];?></span></p>
                            <a href="accquickview.php?accbid=<?php echo $data1["accbid"];?>"  class="btn btn-success">Quick View </a>
						</div>
                        
					</div>
                    	
				</div>
			
				<?php $cnt++;} ?>
                
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		
	<!--//new-->
	
	
	
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Mobile <b>Shoppe</b> <span class="tag">Everything for you </span> </a></h4>
					<p>� 2018 Mobile Shoppe . All rights reserved | Design by Malvika & Nitu </p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="home.php">Home</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required>
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->		
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
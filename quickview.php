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

if(isset($_POST['cart']))
{
	if(!isset($_SESSION["email"]))
	{
		echo "<script>alert('please first login')</script>";
	}
	else
		
	{
	$Id1=$_GET['pid'];
	$sql1="select * from productuplode where pid='$Id1' ";
	$result1 = $conn->query($sql1);
	$data2=$result1->fetch_assoc();
	$pid=$data2['pid'];
	$productname=$data2['productname'];
	$price=$data2['price'];
	$image=$data2['img1'];
	$uemail=$_SESSION['email'];
		
		$sql2="insert into cart(productid,productname,price,image,email)values('$pid','$productname','$price','$image','$uemail')";
		if($conn->query($sql2)==TRUE)
	    {
			echo "<script>alert('your product in cart')</script>";
		}
		else
		{
			echo "<script>alert('$uemail')</script>";
		}
	
	}
			
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
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
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
	<?php include "header.php" ; ?>
	<!--//header-->
	<!--breadcrumbs-->
    
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
    <?php 
	$Id=$_GET['pid'];
	$sql="select * from productuplode where pid='$Id' ";
	$result = $conn->query($sql);
	$data1=$result->fetch_assoc();

	?>
    
	<div class="single">
		<div class="container">
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="admin/default/images/<?php echo $data1["img1"]; ?>">
								<div class="thumb-image"> <img src="admin/default/images/<?php echo $data1["img1"]; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="admin/default/images/<?php echo $data1["img2"]; ?>">
								 <div class="thumb-image"> <img src="admin/default/images/<?php echo $data1["img2"]; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="admin/default/images/<?php echo $data1["img3"]; ?>">
							   <div class="thumb-image"> <img src="admin/default/images/<?php echo $data1["img3"]; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
					<h3><?php echo $data1["productname"];  ?></h3>
					<div class="single-rating">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked>
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<p>5.00 out of 5</p>
						<a href="#">Add Your Review</a>
					</div>
					<h6 class="item_price"><?php echo $data1["price"];  ?></h6>			
					<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes</p>
					<ul class="color">
						<h4>Color</h4>
						<font color="#000000" >
                        <b>
						<li><?php echo $data1["color"];  ?></li>
                        </b>
                        </font>
					</ul>
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" type="number" value="1" class="item_quantity">
					</div>
					<div class="btn_form">
						<form action="" method="post">
						<input type="submit" class="btn btn-success" name="cart" value="ADD TO CART"> 
						
						</form>	
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<!--collapse-tabs-->
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".1s">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#AABFAA"  >
								 <font color="#400000" > <b>SPECIFICATION & DISPLAY FEATURES </b> </font>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
                            <font color="#000000">
                            <b>
                            <table>
                            
                            <tr>
                            <td > RAM  </td>
                            <td>  : </td>
                            <td> <?php echo $data1["ram"];  ?> </td>
                            </tr>
                            <tr>
                            <td> INTERNAL STORAGE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["internalstorage"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> IN THE BOX </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["inthebox"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> COLOR </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["color"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> BROUSE TYPE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["brousetype"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> SIM TYPE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["simtype"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> HYBRID SIM SLOT </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["hybridsimslot"];  ?> </td>
                            </tr>
                            <tr>
                            <td > DISPLAY SIXZ  </td>
                            <td>  : </td>
                            <td> <?php echo $data1["displaysize"];  ?> </td>
                            </tr>
                            <tr>
                            <td> RESOLUTION  </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["resolution"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> RESOLUTION TYPE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["resolutiontype"];  ?> </td>
                             
                            </tr>
                         </table>
                         </b>
                              </font>  
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".2s">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:#AABFAA">
								  <font color="#400000" > <b> OPERATING SYSTEM & PROCESSOR FEATURES   </b> </font>
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<font color="#000000">
                            <b>
                            <table>
                            <tr>
                            <td > OPERATING SYSTEM  </td>
                            <td>  : </td>
                            <td> <?php echo $data1["os"];  ?> </td>
                            </tr>
                            <tr>
                            <td> PROCESSOR TYPE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["processortype"];  ?> </td>
                            <td> 
                            </tr>
                            <tr>
                            <td> PROCESSOR CORE </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["processercore"];  ?> </td>
                            
                            </tr>
                            
                            
                            
                         </table>
                         </b>
                              </font>
                                
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".3s">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color:#AABFAA">
									<font color="#400000" > <b> CAMERA FEATURE  & CONNECTIVITY FEATURES  </b> </font>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<font color="#000000">
                            <b>
                            <table>
                            <tr>
                            <td > PRIMARY CAMERA  </td>
                            <td>  : </td>
                            <td> <?php echo $data1["primarycamera"];  ?> </td>
                            </tr>
                            <tr>
                            <td> SECONDARY CAMERA </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["secondarycamera"];  ?> </td>
                           </tr>
                           <tr>
                            <td > NETWORK TYPE  </td>
                            <td>  : </td>
                            <td> <?php echo $data1["networktype"];  ?> </td>
                            </tr>
                            <tr>
                            <td> SUPPORTAL NETWORK </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["supportednetwork"];  ?> </td>
                           </tr>
                            
                            
                            
                         </table>
                         </b>
                              </font>
							</div>
						</div>
					</div>
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".4s">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color:#AABFAA">
									<font color="#400000" > <b>BATTERY & POWER FEATURES & DIMENSIONS & WARRANTY</b> </font>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<font color="#000000">
                            <b>
                            <table>
                            <tr>
                           	<td> BATTERY CAPACITY </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["betterycapacity"];  ?> </td>
                            </tr>
                            <tr>
                           	<td> WIDTH </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["width"];  ?> </td>
                            </tr>
                            <tr>
                           	<td> HEIGHT </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["height"];  ?> </td>
                            </tr>
                            <tr>
                           	<td> DEPTH </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["depth"];  ?> </td>
                            </tr>
                            <tr>
                           	<td> WEIGHT </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["weight"];  ?> </td>
                            </tr>
                            <tr>
                           	<td> WARRANTY SAMMARY </td> 
                            <td>  : </td>
                            <td> <?php echo $data1["warranty"];  ?> </td>
                            </tr>
                            
                                                                               
                         </table>
                         </b>
                              </font>
							</div>
						</div>
                   	</div> 
                  
				</div>
			</div>
            
            
			<!--//collapse -->
			<!--related-products-->
			<div class="related-products">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">Related<span> Products</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
				</div>
				<div class="related-products-info">
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="single.html"><img src="images/g9.jpg" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><a class="item_add" href=""> Add to cart</a></li>
									<li><a href="single.html">Quick View </a></li>
									<li><a href="products.html">Show Details </a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="single.html">Baby Red Dress </a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<p class="pric1"><del>$2000.00</del></p>
								<p><span class="item_price">$500</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated" data-wow-delay=".7s">
						<div class="new-top">
							<a href="single.html"><img src="images/g10.jpg" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><a class="item_add" href=""> Add to cart</a></li>
									<li><a href="single.html">Quick View </a></li>
									<li><a href="products.html">Show Details </a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="single.html">Crocs Sandals </a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<p class="pric1"><del>$2000.00</del></p>
								<p><span class="item_price">$500</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated" data-wow-delay=".9s">
						<div class="new-top">
							<a href="single.html"><img src="images/g11.jpg" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><a class="item_add" href=""> Add to cart</a></li>
									<li><a href="single.html">Quick View </a></li>
									<li><a href="products.html">Show Details </a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="single.html">Pink Sip Cup </a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<p class="pric1"><del>$2000.00</del></p>
								<p><span class="item_price">$500</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay="1.1s">
						<div class="new-top">
							<a href="single.html"><img src="images/g12.jpg" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><a class="item_add" href=""> Add to cart</a></li>
									<li><a href="single.html">Quick View </a></li>
									<li><a href="products.html">Show Details </a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="single.html">Child Print Bike </a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<p class="pric1"><del>$2000.00</del></p>
								<p><span class="item_price">$500</span></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//related-products-->
		</div>
	</div>
	<!--//single-page-->
	<!--footer-->
	<?php include "footer.php" ;?>
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
</body>
</html>
<?php

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
				<li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
    <?php 
	$Id=$_GET['accbid'];
	$sql="select * from accproduct a, accgeneral b where a.featuresid=b.id and accbid='$Id' ";
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
					<h3><?php echo $data1["aproductname"];  ?></h3>
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
					<h6 class="item_price"><?php echo $data1["aprice"];  ?></h6>			
					<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes</p>
					
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" type="number" value="1" class="item_quantity">
					</div>
					<div class="btn_form">
						<a href="#" class="add-cart item_add">ADD TO CART</a>	
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
                            <table class="table table-reference">
           
            <thead>
              <tr>
				<font color="#0735C8">
					<th class="wd-10p"><font color="#0F2AA8"><b>FEATURE NAME</b></font></th>
			<th class="wd-10p"><font color="#0F2AA8">FEATURES</font></th>
                
				
              </tr>
            </thead>
            <tbody>
                            <?php
	
         $id = $_GET['accbid'];                              	
	$sql1="SELECT DISTINCT a.accfeatures,c.features from accproduct a,mobile_acc_category b,accgeneral c where a.featuresid=c.id and b.acccid='$id'";
	$result= $conn -> query($sql1);
	$cnt=1;
while($data1= mysqli_fetch_assoc($result))
	  {

	?>
              <tr>
                <td><?php echo $data1["features"];?></td>
                <td><?php echo $data1["accfeatures"];?> </td>
			    
              </tr>
            
            	<?php $cnt=$cnt+1;
				}
				?>
                            
                            
                                                                               
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
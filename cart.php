<?php
session_start();
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




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php include 'header.php';?>


				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Check Out page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--cart-items-->
	<div class="cart-items">
		<div class="container">
			<h3 class="wow fadeInUp animated" data-wow-delay=".5s">My Shopping Cart</h3>
			<section class="header_text sub">
			
				
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Price</th>
									
									
								</tr>
							</thead>
							<tbody>
                            <?php
							if(!isset($_SESSION['user']))
							
                            { ?>
                            <tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									
									<td></td>
								</tr>	
								
							<?php }
							else
							{
                           
                            
							$buyer=$_SESSION['user'];
                             $adn="select * from cart where email='$buyer'";
									$stmt = $conn->prepare($adn);
	
        							$stmt->execute();
									$res=$stmt->get_result();
	                               $total=0;
									$cnt=1;
									while($row=$res->fetch_object())
	  									{
	  								?>
								<tr>
									<td> <a href="remove_cart_item.php?cart_id=<?php echo $row->cart_id;?>" class="btn btn-inverse"><b>Remove</b></a></td>
									<td><a href="product_detail.php?product_id=<?php echo $row->product_id;?>"><img alt="" src="admin/product_image/<?php echo $row->pro_image;?>" height="200" width="200"></a></td>
									<td><?php echo $row->product_name;?></td>
									<td><?php echo $row->pro_price;?></td>
									<td><?php echo $total1=$row->pro_bidprice;?></td>
									
								</tr>			  
					
									<?php $total=$total + $total1;
									$cnt++ ; }} ?>  
							</tbody>
                            <tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									
									<td><strong><?php echo $total;?></strong></td>
								</tr>	
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
                       <?php
							if(!isset($_SESSION['user']))
							
                            { ?>
                            <p class="cart-total right">
                        
							<strong>Sub-Total</strong>:	<br>
							<strong>GST Tax (18.00)</strong>:<br>
							
							<strong>Total</strong>: <br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							 <a href="#" class="btn btn-inverse"><b>Checkout</b></a>			
							</p>
                           <?php } else { ?>
						<p class="cart-total right">
                        
							<strong>Sub-Total</strong>:	<?php echo $total;?><br>
							<strong>GST Tax (18.00)</strong>: <?php echo $tax=$total*18/100;?><br>
							
							<strong>Total</strong>: <?php echo $tamt=$total+$tax;?><br>
						</p>
						<hr/>
						<p class="buttons center">		
                        <?php $buyer1=$_SESSION['user'];
						$adn1="select email from cart where email='$buyer1'";
		$result2= $conn->query($adn1);
		$data2= $result2->fetch_assoc();
		$emials=$data2["email"];
		?>		
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
                            <?php if($emials!="")
							{ ?>
							 <a href="customer_detail.php?email=<?php echo $data2["email"];?>" class="btn btn-inverse"><b>Checkout</b></a>			
                             <?php } else { ?>
                             <input type="submit" class="btn btn-inverse" value="Checkout" name="check">
                             <?php } ?>
                             
							</p>
                           	<?php } ?>
					</div>
					
                    
							</div>
						</div>						
					</div>
				</div>
			</section>
		</div>
	</div>
	<!--//cart-items-->	
	
<?php include 'footer.php';?>

</body>
</html>
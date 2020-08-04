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
if(isset($_POST['stop']))
{
	header('location: viewproductdetail.php');
}


?>
<!DOCTYPE html>
<html lang="en">
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

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/rickshaw/css/rickshaw.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">

  </head>
  <body>
	  <?php
	  if($_SESSION['loginstatus']=="")
{
	header("location:adminlogin.php");
}
	?>
   <form method="post" action="">
	<?php
	
         $id = $_GET['uid'];                              	
	$sql1="select * from productuplode a, brand b, model c where a.bid=b.bid and a.mid=c.mid and  a.Pid ='$id'";
	$result1= $conn -> query($sql1);
	$data1= $result1->fetch_assoc();

	  	

	?>
	<div class="modal-body pd-20">
		<div class="form-group">
		 
        
 
          <div class="row">
            <div class="col-md-12">
            <table class="table table-reference">
           
            <thead>
              <tr>
				<font color="#0735C8">
		    <th class="wd-15p"><font color="#0F2AA8">PHOTO</font></th>
			                   
				
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                <img src="images/<?php echo $data1["img1"];?>" height="20%" width="10%">&nbsp;&nbsp;
                <img src="images/<?php echo $data1["img2"];?>" height="20%" width="10%">&nbsp;&nbsp; 
			    <img src="images/<?php echo $data1["img3"];?>" height="20%" width="10%">&nbsp;&nbsp;
				<img src="images/<?php echo $data1["img4"];?>" height="20%" width="10%">&nbsp;&nbsp;
			    </td>
              </tr>
            
            
            </tbody>
			  
          </table>
				<br>

           <table class="table table-reference">
           
            <thead>
              <tr>
				<font color="#0735C8">
		    <th class="wd-15p"><font color="#0F2AA8">BRAND NAME</font></th>
			    <th class="wd-15p"><font color="#0F2AA8">MODEL NAME</font></th>
                <th class="wd-15p"><font color="#0F2AA8">PRICE</font></th>
                <th class="wd-15p"><font color="#0F2AA8">RAM</font></th>
				<th class="wd-10p"><font color="#0F2AA8">INTERNAL STORAGE</font></th>
			    <th class="wd-30p"><font color="#0F2AA8">IN THE BOX</font></th>
				
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $data1["brandname"];?></code></td>
                <td><?php echo $data1["modelname"];?> </td>
			    <td><?php echo $data1["price"];?></td>
				<td><?php echo $data1["ram"];?></td>
			    <td><?php echo $data1["internalstorage"];?></td>
             <td><?php echo $data1["inthebox"];?></td>
              </tr>
            
            
            </tbody>
			  
          </table>
				<br>
			  <table class="table table-reference">
            <thead>
              <tr>
              
                <th class="wd-5p"><font color="#0F2AA8">MODEL NUMBER</font></th>
				<th class="wd-10p"><font color="#0F2AA8">COLOR</font></th>
				<th class="wd-10p"><font color="#0F2AA8">BROUSE TYPE</font></th>
				<th class="wd-20p"><font color="#0F2AA8">SIMT TYPE</font></th>
				<th class="wd-10p"><font color="#0F2AA8">HYBRID SIM SLOT</font></th>
             	<th class="wd-10p"><font color="#0F2AA8">DISPLAY SIZE</font></th>
              </tr>
            </thead>
            <tbody>
              <tr>
               
                <td><?php echo $data1["modelnumber"];?></td>
				<td><?php echo $data1["color"];?></td>
				<td><?php echo $data1["brousetype"];?></td>
			    <td><?php echo $data1["simtype"];?></td>
				<td><?php echo $data1["hybridsimslot"];?></td>
             <td><?php echo $data1["displaysize"];?></td>
              </tr>
            
            
            </tbody>
          </table>
				<br>
			  
			  <br>
			  <table class="table table-reference">
            <thead>
              <tr>
              
                <th class="wd-5p"><font color="#0F2AA8">RESOLUTION</font></th>
				<th class="wd-10p"><font color="#0F2AA8">RESOLUTION TYPE</font></th>
				<th class="wd-10p"><font color="#0F2AA8">OPERATIG SYSTEM</font></th>
				<th class="wd-20p"><font color="#0F2AA8">PROCESSOR TYPE</font></th>
				<th class="wd-10p"><font color="#0F2AA8">PROCESSOR CORE</font></th>
             	<th class="wd-10p"><font color="#0F2AA8">PRIMARY CAMERA</font></th>
              </tr>
            </thead>
            <tbody>
              <tr>
               
                <td><?php echo $data1["resolution"];?></td>
				<td><?php echo $data1["resolutiontype"];?></td>
				<td><?php echo $data1["os"];?></td>
			    <td><?php echo $data1["processortype"];?></td>
				<td><?php echo $data1["processercore"];?></td>
             <td><?php echo $data1["primarycamera"];?></td>
              </tr>
            
            
            </tbody>
          </table>
				<br>
				
			  <table class="table table-reference">
            <thead>
              <tr>
              
                <th class="wd-5p"><font color="#0F2AA8">SECONDARY CAMERA</font></th>
				<th class="wd-10p"><font color="#0F2AA8">NETWORK TYPE</font></th>
				<th class="wd-10p"><font color="#0F2AA8">SUPPORTED NETWORK</font></th>
				<th class="wd-20p"><font color="#0F2AA8">BETTERY CAPACITY</font></th>
				<th class="wd-10p"><font color="#0F2AA8">WIDTH</font></th>
             	<th class="wd-10p"><font color="#0F2AA8">HEIGHT</font></th>
              </tr>
            </thead>
            <tbody>
              <tr>
               
                <td><?php echo $data1["secondarycamera"];?></td>
				<td><?php echo $data1["networktype"];?></td>
				<td><?php echo $data1["supportednetwork"];?></td>
			    <td><?php echo $data1["betterycapacity"];?></td>
				<td><?php echo $data1["width"];?></td>
             <td><?php echo $data1["height"];?></td>
              </tr>
            
            
            </tbody>
          </table>
				<br>
				
			<br>
			  <table class="table table-reference">
            <thead>
              <tr>
              
                <th class="wd-5p"><font color="#0F2AA8">depth</font></th>
				<th class="wd-10p"><font color="#0F2AA8">weight</font></th>
				<th class="wd-10p"><font color="#0F2AA8">warranty</font></th>
				
              </tr>
            </thead>
            <tbody>
              <tr>
               
                <td><?php echo $data1["depth"];?></td>
				<td><?php echo $data1["weight"];?></td>
				<td><?php echo $data1["warranty"];?></td>
			    
              </tr>
            
            
            </tbody>
          </table>
				<br>
			
			
            </div><!-- col -->
			   </div>
		
		</div>
		
          <div class="modal-footer">
            
            <input type="submit" class="btn btn-secondary bd-0"  name="close" value="Close">
          </div>

	</div>
	</form>
	  
	   <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/slim.js"></script>
    <script>
      $(function(){
        'use strict'

        $('.form-layout .form-control').on('focusin', function(){
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('.form-layout .form-control').on('focusout', function(){
          $(this).closest('.form-group').removeClass('form-group-active');
        });

        // Select2
        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });

      });
		
		
     
 

    
    </script>
</body>
</html>

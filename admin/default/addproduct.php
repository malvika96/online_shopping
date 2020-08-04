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

	$bname=$_POST['model'];
	$mname=$_POST['class'];
	$pnm=$_POST['pnm'];
	$pz=$_POST['pz'];
	$ram=$_POST['ram'];
	$is=$_POST['is'];
	
	$img2=$_POST['img2'];
	$img3=$_POST['img3'];
	$img4=$_POST['img4'];
	$itb=$_POST['itb'];
	$mn=$_POST['mn'];
	$clr=$_POST['clr'];
	$bt=$_POST['bt'];
	$st=$_POST['st'];
	$hss=$_POST['hss'];
	$ds=$_POST['ds'];
	$r=$_POST['r'];
	$rt=$_POST['rt'];
	$os=$_POST['os'];
	$pt=$_POST['pt'];
	$pc=$_POST['pc'];
	$pcam=$_POST['pcam'];
	$sc=$_POST['sc'];
	$nt=$_POST['nt'];
	$sn=$_POST['sn'];
	$bc=$_POST['bc'];
	$w=$_POST['w'];
	$h=$_POST['h'];
	$d=$_POST['d'];
	$we=$_POST['we'];
	$ws=$_POST['ws'];
	
	$name=$_FILES['img1']['name'];
	$type=$_FILES['img1']['type'];
	$size=$_FILES['img1']['size'];
	$tmp=$_FILES['img1']['tmp_name'];
	$upload='images/'.$name;
	
	


 if(move_uploaded_file($tmp,$upload))
 {
	 

	
	
	$sql="insert into productuplode(bid,mid,productname,price,ram,internalstorage,img1,img2,img3,img4,inthebox,modelnumber,color,brousetype,simtype,hybridsimslot,displaysize,resolution,resolutiontype,os,processortype,processercore,primarycamera,secondarycamera,networktype,supportednetwork ,betterycapacity,width,height,depth,weight,warranty) values('$bname','$mname','$pnm','$ram','$pz','$is','$name','$img2','$img3','$img4','$itb','$mn','$clr','$bt','$st','$hss','$ds','$r','$rt','$os','$pt','$pc','$pcam','$sc','$nt','$sn','$bc','$w','$h','$d','$we','$ws')";
	   if($conn->query($sql)==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	  }
	  else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
	  }
 }
$conn->close();
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uplode Product</title>
</head>

<body>
<?php include 'header.php';?>



<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Product Uplode Form</h4>

</div>


<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Form Components</a>
</li>
<li class="breadcrumb-item"><a href="#!">Form Components</a>
</li>
</ul>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">


</div>
<div class="card-block">

<form action="" method="post"  enctype="multipart/form-data" > 
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Brand Name</b></label>
<div class="col-sm-3">
<select class="form-control" name="model" onChange="change_model()" required="please input data" id="model" >
<option value="">Select Brand.....</option>
 <?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `brand`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>

</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Model Name</b></label>
<div class="col-sm-3">
<select class="form-control" name="class"  required="please input data" id="class" >
<option value="">Select Model.....</option>

 

</select>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Product Name</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the name of product..." name="pnm" >
</div>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the price of product..." name="pz" >
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Ram</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of ram..." name="ram">
</div>

<label class="col-sm-2 col-form-label"><b>Internal Storage</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of internal storage..." name="is">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Upload image1</b></label>
<div class="col-sm-3">
<input type="file" class="form-control" name="img1">
</div>

<label class="col-sm-2 col-form-label"><b>Upload image2</b></label>
<div class="col-sm-3">
<input type="file" class="form-control" name="img2">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Upload image3</b></label>
<div class="col-sm-3">
<input type="file" class="form-control" name="img3">
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Specification</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>In The Box</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of box..." name="itb">
</div>

<label class="col-sm-2 col-form-label"><b>Model number</b></label>
<div class="col-sm-3">
<input type="text"class="form-control" placeholder="Enter model number..." name="mn">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>color</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter color..." name="clr">
</div>

<label class="col-sm-2 col-form-label"><b>Brouse Type</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of brouse type..." name="bt">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Sim Type</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of sim type..." name="st">
</div>

<label class="col-sm-2 col-form-label"><b>Hybrid Sim Slot</b></label>
<div class="col-sm-3">
<input type="text"class="form-control" placeholder="Enter the details hybrid sim slot..." name="hss">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Display Feature</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Display Size</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of display size..." name="ds">
</div>

<label class="col-sm-2 col-form-label"><b>Resolution</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of resolution..." name="r">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Resolution Type</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of resolutuion type..." name="rt">
</div>
</div>
<div class="form-group row">
<label class="col-sm-10 col-form-label"><h4><b><u>Operating System & Processor Features</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Operating System</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of operating system..." name="os">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Processor Type</b></label>
<div class="col-sm-3">
<input type="text"class="form-control" placeholder="Enter the details of processor type..." name="pt">
</div>

<label class="col-sm-2 col-form-label"><b>Processor Core</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of processor core..." name="pc">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Camera Feature</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Primary Camera</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of primary camera..." name="pcam">
</div>

<label class="col-sm-2 col-form-label"><b>Secondary Camera</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of secondary memmory..." name="sc">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Connectivity Features</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Network Type</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of network type..." name="nt">
</div>
<label class="col-sm-2 col-form-label"><b>Supportal Network</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of supportal network..." name="sn">
</div>
</div>

<div class="form-group row">
<label class="col-sm-5 col-form-label"><h4><b><u>Battery and Power Features</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Battery Capacity</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter the details of battery capacity..." name="bc">
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Dimensions</u></b></label></h4>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Width</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter width..." name="w">
</div>

<label class="col-sm-2 col-form-label"><b>Height</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter height..." name="h">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Depth</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter depth..." name="d">
</div>

<label class="col-sm-2 col-form-label"><b>Weight</b></label>
<div class="col-sm-3">
<input type="text" class="form-control" placeholder="Enter weight..." name="we">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label"><h4><b><u>Warranty</u></b></h4></label>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Warranty summary</b></label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter the details of warranty summary..." name="ws">
</div>
</div>




<div class="forgroup row">
<div class="col-sm-3" align="right">
<input type="submit" class="btn btn-success"  value="SAVE" name="submit"></input>
</div>


<div class="col-sm-3">
<input type="reset" class="btn btn-success" value="RESET" name="reset"></input>
</div>

</div>


</form>
<?php include 'footer.php';?>
</body>
</html>
<script type="text/javascript">
function change_model()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","droupdownmodels.php?bid="+document.getElementById("model").value,false);
	xmlhttp.send(null);
	document.getElementById("class").innerHTML=xmlhttp.responseText;
	
	
}

</script>
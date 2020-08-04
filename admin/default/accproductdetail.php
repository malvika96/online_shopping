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
	
	$j=0;
	$count=count($_POST['fea']);
	$brand=$_POST['brand'];
	$model=$_POST['model'];
	$category=$_POST['category'];
	$accproduct=$_POST['accpname'];
	$price=$_POST['price'];
	
	
	
	
	$name=$_FILES['img1']['name'];
	$type=$_FILES['img1']['type'];
	$size=$_FILES['img1']['size'];
	$tmp=$_FILES['img1']['tmp_name'];
	$upload='images/'.$name;
	
	$name1=$_FILES['img2']['name'];
	$type1=$_FILES['img2']['type'];
	$size1=$_FILES['img2']['size'];
	$tmp1=$_FILES['img2']['tmp_name'];
	$upload1='images/'.$name1;
	
	$name2=$_FILES['img3']['name'];
	$type2=$_FILES['img3']['type'];
	$size2=$_FILES['img3']['size'];
	$tmp2=$_FILES['img3']['tmp_name'];
	$upload2='images/'.$name2;
	
	if(move_uploaded_file($tmp,$upload))
 {
	 if(move_uploaded_file($tmp1,$upload1))
 {

if(move_uploaded_file($tmp2,$upload2))
 {
while($j<$count)
{
	$featureid=$_POST['fid'][$j];
	$feature=$_POST['fea'][$j];
	
$sql="insert into accproduct(accbid,accmid,acccategaryid,aproductname,aprice,img1,img2,img3,featuresid ,accfeatures) values('$brand','$model','$category','$accproduct','$price','$name','$name1','$name2','$featureid','$feature')";
	++$j;
	$result1=mysqli_query($conn,$sql);
}
	   if($result1==TRUE)
	  {
		  echo "<script>alert('Recrod Inserted')</script>";
 	}
	 else
	  {
		echo "Error: " . $sql . "<br>" . $conn->error;
  }
 }
 }
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



<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4><b> Accessories category Form </h4>

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

<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">

<form action="" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Brand Name</b></label>
<div class="col-sm-5">
<select class="form-control" name="brand" onChange="change_model()" required="please input data" id="model">
<option value="">Select Brand.....</option>
 <?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `accbrand`";
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
<div class="col-sm-5">
<select class="form-control" name="model"  required="please input data" id="class">
<option value="">Select Model.....</option>
 
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Accessories Product Name</b></label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter accessories product name..." name="accpname"  >
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Category Name</b></label>
<div class="col-sm-5">
<select class="form-control" name="category" required="please input data" id="cat" onChange="change_category()" >
<option value="">Select Category.....</option>

 <?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `mobile_acc_category`";
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
<label class="col-sm-2 col-form-label"><b>Features</b></label>
<div class="col-sm-5" id="cat2" >
 
 
</div>
</div>




<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Price</b></label>
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="Enter price..." name="price"  >
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
	xmlhttp.open("GET","accdroupdown.php?accbid="+document.getElementById("model").value,false);
	xmlhttp.send(null);
	document.getElementById("class").innerHTML=xmlhttp.responseText;
	
	
}

function change_category()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","generate_inputbox.php?mid="+document.getElementById("cat").value,false);
	xmlhttp.send(null);
document.getElementById("cat2").innerHTML=xmlhttp.responseText;
	
	
}

</script>
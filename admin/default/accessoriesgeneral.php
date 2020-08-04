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
	$cname=$_POST['cname'];
	$features=$_POST['features'];

$sql="insert into accgeneral(mid,features) values('$cname','$features')";
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

<form action="" method="post">
<div class="form-group row">
<label class="col-sm-2 col-form-label"><b>Category Name</b></label>
<div class="col-sm-5">
<select class="form-control" name="cname" onChange="accessories_general()" required="please input data" id="model">
<option value="">Select Brand.....</option>
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
<div class="col-sm-5">
<input type="text" class="form-control" placeholder="features..." name="features" id="class" >
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

<?php include 'footer.php';?>
</body>
</html>
<script type="text/javascript">
function accessories_general()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","generaldrpdown.php?mid="+document.getElementById("model").value,false);
	xmlhttp.send(null);
	document.getElementById("class").innerHTML=xmlhttp.responseText;
	
	
}

</script>
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
if(isset($_POST['dept']))
{

$Name=$_POST['name'];
$cname=$_POST['cname'];
$id2=$_POST['deptid'];
$sql = "UPDATE accgeneral SET mid='$cname',features='$Name' WHERE id='$id2'";

if ($conn->query($sql) === TRUE) {
   header ('location: viewaccgeneral.php');
} else {
   echo "Error updating record: " . $conn->error;
}
}

   
 
   
 
   
 
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from flatable.phoenixcoded.net/default/modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 12:05:53 GMT -->
<head>
<title>Flat Able - Premium Admin Template by Phoenixcoded</title>


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="Phoenixcoded">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../bower_components/sweetalert/dist/sweetalert.css">

<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">

<link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/component.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
<link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>
<body>
<form method="post" action="update_features.php">
<?php
	
         $id = $_GET['uid'];                              	
	$sql1="select * from accgeneral a,mobile_acc b where a.mid=b.mid and a.id ='$id'";
	$result1= $conn -> query($sql1);
	$data1= $result1->fetch_assoc();

	  	

	?>
	 
	<div class="modal-body pd-15">
		<div class="form-group">
		   <label for="id">ID</label>
			<input type="text" class="form-control" name="deptid" 
				   value="<?php echo $data1["id"];?>" readonly/>
                   
                   <label for="id">Mobile Accessories Category</label>
             <select class="form-control" name="cname" required="please input data" >
             <option value="<?php echo $data1["mid"];?>"><?php echo $data1["category"];?></option>
<option value="">Select Category.....</option>
 <?php
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "onlineshopping";
												$conn = new mysqli($servername, $username, $password, $dbname);

											   $query="select * from `mobile_acc`";
											   $result=$conn->query($query);
											   
											   while($clss=mysqli_fetch_row($result))
											   {
												   echo "<option value=".$clss[0].">".$clss[1]."</option>";
											   }
											   ?>

</select>
			<label>Department Name</label>
		    <input type="text" class="form-control" name="name" 
				   value="<?php echo $data1["features"];?>"/>

		</div>
		
		
		<div class="modal-footer">
            <input type="submit" name="dept" class="btn btn-primary bd-0" value="Update">
            <input type="submit" class="btn btn-secondary bd-0" data-dismiss="modal" value="Close">
          </div>
	</div>
	</form>
	  
	  <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="../bower_components/classie/classie.js"></script>

<script type="text/javascript" src="../bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/modal.js"></script>


<script type="text/javascript" src="assets/js/modalEffects.js"></script>
<script type="text/javascript" src="assets/js/classie.js"></script>

<script type="text/javascript" src="../bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
    </script>
</body>
</html>
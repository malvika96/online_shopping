<?php
if(!isset($_SESSION)) { session_start(); } 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshopping";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

		$sem=$_GET["mid"];				  
		
		$adn="select * from accgeneral where mid='$sem'";
		$result = mysqli_query($conn,$adn);
	   
       
	
	$i=0;
	$cnt=1;
while($row=mysqli_fetch_array($result))
	  {
							
				
   echo "<input type='hidden' name='fid[$i]' value='{$row['id']}'"; 
   echo "<label for='description'>{$row['features']}</label>";
   echo "<input type='text' name='fea[$i]' class='form-control' placeholder='Please Enter features Details'/>";
  
					
	  ++$i;
					$cnt++;
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
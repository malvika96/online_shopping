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
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from customer_contact where cc_id=?";
		$stmt = $conn->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
    	$stmt->close();
	
	
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
<h4>Basic DataTables</h4>
<span>Basic initialisation of DataTables</span>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="index-2.html">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
 </li>
<li class="breadcrumb-item"><a href="#!">Basic Initialization</a>
</li>
</ul>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-14">

<div class="card">
<div class="card-header">
<h5>Zero Configuration</h5>
<span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>

</div>
<div class="card-block">
<div class="dt-responsive table-responsive">

<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info" >
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">Customer No</th><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">NAME</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">EMAIL</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">SUBJECT</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">MESSAGE</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">ACTION</th></tr>
                                    </thead>
                                    <tbody>  
                                    <?php                                    
                                        $ret="select * from customer_contact ";
										
$stmt = $conn->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();

$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $cnt;;?></td>
                                            <td class=" "><?php echo $row->cname;?></td>
                                            <td class=" "><?php echo $row->email;?></td>
                                            <td class=" "><?php echo $row->subject;?></td>
                                            <td class=" "><?php echo $row->message;?></td>
                                            
                                             
                                            <td><a href="updatesemester.php?semester_id=<?php echo $row->cc_id;?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;
<a href="viewcustomer_contact.php?del=<?php echo $row->cc_id;?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

                                        </tr>
                                        
                                        <?php $cnt=$cnt+1; }?>
                                        </tbody>
                                </table></div></div></div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              

<?php include 'footer.php';?>
</body>
</html>
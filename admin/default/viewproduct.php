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
	$adn="delete from productuplode where pid=?";
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
<div class="col-sm-8">

<div class="card">
<div class="card-header">
<h5>Zero Configuration</h5>
<span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>

</div>
<div class="card-block">
<div class="dt-responsive table-responsive">

<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">Product No</th><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 200px;">PRODUCT NAME</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">PRICE</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">IMAGE</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 292px;">ACTION</th></tr>
                                    </thead>
                                    <tbody>  
                                    <?php                                    
                                        $ret="select pid,productname,price,img1 from productuplode ";
										
$result= $conn -> query($ret);
	$cnt=1;
while($mem = mysqli_fetch_assoc($result))
	  {
	  	?>

                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo $cnt;;?></td>
                                            <td class=" "><?php echo $mem["productname"];?></td>
                                            <td class=" "><?php echo $mem["price"];?></td>
                                            <td class=" "><img src="images/<?php echo $mem["img1"];?>" width="50" height="50"></td>
                                            
                                           <td>  
                                            <a class="btn btn-success  fa fa-edit"
                       data-toggle="modal"
				    
                       data-target="#modaldemo8"
				       data-effect="effect-scale"
                       data-whatever="<?php echo $mem["pid"];?>"><b><font color="#FFFFFF">VIEW DETAIL &nbsp;&nbsp;</b></a>&nbsp;&nbsp;
                                            
                                            <a href="updatesemester.php?semester_id=<?php echo $mem["pid"];?>" class="btn btn-success fa fa-edit"><b>Edit</b></a>&nbsp;&nbsp;
<a href="viewproduct.php?del=<?php echo $mem["pid"];?>" class="btn btn-danger fa fa-pencil" onclick="return confirm('Do you want to delete');"><b>Delete</b></a></td>

                                        </tr>
                                        
                                        <?php $cnt=$cnt+1; }?>
                                        </tbody>
                                </table></div></div></div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                    <div class="modal fade" id="modaldemo8" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true" align="center">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-10" style="width:200%; height: 100%">
            <div class="modal-header">
                <h3>PRODUCT DETAIL</h3>
			 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div>
            <div class="dash">
             <!-- Content goes in here -->
            </div>
			
        </div>
    </div>
</div>
              

<?php include 'footer.php';?>
<script>
	 $('#modaldemo8').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'uid=' + recipient;
 
            $.ajax({
                type: "GET",
                url: "viewproductdetail.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })
		
	</script> 
  </body>
</html>
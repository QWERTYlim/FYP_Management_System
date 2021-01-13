 <?php include '../includes/db.connect.php';
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM teacher";
$res = mysqli_query($connect,$query); 
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Approve</title>
	 <link rel="stylesheet" type="text/css" href="css/blue.button.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
     <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

	<button class="blue"><a href="index.php" class="blue">Home</a></button>
 </head>
 <body>
 <div class="table-responsive">
  <table id="data" class="table table-striped table-bordered">
  	<thead>
  		<tr>
  			<td>Name</td>
  			<td>TeacherID</td>
  			<td>DepartmentName</td>
  		</tr>
  	</thead>

  	<?php
  	while ($row=mysqli_fetch_array($res)) {
  		echo '
  		<tr>
  			<td>'.$row["Name"]. '</td>
  			<td>'.$row["TeacherID"]. '</td>
  			<td>'.$row["DepartmentName"]. '</td>
  		</tr>
  		';
  	}
  	?>
  </table>
 </div>
 </body>
 <div id="disp_data"></div>
<script>
	$(document).ready(function(){
		$('#data').DataTable();
	});

</script>

 </html>

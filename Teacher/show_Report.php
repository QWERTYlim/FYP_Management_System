



 <?php include '../includes/db.connect.php';?>


<!DOCTYPE html>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
	<title>All Request</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/text_field.css">
	<button class="blue"><a href="TeacherHome.php" class="blue">Home</a></button>
	
	<link rel="stylesheet" type="text/css" href="../css/ver2_table.css">
	
	<link rel="stylesheet" type="text/css" href="../css/table.css">
</head>
	<style>
		<?php include '../css/table.css';?>
	</style>
<body>

	<div class="container">
		<div class="table-wrapper" style="height:700px;">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8"><h2>Student Record Meeting</h2></div>
				</div>
			</div>
			<table class="table table-bordered">
				<div id="disp_data"></div>
				<script type="text/javascript" src="../js/student_report.js"></script>
			</table>
		</div>
	</div>    

</body>


</html>

<?php include '../includes/db.connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
<link rel="stylesheet" type="text/css" href="../css/menu2.css">

<head>
	<title>Menu</title> 
</head>

<body>
		<div id="jquery-accordion-menu" class="jquery-accordion-menu" style="height:100%">
			<div class="jquery-accordion-menu-header">Welcome back, <?php echo $_SESSION['studentName'];?> </div>
			<ul>
				
				<li><a href='StudentUpdateInfo.php' class="blue">Student Info</a></li>
				<li><a href="requestForm.php" class="blue">Request teacher</a></li>
				<li><a href="set_appointment.php" class="blue">Make appointment</a></li>
				<li><a href="uploadRef.php" class="blue">Upload Reference</a></li>
				<li><a href="showUpload.php" class="blue">Reference File</a></li>
				<li><a href="uploadReport.php" class="blue">Upload Report</a></li>
				<li><a href="RecordMeeting.php" class="blue">Record Meeting</a></li>
				<li><a href="../function/student_logout_function.php" class="blue">Logout</a></li>
				
			</ul>
				<div class="jquery-accordion-menu-footer"style="height:34%"> <p>CopyRight &#169; 2020 by Junwendd  </p></div>
			</div>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
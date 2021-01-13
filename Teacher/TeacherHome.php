
<?php include '../includes/db.connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
<link rel="stylesheet" type="text/css" href="../css/menu.css">

<head>
	<title>Menu</title> 
</head>

<body>
		<div id="jquery-accordion-menu" class="jquery-accordion-menu">
			<div class="jquery-accordion-menu-header">Welcome back, <?php echo $_SESSION['TeacherName'];?> </div>
			<ul>
				<li class="active"><a href="#"><i class="fa fa-home"></i>Home </a></li>

				<li><a href="../function/teacher_logout_function.php" class="blue">Logout</a></li>
				<li><a href="show_request.php" class="blue">All Request</a></li>
				<li><a href="show_Record.php" class="blue">Student Record</a></li>
				<li><a href="show_Report.php" class="blue">Student Report</a></li>

			</ul>
				<div class="jquery-accordion-menu-footer"> <p>CopyRight &#169; 2020 by Junwendd  </p></div>
			</div>
		</div>

		<button style="position:absolute;top:10px;right: 10px;background: #ed5565;"><a href="../index.php" class="blue">Home</a></button>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
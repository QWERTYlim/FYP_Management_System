<?php include '../function/show.appointment.option.php'?>
<!DOCTYPE html>

<?php
if($_SESSION['TeacherID']=='0')
{
    echo "<script type='text/javascript'>alert('Please Request teacher first!');
    window.location='requestForm.php';
    </script>";
}
?>

<html>

<head>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<title>Make Appointment</title>
	
	<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/text_field.css">
	<button class="blue"><a href="StudentHome.php" class="blue">Home</a></button>
</head>


<body>
	<form name="appointment" action="../function/add.appointment.php" method="POST">
		<p>Appointment</p> 
		
		<p></p>
		<div style="width:100%;">
			<p for="faculty">Faculty</p>
			<select id="faculty" name="faculty" style="width: 50%;">
				<?php echo $options;?>
			</select>
		</div>
		<div style="width:100%;">
			<p for="teacher">Teacher</p>
			<select id="teacher" name="teacher" style="width: 50%;">
				<?php echo $options3;?>
			</select>
		</div>
		<div style="width:100%;">
			<p for="room">Room</p>
			<select id="room" name="room" style="width: 50%;">
				<?php echo $options2;?>
			</select>
		</div>
		<div style="width:100%;">
			<p for="time">Time</p>
			<select id="time" name="time" style="width: 50%;">
				<?php echo $options4;?>
			</select>
		</div>
		<div style="width:100%;">
			<p for="date">Date</p>
			<input type="date" name="dates" id="dates">
			
		</div>		
<!--
		<div style= "width:100%; height: 220px;">

		</div>-->

		<p>
			<button id="appointment_btn" name="appointment_btn">
				<a>CONTINUE</a>
			</button>
		</p>
		

		<a>CopyRight &#169; 2020 by Junwendd</a>
	</form>


	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/text_field.js"></script>
</body>

</html>
<?php include 'function/show.appointment.option.php'?>
<!DOCTYPE html>
<html>

<head>
	<title>Make Appointment</title>
</head>

<link rel="stylesheet" type="text/css" href="css/blue.button.css">
<button class="blue"><a href="index.php">Home</a></button>

<body>
	<h3>Appointment</h3>
	<form name="appointment" action="function/add.appointment.php" method="POST">
		<label class="col-md-4 control-label" for="faculty">Faculty :</label>
		<select id="faculty" name="faculty" class="form-control">
			<?php echo $options;?>
		</select>
		<br>
		<label class="col-md-4 control-label" for="teacher">Teacher :</label>
		<select id="teacher" name="teacher" class="form-control" style="width: 150px;">
			<?php echo $options3;?>
		</select>
		<br>
		<label class="col-md-4 control-label" for="room">Room :</label>
		<select id="room" name="room" class="form-control">
			<?php echo $options2;?>
		</select>
		<br>
		<label class="col-md-4 control-label" for="time">Time :</label>
		<select id="time" name="time" class="form-control">
			<?php echo $options4;?>
		</select>
		<br>
		<label class="col-md-4 control-label" for="room">Date :</label>
		<input type="date" name="dates" id="dates">
		<br>
		<button id="appointment_btn" name="appointment_btn">Make appointment</button>

	</form>
</body>

</html>
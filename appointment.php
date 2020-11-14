<?php
	include 'includes/db.connect.php'
?>
<?php
	// mysql select query
	$query = "SELECT * FROM `faculty`";

	// for method 1
	$result1 = mysqli_query($connect, $query);

	$options = "";

	while($row2 = mysqli_fetch_array($result1))
	{
    	$options = $options."<option>$row2[1]</option>";
	}

	// mysql select query
	$query = "SELECT * FROM `room`";

	// for method 1
	$result1 = mysqli_query($connect, $query);

	$options2 = "";

	while($row2 = mysqli_fetch_array($result1))
	{
    	$options2 = $options2."<option>$row2[1]</option>";
	}

	// mysql select query
	$query = "SELECT * FROM `teacher`";

	// for method 1
	$result1 = mysqli_query($connect, $query);

	$options3 = "";

	while($row2 = mysqli_fetch_array($result1))
	{
    	$options3 = $options3."<option>$row2[1]</option>";
	}

	// mysql select query
	$query = "SELECT * FROM `time`";

	// for method 1
	$result1 = mysqli_query($connect, $query);

	$options4 = "";

	while($row2 = mysqli_fetch_array($result1))
	{
    	$options4 = $options4."<option>$row2[1]</option>";
	}
?>

<?php 

if (isset($_POST['appointment_btn'])){
	$faculty=$_POST['faculty'];
	$teacher=$_POST['teacher'];
	$room=$_POST['room'];
	$time=$_POST['time'];
	$dates=$_POST['dates'];

	$query="INSERT INTO appointment (faculty,date,time,room,teacher)
			VALUES ('$faculty','$dates','$time','$room','$teacher');";
	$result = $connect->query($query);
	if ($result) {
		echo "Sucess";
	}
	else
		echo "Fail";
}	
 ?>



<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<h3>Appointment</h3>
	<form name="appointment" action="appointment.php" method="POST">
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
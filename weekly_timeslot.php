<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "weekly_timeslot";

$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

?>
<?php

	$query = "SELECT * FROM `student`";
	$result1 = mysqli_query($connect, $query);
	$options0 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options0 = $options0."<option>$row2[1]</option>";
	}


	$query = "SELECT student_name FROM student";
	$result1 = mysqli_query($connect, $query);
	$options = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options = $options."<option>$row2[1]</option>";
	}


	$query = "SELECT * FROM `teacher`";
	$result1 = mysqli_query($connect, $query);
	$options1 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
		$options1 = $options1."<option>$row2[1]</option>";
	}


	$query = "SELECT * FROM `sem`";
	$result1 = mysqli_query($connect, $query);
	$options2 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options2 = $options2."<option>$row2[1]</option>";
	}


	$query = "SELECT * FROM `from_time`";
	$result1 = mysqli_query($connect, $query);
	$options3 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options3 = $options3."<option>$row2[1]</option>";
	}


	$query = "SELECT * FROM `to_time`";
	$result1 = mysqli_query($connect, $query);
	$options4 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options4 = $options4."<option>$row2[1]</option>";
	}


?>

<?php 
/*
		<input type="text" id="student_id" name="student_id"><br>

		<input type="text" id="student_name" name="student_name">
}	
*/
if (isset($_POST['weekly_timeslot_btn'])){
	$student_id = $_POST['student_id'];
	$student_name = $_POST['student_name'];
	$teacher_name =$_POST['teacher_name'];
	$sem_name=$_POST['sem_name'];
	$from_time=$_POST['from_time'];
	$to_time=$_POST['to_time'];

	$query="INSERT INTO timeslot (student_id,student_name,teacher_name,sem_name,from_time,to_time)
			VALUES ('$student_id','$student_name','$teacher_name','$sem_name','$from_time','$to_time');";
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
	<h1>Weekly Timeslot</h1>
	<form name="weekly_timeslot.php" action="weekly_timeslot.php" method="POST">

	<form action="/weekly_timeslot.php">
		<label for="student_id">Student ID: </label>
		<select id="sem_name" name="sem_name" class="form-control" style="width: 150px;">
				<?php echo $options0;?>
		</select>
		<br>
		<label for="student_name">Student Name: </label>
		<select id="sem_name" name="sem_name" class="form-control" style="width: 150px;">
				<?php echo $options;?>
		</select>
		
		<br>
	</form>



	<label class="col-md-4 control-label" for="teacher_name">Teacher :</label>
	<select id="teacher_name" name="teacher_name" class="form-control">
		<?php echo $options1;?>
		
	</select>

	<br>
	<label class="col-md-4 control-label" for="sem_name">Sem :</label>
	<select id="sem_name" name="sem_name" class="form-control" style="width: 150px;">
				<?php echo $options2;?>
	</select>
	<br>
	<label class="col-md-4 control-label" for="from_time">From Time: </label>
	<select id="from_time" name="from_time" class="form-control">
		<?php echo $options3;?>
	</select>
	<br>
	<label class="col-md-4 control-label" for="to_time">To Time :</label>
	<select id="to_time" name="to_time" class="form-control">
		<?php echo $options4;?>
	</select>
	<br>
	<button id="weekly_timeslot_btn" name="weekly_timeslot_btn">Submit Data</button>

</form>
</body>

</html>
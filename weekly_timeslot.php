<?php
	include 'includes/db.connect.php'
?>


<?php
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


		$query = "SELECT * FROM `time`";
		$result1 = mysqli_query($connect, $query);
		$options3 = "";
		while($row2 = mysqli_fetch_array($result1))
		{
			$options3 = $options3."<option>$row2[1]</option>";
		}


		$query = "SELECT * FROM `time`";
		$result1 = mysqli_query($connect, $query);
		$options4 = "";
		while($row2 = mysqli_fetch_array($result1))
		{
			$options4 = $options4."<option>$row2[1]</option>";
		}
	?>



<?php 
	if (isset($_POST['submit_btn'])){
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$teacher_name =$_POST['teacher_name'];
		$sem_name=$_POST['sem_name'];
		$from=$_POST['from'];
		$to=$_POST['to'];

		$query="INSERT INTO timeslot (student_id,student_name,teacher_name,sem_name,from_time,to_time)
				VALUES ('$student_id','$student_name','$teacher_name','$sem_name','$from','$to');";
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
	<title>Weekly Timeslot</title>
</head>
<link rel="stylesheet" type="text/css" href="css/blue.button.css">
<button class="blue"><a href="index.php">Home</a></button>
<body>
	
	<h1>Weekly Timeslot</h1>
	<form name="weekly_timeslot.php" action="weekly_timeslot.php" method="POST">

	<label for="studentID">Student ID: </label>
	<input type="text" id="student_id" name="student_id"><br>
	<br>

	<label for="studentName">Student Name: </label>
	<input type="text" id="student_name" name="student_name">
	<br>
	<br>

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
	<label class="col-md-4 control-label" for="from">From Time: </label>
	<select id="from" name="from" class="form-control">
		<?php echo $options3;?>
	</select>
	<br>
	<label class="col-md-4 control-label" for="to">To Time :</label>
	<select id="to" name="to" class="form-control">
		<?php echo $options4;?>
	</select>
	<br>
	<button id="submit_btn" name="submit_btn">Submit Data</button>

	

</form>
</body>

</html>
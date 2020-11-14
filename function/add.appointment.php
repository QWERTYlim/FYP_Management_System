<?php
	include '../includes/db.connect.php'
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
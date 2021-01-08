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

	$query="INSERT INTO appointment (faculty,date,time,room,teacher,student_id,student_name)
			VALUES ('$faculty','$dates','$time','$room','$teacher','". $_SESSION['StudentID']."','". $_SESSION['studentName']."');";
	$result = $connect->query($query);
	if ($result) {
		echo'<script> alert("Sucess")</script>';
		echo'<script>window.location="../student/set_appointment.php"</script>';
	}
	else
		echo "Fail";
}	
 ?>
<?php include 'includes/db.connect.php'?>
<?php
if(isset($_SESSION['StudentID']))
{
	header("Location:../StudentHome.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="css/blue.button.css">
	<button class="blue"><a href="index.php" class="blue">Home</a></button>
</head>




<body>
	<h3>Welcome Lecture</h3>
	<form name="StudentInfo" action="function/Teacherlogin_function.php" method="POST">
	<p>
	<label>TeacherID:</label>
	<input type="text"	id="TeacherID" name="TeacherID"/>
	</p>
	<p>
	<label>Password  :</label>
	<input type="password"	id="TeacherPassword" name="TeacherPassword"/>
	</p>	
	<p>
	
	<button id="btn" name="btn">Enter</button>

	</p>	

	</form>
</body>

</html>
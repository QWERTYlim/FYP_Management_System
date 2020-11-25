<?php include 'includes/db.connect.php'?>
<!DOCTYPE html>
<html>

<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="css/blue.button.css">
	<button class="blue"><a href="index.php" class="blue">Home</a></button>
</head>




<body>
	<h3>Student Info</h3>
	<form name="StudentInfo" action="function/login_function.php" method="POST">
	<p>
	<label>StudentID:</label>
	<input type="text"	id="StudentID" name="StudentID"/>
	</p>
	<p>
	<label>Password  :</label>
	<input type="password"	id="Password" name="Password"/>
	</p>	
	<p>
	
	<button id="btn" name="btn">Make appointment</button>

	</p>	

	</form>
</body>

</html>
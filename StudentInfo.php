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
    <?php echo $StudentID;?>
		<label class="col-md-4 control-label" for="PhoneNumber">Phone Number :</label>
		<input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="123-4556678" pattern="[0-9]{3}-[0-9]{7}" required>
			
		</input>
		<br>
		<label class="col-md-4 control-label" for="Email">Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	</label>
		<input type="text"id="Email" name="Email" class="form-control">
			
		</input>
		<br>
		
		<button id="StudentInfo_btn" name="StudentInfo_btn">Enter</button>
   <a href="function/logout_function.php" tite="Logout">Logout.x
	</form>
</body>

</html>
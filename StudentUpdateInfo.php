<?php include 'includes/db.connect.php'?>
<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="css/blue.button.css">
	<button class="blue"><a href="StudentHome.php" class="blue">Home</a></button>
</head>




<body>
<?php
$query = "SELECT * FROM studentinfo";
$res = mysqli_query($connect,$query); 
while($row=mysqli_fetch_array($res)){
	
	echo "<h3>Welcome,";echo $row["StudentID"];echo " ";  echo $_SESSION['studentName'];echo ",   Pls update your Student Info</h3>";
	
?>
	<?php
	}
?>
	
	<form name="StudentInfo" action="function/add_StudentInfo.php" method="POST">
    
		<label class="col-md-4 control-label" for="PhoneNumber">Phone Number :</label>
		<input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="123-4556678" pattern="[0-9]{3}-[0-9]{7}" required>
			
		</input>
		<br>
		<label class="col-md-4 control-label" for="Email">Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	</label>
		<input type="text"id="Email" name="Email" class="form-control">
			
		</input>
		<br>
		
		<button class="blue" id="StudentInfo_btn" name="StudentInfo_btn">Enter</button>
  
	</form>
</body>

</html>

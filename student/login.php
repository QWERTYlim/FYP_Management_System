<?php include '../includes/db.connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<?php
if(isset($_SESSION['StudentID']))
{
	header("Location:../student/StudentHome.php");
}
?>

<html>

<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="">

	<link rel="stylesheet" href="../css/main.css">
	
	
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
	<form class="login100-form validate-form" name="StudentInfo" action="../function/student_login_function.php" method="POST" class="">
					<img  src="../image/logo2.png" width="400" height="400">
					<span class="login100-form-title p-b-33">
						<b>Student Login</b>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Student ID is required: D180293B">
						<input class="input100" type="text" name="StudentID" placeholder="StudentID" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Password" placeholder="Password" required>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					

					
				</form>
				</div>
		</div>
	</div>
	
</body>

</html>
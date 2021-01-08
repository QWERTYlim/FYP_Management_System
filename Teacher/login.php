<?php include '../includes/db.connect.php'?>

<?php
if(isset($_SESSION['StudentID']))
{
	header("Location:TeacherHome.php");
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
	<button class="blue"><a href="../index.php" class="blue">Home</a></button>
</head>
<body>
	<form name="TeacherInfo" action="../function/teacher_login_function.php" method="POST">
		<div class="sidenav">
			<div class="login-main-text">
			<h2>Application<br> Login Page</h2>
			<p>Login from here to access.</p>
			</div>
		</div>
		<div class="main">
			<div class="col-md-6 col-sm-12">
			<div class="login-form">
				<form>
					
					<div class="form-group">
						<label>Teacher ID</label>
						<input type="text" class="form-control" placeholder="User Name" id="TeacherID" name="TeacherID">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" id="Password" name="Password">
					</div>
					<button type="submit" class="btn btn-black" id="btn" name="btn">Login</button>
				</form>
			</div>
			</div>
		</div>
	</form>
	
</body>

</html>
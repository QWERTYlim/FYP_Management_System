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

	<form name="StudentInfo" action="../function/student_login_function.php" method="POST" class="">
		<div class="container-fluid">
      		<div class="row">
       			<div class="col-md-2 col-sm-6"></div>
       		    <div class="col-md-1"></div>
        		<div class="col-md-6">
          			<div class="row">
              			<div class="col-sm-6">
              				<div class="div1">
								<div class="form">
									<div>
										 <img src="../image/logo.png">
										 <label>Student ID</label>
										 <input type="text" class="form-control" placeholder="User Name" id="StudentID" name="StudentID">
									</div>
								   	<div>
										 <label>Password</label>
										 <input type="password" class="form-control" placeholder="Password" id="Password" name="Password">
										 <br>	
										 <button type="submit" class="btn btn-primary" id="btn" name="btn">Login</button>
									</div>
								</div>
							</div>
           				</div>
        			</div>
        		</div>
      		</div>
    	</div>
	</form>
	
</body>

</html>
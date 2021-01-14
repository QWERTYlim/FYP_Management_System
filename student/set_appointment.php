<?php include '../function/show.appointment.option.php';
if(!isset($_SESSION['StudentID']))
{
  
    echo "<script type='text/javascript'>alert('Please Login');
    window.location='login.php';
    </script>";
}?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Make Appointment</title>

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/simple-sidebar.css" rel="stylesheet">
	<?php
if($_SESSION['TeacherID']=='0')
{
    echo "<script type='text/javascript'>alert('Please Request teacher first!');
    window.location='requestForm.php';
    </script>";
}
?>
</head>

<body>

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">FYP Management System </div>
			<div class="list-group list-group-flush">
				<a href="StudentHome.php"
					class="list-group-item list-group-item-action bg-light">Update&nbspStudent&nbspInfo</a>
				
				<a href="set_appointment.php"
					class="list-group-item list-group-item-action bg-light">Make&nbspAppointment</a>
				<a href="showReference.php" class="list-group-item list-group-item-action bg-light">Past Year Report</a>
				<a href="uploadReport.php" class="list-group-item list-group-item-action bg-light">Submit Report</a>
				<a href="RecordMeeting.php" class="list-group-item list-group-item-action bg-light">Project Diary</a>
	
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<button class="btn btn-primary" id="menu-toggle">&#9776; </button>

				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION['StudentID'];?>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

								<a class="dropdown-item"
									href="StudentHome.php"><?php echo $_SESSION['studentName'];?></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Student_Timeslot.php">Request Lecture</a>
								<a class="dropdown-item" href="Student_Timeslot.php">Timeslot</a>
                <a class="dropdown-item" href="Report_comment.php">Report Comment</a>
								<a class="dropdown-item" href="../function/student_logout_function.php">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<form name="appointment" action="../function/add.appointment.php" method="POST">

				<strong style="border-bottom-style: solid;margin-left:10px">Make Appointment</strong>
				<p>
				</p>
				<div style="margin-left:10px;border-style:solid;width:525px">

					<p></p>
					<div style="margin-left:10px;">
						<h6 for="faculty">Department&nbsp:</h6>
						<select id="faculty" name="faculty" style="width: 50%;">
							<?php echo $options;?>
						</select>
						<p></p>
						<h6 for="teacher">Teacher&nbsp:</h6>
						<select id="teacher" name="teacher" style="width: 50%;">
							<?php echo $options3;?>
						</select>
						<p></p>
						<h6 for="room">Room&nbsp:</h6>
						<select id="room" name="room" style="width: 50%;">
							<?php echo $options2;?>
						</select>
						<p></p>
						<h6 for="time">Time&nbsp:<h6>
								<select id="time" name="time" style="width: 50%;">
									<?php echo $options4;?>
								</select>
								<p></p>
								<h6 for="date">Date&nbsp:</h6>
								<input type="date" name="dates" id="dates">
								</p>

								<button id="appointment_btn" name="appointment_btn" class="btn btn-sm btn-primary"
									style="margin-left:195px">
									submit
								</button>
								<p></p>
					</div>
					<!--
		<div style= "width:100%; height: 220px;">

		</div>-->



				</div>


			</form>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript -->
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function (e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>

</body>

</html>
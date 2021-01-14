<?php include '../includes/db.connect.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lecture List</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/all_teacher.js"></script>

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">FYP Management System</div>
      <div class="list-group list-group-flush">
      <a href="add_room.php" class="list-group-item list-group-item-action bg-light">Add New Meeting Place</a>
        <a href="add_student.php" class="list-group-item list-group-item-action bg-light">Add New Student</a>
        <a href="add_teacher.php" class="list-group-item list-group-item-action bg-light">Add New Lecture</a>
        <a href="all_student.php" class="list-group-item list-group-item-action bg-light">Student List</a>
        <a href="all_teachers.php" class="list-group-item list-group-item-action bg-light">Lecture List</a>
      
        <a href="delReference.php" class="list-group-item list-group-item-action bg-light"> Past Year Report</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">&#9776; </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['adminID'];?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

			  <a class="dropdown-item" href="../function/admin_logout_function.php">Logout</a>
                <div class="dropdown-divider"></div>
              
              </div>
            </li>
          </ul>
        </div>
      </nav>

	<div class="container">
			<br />
			<br />
			<br />
			<h2 >Teacher list</h2>
			<div class="form-group">
				<div class="input-group">
				
					<input type="text" name="search_text" id="search_text" placeholder="Search by Name / TeacherID / Department" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
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
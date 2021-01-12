<?php include '../includes/db.connect.php';?>


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Request</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/show_reference.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Final Year Project </div>
      <div class="list-group list-group-flush">
      <a href="show_request.php"class="list-group-item list-group-item-action bg-light">Student Request</a>
      <a href="show_Report.php"class="list-group-item list-group-item-action bg-light">Student Report</a>
      <a href="show_Record.php"class="list-group-item list-group-item-action bg-light">Project Diary</a>
     
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">&#9776; </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           
           
              <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['TeacherID'];?>
			  </a>
			  <li class="nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../function/teacher_logout_function.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

		<div class="table-wrapper" style="margin-left:10px">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8"><strong style="border-bottom-style:solid;">Student Request</strong></div>
				
				</div>
				<p></p>
			</div>
			<table class="table table-bordered">
				<div id="disp_data"></div>
				<script type="text/javascript" src="../js/student_request.js"></script>
			</table>
		</div>
	</div>    
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

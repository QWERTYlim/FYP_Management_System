<?php include '../includes/db.connect.php';
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM teacher";
$res = mysqli_query($connect,$query); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Info</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
     

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
<style>
  input{
 margin-left:-10px;

  
  
border-radius:4px;
  }
  .paginate_button{
    white-space:wrap;
color:black;

  }
  .dataTables_length{
     bottom:10%:
  }
    </style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Final Year Project </div>
      <div class="list-group list-group-flush">
        <a href="StudentHome.php"
          class="list-group-item list-group-item-action bg-light">Update&nbspStudent&nbspInfo</a>
        <a href="requestForm.php" class="list-group-item list-group-item-action bg-light">Request&nbspTeacher</a>
        <a href="set_appointment.php" class="list-group-item list-group-item-action bg-light">Make&nbspAppointment</a>
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

                <a class="dropdown-item" href="StudentHome.php"><?php echo $_SESSION['studentName'];?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../function/student_logout_function.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="table-responsive" style="width:95%;">
  <table id="data" class="table table-striped table-bordered">
  	<thead>
  		<tr>
  			<td>Name</td>
  			<td>TeacherID</td>
  			<td>DepartmentName</td>
  		</tr>
  	</thead>

  	<?php
  	while ($row=mysqli_fetch_array($res)) {
  		echo '
  		<tr>
  			<td>'.$row["Name"]. '</td>
  			<td>'.$row["TeacherID"]. '</td>
  			<td>'.$row["DepartmentName"]. '</td>
  		</tr>
  		';
  	}
  	?>
  </table>
 </div>

 <div id="disp_data"></div>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->

 
  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
       
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>      -->
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
	$(document).ready(function(){
		$('#data').DataTable();
	});

</script>

</body>

</html>
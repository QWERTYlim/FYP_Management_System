<?php include '../includes/db.connect.php'?>
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

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

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
                <?php echo $_SESSION['StudentID'];?>
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

      <form name="StudentInfo" action="../function/add_StudentInfo.php" method="POST">
        <strong style="border-bottom-style:solid;margin-left:10px;font-size:15px">Update Profile</strong>
        <p></p>
        <div style="margin-left:10px;border-style:solid;width:525px">

          <p></p>
          <div style="margin-left:10px">
            <h6 for="Email">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
            </h6>
            <input id="Email" name="Email" autofocus>
            <p></p>
          </div>
          <div style="margin-left:10px">
            <h6 for="PhoneNumber">Phone Number :</h6>
            <input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="123-4556678" pattern="[0-9]{3}-[0-9]{7}"
              required>
          </div>

          <br>
          <br>

          <p>
            <button id="StudentInfo_btn" name="StudentInfo_btn" style="margin-left:47%" class="btn  btn-sm btn-primary">
             Submit
            </button>
          </p>
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
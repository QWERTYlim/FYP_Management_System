<?php include '../function/show.appointment.option.php'?>
<!DOCTYPE html>
<html lang="en">

 <?php
 if($_SESSION['TeacherID']=='1')
{
    echo "<script type='text/javascript'>alert('Please Be Patient To Wait Responce From Teacher');
    window.location='StudentHome.php';
    </script>";
}elseif($_SESSION['TeacherID']!='0')
{
    echo "<script type='text/javascript'>alert('Lecturer Exists');
    window.location='StudentHome.php';
    </script>";
}
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Request Lecturer</title>
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
      <div class="sidebar-heading">FYP Management System </div>
      <div class="list-group list-group-flush">
        <a href="StudentHome.php"
          class="list-group-item list-group-item-action bg-light">Update&nbspStudent&nbspInfo</a>
    
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
                <a class="dropdown-item" href="requestForm.php">Request Lecturer</a>
                <a class="dropdown-item" href="Student_Timeslot.php">Timeslot</a>
                <a class="dropdown-item" href="Report_comment.php">Report Comment</a>
                <a class="dropdown-item" href="../function/student_logout_function.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <?php
$query = "SELECT * FROM teacher WHERE DepartmentName='". $_SESSION['DepartmentName']."'" ;
$result1 = mysqli_query($connect, $query);
$options3 = "";
while($row2 = mysqli_fetch_array($result1))
{
    $options3 = $options3."<option>$row2[3]</option>";
}?>


      <form method="post" enctype="multipart/form-data" action="../function/uploadRequest.php">

        <div class="panel panel-default">
          <div class="panel-heading"><strong style="border-bottom-style: solid;margin-left:10px">Request
              Teacher</strong>
            <p></p>
            <div class="panel-body">
              <div style="margin-left:10px;border-style:solid;width:700px">
                <!-- Standar Form -->
                <p></p>

                <p></p>
                <div class="form-inline">
                  <div class="form-group">
                    <h6 style="margin-left:10px;">Final Project Title : </h6>
                    <input type="text" id="title" name="title" style="margin-left:10px;margin-bottom:10px">
                    <p></p>

                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <h6 style="margin-left:10px;"
                      for="teacher">Teacher :&nbsp</h6>
                    <select id="teacher" name="teacher" class="form-control"
                      style="height:30px;font-size:10px;margin-bottom:10px;margin-left:10px;">
                      <?php echo $options3;?>
                    </select>
                  </div>
                </div>
                <p></p>
                <H6 style="margin-left:10px;">Self-referral to teachers :</h6>
                <style>
                   textarea {
                    resize: none;
                   }
                  </style>
                <textarea cols="47" rows="5" name="message" style="margin-left:10px;"></textarea>
                <p></p>

                <h6 style="margin-left:10px;">upload the self recommendation file :<p></p>
                </h6>


                <input type="file" name="myfile" id="myfile" multiple style="margin-left:10px;">


                <button type="submit" class="btn btn-sm btn-primary" name="submit" value="submit"
                  style="margin-bottom:5px;margin-left:265px">Submit</button>
              </div>

            </div>

          </div>

        </div>
    </div>
  </div> <!-- /container -->
  </form>
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
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
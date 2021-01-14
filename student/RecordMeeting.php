<?php include '../function/show.appointment.option.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Diary</title>

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
            <div class="sidebar-heading">Final Year Project </div>
            <div class="list-group list-group-flush">
                <a href="StudentHome.php"
                    class="list-group-item list-group-item-action bg-light">Update&nbspStudent&nbspInfo</a>
                <a href="requestForm.php"
                    class="list-group-item list-group-item-action bg-light">Request&nbspTeacher</a>
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
                                <a class="dropdown-item" href="Student_Timeslot.php">Timeslot</a>
                <a class="dropdown-item" href="Report_comment.php">Report Comment</a>
                                <a class="dropdown-item" href="../function/student_logout_function.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <style>
                textarea {
                    resize: none;
                }
            </style>
            <form method="Post" enctype="multipart/form-data" action="../function/upload_RecordMeeting.php">

                <div class="div1">

                    <div class="panel-heading"><strong style="border-bottom-style:solid;margin-left:10px">Project Diary
                        </strong>
                        <p></p>
                        <div style="margin-left:10px;border-style:solid;width:525px">
                            <div style="margin-left:10px;">
                                <p></p>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <h6 for="date">Date&nbsp :&nbsp</h6>
                                        <input type="date" name="dates" id="dates">

                                    </div>
                                </div>
                                <p></p>
                                <h6>Issues identified in previous meeting :</h6>
                                <textarea cols="45" rows="3" name="message"></textarea>
                                <br>
                                <br>
                                <h6>Feedback received in previous meeting :</h6>
                                <textarea cols="45" rows="3" name="message1"></textarea>
                                <br>
                                <br>
                                <h6>Action taken on feedback :</h6>
                                <textarea cols="45" rows="3" name="message2"></textarea>
                                <br>
                                <br>
                                <h6>Matters to discuss :</h6>
                                <textarea cols="45" rows="3" name="message3"></textarea>
                                <br>
                                <br>

                                <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">


                                    <h6>Select files from your computer :</h6>
                                    <div class="form-inline">
                                        <div class="form-group">

                                            <input type="file" name="myfile" id="myfile" multiple>

                                            <button type="submit" class="btn btn-sm btn-primary" name="submit"
                                                value="submit" style="margin-left:-38px;margin-bottom:5px;">Upload
                                                files</button>
                                            <br>
                                        </div>
                                        <p></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p></p>
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
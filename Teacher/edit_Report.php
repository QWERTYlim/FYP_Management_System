<?php include '../includes/db.connect.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Report</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/delReference.js"></script>
		
  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">FYP Management System </div>
      <div class="list-group list-group-flush">
       
        <a href="student_list.php"class="list-group-item list-group-item-action bg-light">Student List</a>
      <a href="show_Report.php"class="list-group-item list-group-item-action bg-light">Student Report</a>
      <a href="show_Diary.php"class="list-group-item list-group-item-action bg-light">Project Diary</a>
      <a href="show_Timeslot.php"class="list-group-item list-group-item-action bg-light">Timeslot</a>
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
                <?php echo $_SESSION['TeacherID'];?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

              <a class="dropdown-item"><?php echo $_SESSION['TeacherName'];?></a>
              <a class="dropdown-item" href="Approve_appointment.php">Approve Appointment</a>
                <a class="dropdown-item" href="show_Request.php">Request Rejected</a>
                <a class="dropdown-item" href="student_rejected.php">Request Pending</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../function/teacher_logout_function.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM uploadreport WHERE id='$id'" ;
$result1 = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result1))
{
    $title = $row[2];
    $comment = $row[6];
    $file = $row[3];

}   
?>
    
<form method="Post" enctype="multipart/form-data" action="../function/teacher_edit_comment.php?id=<?php echo $id; ?>">
<strong style="border-bottom-style:solid;margin-left:10px;">Comment and Rating</strong>
<p> </p>
    <div style="margin-left:10px;border-style:solid;width:550px;">
    <p> </p>
    <div style="margin-left:10px;">
    <h6>Title：<input type="text" value="<?php echo $title;?>" readonly style="margin-left:50px;"> </input></h6>
    <p> </p>
    <h6>File Upload：<input type="text" value="<?php echo $file;?>" readonly> </input></h6>
    <p> </p>
    <h6>Comment:</h6>
    
    <textarea cols="45" rows="5" name="message" >
    <?php echo $comment?>
    </textarea>
    <div class="form-inline">
                  <div class="form-group">
    <h6 class='result'>Rating:0</h6>
    <div class="rateyo" id= "rating"
                        data-rateyo-rating="4"
                         data-rateyo-num-stars="5"
                        data-rateyo-score="3">
     </div>
     <div>
    
   </div>

    <input type="hidden" name="rating">
</br>
   
 </div>

 </div>
 <input class="btn-sm btn-primary"type="submit" name="submit"value="submit">
 <p></p>
</form>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>    
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('Rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
</body>

</html>
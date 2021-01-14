<?php include '../includes/db.connect.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add New Lecturer</title>

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
      <a href="add_room.php" class="list-group-item list-group-item-action bg-light">Add New Meeting Place</a>
        <a href="add_student.php" class="list-group-item list-group-item-action bg-light">Add New Student</a>
        <a href="add_teacher.php" class="list-group-item list-group-item-action bg-light">Add New Lecturer</a>
        <a href="all_student.php" class="list-group-item list-group-item-action bg-light">Student List</a>
        <a href="all_teachers.php" class="list-group-item list-group-item-action bg-light">Lecturer List</a>
      
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

         
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../function/admin_logout_function.php">Logout</a>
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
<form method="Post" enctype="multipart/form-data" action="../function/insert_teacher.php">

<strong style="margin-left:10px;border-bottom-style:solid;">Lecturer List</strong>
    
    <p></p>
   <div style="margin-left:10px;border-style:solid;width:400px;">
   <p></p>
   <div style="margin-left:10px;">
    
    <h6>Lecturer ID :</h6>
    <input type="text" name="TeacherID" >
    <p></p>
    <h6>Lecturer Password :</h6>
    <input type="text" name="Tpassword" >
    <p></p>
    <h6>Lecturer Name :</h6>
    <input type="text" name="Tname" >
    <p></p>
    <div style="width:100%;">
    <?php
    $query = "SELECT * FROM department " ;
	$result1 = mysqli_query($connect, $query);
	$options5 = "";
    while($row2 = mysqli_fetch_array($result1))
    
	{
    	$options5 = $options5."<option>$row2[1]</option>";
    }
    ?>
			<h6 for="Tdepartment">Department :</h6>
			<select id="Tdepartment" name="Tdepartment">
				<?php echo $options5;?>
            </select>
        
            <p></p>
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
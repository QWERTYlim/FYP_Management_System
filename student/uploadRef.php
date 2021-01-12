<?php include '../includes/db.connect.php'?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<head>
<title>Student Info</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
   
   background-image: url(../image/cover.jpeg);
   background-size:cover;
   background-repeat: no-repeat;
   height: 100%;
   font-family: 'Numans', sans-serif;
 }
 
 .sidenav {
   height:auto;
   width: auto;
   position: fixed;
   z-index: 1;
   top: 0;
   left: 0;
  
   overflow-x: hidden;
   transition: 0.5s;
   padding-top: 60px;
 }
 
 .sidenav a {
   padding: 8px 8px 8px 32px;
   text-decoration: none;
   font-size: 20px;
   color:black;
   display: block;
   transition: 0.3s;

 }
 
 .sidenav a:hover {
   background-color: white;
   color:black;
 }
 
 .sidenav .closebtn {
  
   font-size:30px;
   cursor:pointer;
   margin-bottom:25px;
   position: absolute;
   top: 13;
   right: 206;
   font-size: 30px;
   margin-left: 50px;
   
 }
 
 @media screen and (max-height: 450px) {
   .sidenav {padding-top: 15px;}
   .sidenav a {font-size: 18px;}
 }
 .div1{
    width:45%; height:auto;background-color:rgba(255,255,255,0.8);border-style:solid;margin-left:23%;margin-top:5%;font-size:15px;
 }
 .div2{
	
	border-style:solid;
	width:97%;
}
.div3{
    margin-left:10px;
    font-size:15px;
}
  </style>

</head>
<body>
	<div style="background-color:rgba(100, 149, 237,0.1)">
<nav class="navbar navbar-expand-sm bg- navbar-dark ">
  <ul class="navbar-nav">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div id="mySidenav" class="sidenav" style="background-color:rgba(100, 149, 237,0.5)">

	<h5 class="closebtn" onclick="closeNav()">&#9776; </h5>
<a style="border-bottom-style:solid;">
  <a href="StudentHome.php"style="border-bottom-style:solid; ">Update&nbspStudent&nbspInfo</a>
  <a href="requestForm.php"style="border-bottom-style:solid;">Request&nbspTeacher</a>
  <a href="set_appointment.php"style="border-bottom-style:solid;">Make&nbspAppointment</a>
  <a href="uploadRef.php"style="border-bottom-style:solid;">Upload&nbspReference&nbspFile</a>
  <a href="showReference.php"style="border-bottom-style:solid;">show&nbspUpload</a>
  <a href="uploadReport.php"style="border-bottom-style:solid;">Upload&nbspReport</a>
  <a href="RecordMeeting.php"style="border-bottom-style:solid;">Recording&nbspMeeting</a>
  
</div>
    <li class="nav-item active">
      <a class="nav-link" href=""style="color:black;font-size:20px">Welcome , <?php echo $_SESSION['studentName'];?>!! </a>
    </li>
    
	<li class="nav-item dropdown bg-" Style="font-size:20px;margin-left:970px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" Style="color:black;"><?php echo $_SESSION['StudentID'];?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown"  Style="background:rgba(25,184,254,0.2);">
                <a class="dropdown-item" href="StudentHome.php" Style="color:black"><?php echo $_SESSION['studentName'];?></a>
                <a class="dropdown-item" href="../function/student_logout_function.php" Style="color:black">Logout</a>
               
                
                <div class="dropdown-divider">
               
            </li>
  </ul>
  
</nav>
<div class="div1">
<form action="../function/uploadFunction.php" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading" ><strong style="border-bottom-style:solid;">Upload Reference</strong>
    <div class="panel-body">
<p></p>
        <!-- Standar Form -->
       <div class="div2">
           <div class="div3">
               <p></p>
               <div class="form-inline">
            <div class="form-group">
        <h5>Please write your title : </h5>
        <input type="text" name="title"style="margin-left:10px;margin-bottom:10px">
        </div>
</div>
<p></p>
        <h5>Select files from your computer :</h5>
        <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <p></p>
            <input type="file"  name="myfile" id="myfile" multiple>
            </div>
            <p></p>
            <button type="submit" class="btn btn-sm btn-primary" name="save" id="save"style="margin-bottom:5px;margin-left:320px">Upload files</button>
        </div>
        </form>

        <!-- Drop Zone -->
        
    </div>
    </div>
</div> <!-- /container -->
</form>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "auto";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> 

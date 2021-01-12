<?php include '../includes/db.connect.php'?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>

<?php
if($_SESSION['TeacherID']!='0')
{
    echo "<script type='text/javascript'>alert('Already has teacher');
    window.location='StudentHome.php';
    </script>";
}
?>
<link rel="stylesheet" type="text/css" href="../css/uploadref.css">
<head>
<title>Request Teacher</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  .div1{
    width:50%; height:auto;background-color:rgba(255,255,255,0.8);border-style:solid;margin-left:23%;margin-top:5%;font-size:15px;

  }
  /* layout.css Style */

.upload-drop-zone.drop {
color: #222;
border-color: #222;
}


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
  </style>
</head>
<body>
	<div style="background-color:rgba(100, 149, 237,0.1)">
<nav class="navbar navbar-expand-sm bg- navbar-dark ">
  <ul class="navbar-nav">
  <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>
<div id="mySidenav" class="sidenav" style="background-color:rgba(100, 149, 237,0.5);">

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
                <a class="dropdown-item" href="StudentUpdateInfo.php" Style="color:black"><?php echo $_SESSION['studentName'];?></a>
                <a class="dropdown-item" href="../function/student_logout_function.php" Style="color:black">Logout</a>
               
                
                <div class="dropdown-divider">
               
            </li>
  </ul>
  
</nav>
</div>
<?php
$query = "SELECT * FROM teacher WHERE DepartmentName='". $_SESSION['DepartmentName']."'" ;
$result1 = mysqli_query($connect, $query);
$options3 = "";
while($row2 = mysqli_fetch_array($result1))
{
    $options3 = $options3."<option>$row2[3]</option>";
}?>


<div class="div1">
<form method="post" enctype="multipart/form-data" action="../function/uploadRequest.php">
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading"><strong style="border-bottom-style: solid">Request Teacher</strong>
    <div class="panel-body">

        <!-- Standar Form -->
   <p></p>
        <div style="border-style:solid">
        <p></p>
        <div class="form-inline">
            <div class="form-group">
        <h5 style="margin-left:10px;">Please write your title : </h5>
        <input type="text" name="myfile"style="margin-left:10px;margin-bottom:10px">
        <p></p>

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <h6 style="margin-left:10px;" for="teacher">Teacher :&nbsp</h6>
		<select id="teacher" name="teacher" class="form-control"style="height:30px;font-size:10px;margin-bottom:10px;margin-left:10px;" >
			<?php echo $options3;?>
    </select>
</div>
</div>
<p></p>
<H5 style="margin-left:10px;">Comment to teacher :</h5>
        <textarea cols="45" rows="5" name="message" style="margin-left:10px;"></textarea>
        <p></p>
      
        <h5 style="margin-left:10px;">Select files from your computer :<p></p></h5>
    
        
            <input type="file"  name="myfile" id="myfile" multiple style="margin-left:10px;">
           
        
            <button type="submit" class="btn btn-sm btn-primary" name="submit"value="submit" style="margin-bottom:5px;margin-left:310px">Upload</button>
        </div>
       
        </div>

</div>
    
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

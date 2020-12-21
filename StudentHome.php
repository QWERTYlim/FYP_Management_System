<?php include 'includes/db.connect.php'?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/blue.button.css">
<head>
	<title>Menu</title> 
<?PHP
session_start();
 echo $_SESSION['StudentID'];
?>
</head>
<body>
<h2>Welcome </h2>
<button class='blue'><a href='#' class="blue">---</a></button>
<br>
<br>
<button class='blue'><a href='StudentUpdateInfo.php' class="blue">Student Info</a></button>
<br>
<br>
<button class='blue'><a href="function/logout_function.php" class="blue">Logout</a></button>
<br>
<br>
<button class='blue'><a href="uploadRef.php" class="blue">Upload File</a></button>
<br>
<br>
<button class='blue'><a href="downloadRef.php" class="blue">Download File</a></button>
<br>
<br>
<button class='blue'><a href="showUpload.php" class="blue">Reference File</a></button>
<br>
<br>
<button class='blue'><a href="uploadReport.php" class="blue">Upload Report</a></button>
<br>
<br>
<button class='blue'><a href="downloadReport.php" class="blue">Download Report</a></button>
<br>
<br>
</body>
</html>
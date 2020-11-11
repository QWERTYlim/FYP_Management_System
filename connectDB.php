<?php
	include 'includes/db.connect.php'
  ?>

<!DOCTYPE html>
<html>
<head >
	<title></title>
</head>
<body>

 <?php 
 	$sql = "SELECT * FROM user;";
 	$result = mysqli_query($connect,$sql);
 	$resultCheck = mysqli_num_rows($result);
 	if ($resultCheck>0) {
 		while ($row = mysqli_fetch_assoc($result)) {
 			echo $row['Username'];
 		}
 	}
  ?>
</body>
</html>
<?php
include 'includes/db.connect.php';
error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM appointment WHERE id='$id'";
$data=mysqli_query($connect,$query);

if($data){
    echo"cancel the request";
    

}

?>
<html>
<head>
</head>

<body>
<button class="blue"><a href="display_weeklyTimeslot.php">Display Weekly Timeslot</a></button>
</body>
</html>
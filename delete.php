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
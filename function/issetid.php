<?php
include '../includes/db.connect.php';
if(isset($_GET['id'])){
    $id=$_GET["id"];
    echo'<script> alert(id)</script>';
    
    $query = "DELETE FROM uploadref where id=$id";
    $res = mysqli_query($connect,$query); 
    echo "<script type='text/javascript'>alert('Delete Sucessful!');
        window.location='../Admin/delReference.php';
        </script>";
}
?>
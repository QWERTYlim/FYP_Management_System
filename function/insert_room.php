<?php
	include '../includes/db.connect.php'
?>
<?php
 if(isset($_POST['submit'])){
    $room=$_POST['room'];
   
    
    
    $sql = "INSERT room (name) VALUES ('$room')";
    if (mysqli_query($connect, $sql)) {
        echo'<script> alert("File was upload")</script>';
    echo'<script>window.location="../admin/all_student.php"</script>';
    }
 }
?>
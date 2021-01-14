<?php
include '../includes/db.connect.php';

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $message=$_POST['message'];
    $rating=$_POST['rating'];
    $query = "update uploadreport set comment='$message' where id='$id'";
    $query = "update uploadreport set Rating='$rating' where id='$id'";        
    $res=mysqli_query($connect,$query);
    if($res){
        echo'<script> alert("Data was Update")</script>';
        echo'<script>window.location="../teacher/show_report.php"</script>';
    }else{
        echo'<script type="text/javascript"> alert("Data not Update")</script>';
    }

}    
?>
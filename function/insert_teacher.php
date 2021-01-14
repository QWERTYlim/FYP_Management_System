<?php
	include '../includes/db.connect.php'
?>
<?php
 if(isset($_POST['submit'])){
    $TeacherID=$_POST['TeacherID'];
    $Tpassword=$_POST['Tpassword'];
    $Tpassword=sha1("$Tpassword");
    $Tname=$_POST['Tname'];
    $Tdepartment=$_POST['Tdepartment'];
    
    $sql = "INSERT INTO teacher (TeacherID,Password,Name,DepartmentName) VALUES ('$TeacherID','$Tpassword', '$Tname','$Tdepartment')";
    if (mysqli_query($connect, $sql)) {
        echo'<script> alert("File was upload")</script>';
    echo'<script>window.location="../admin/all_student.php"</script>';
    }
 }
?>
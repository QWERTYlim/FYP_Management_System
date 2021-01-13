<?php
	include '../includes/db.connect.php'
?>
<?php
 if(isset($_POST['submit'])){
    $StudentID=$_POST['StudentID'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $departmentID=$_POST['DepartmentName'];
    
     $sql = "INSERT INTO studentinfo (StudentID,Password,studentName) VALUES ('$StudentID','$password', '$name')";
    
   $query= mysqli_query($connect,$sql);
   if($query){
    $sql2 = "INSERT INTO studentdetail (StudentID,DepartmentName,TeacherID) VALUES ('$StudentID','$departmentID', 0)";
    $reuslt=mysqli_query($connect,$sql2);
    echo'<script> alert("File was upload")</script>';
    echo'<script>window.location="../admin/admin_home.php"</script>';
   }
 }
 
?>
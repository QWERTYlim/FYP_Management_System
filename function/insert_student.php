<?php
	include '../includes/db.connect.php'
?>
<?php
 if(isset($_POST['submit'])){

    $StudentID=$_POST['StudentID'];
    $password=$_POST['password'];
    $password=sha1("$password");
    
    // $password=sha1('$password');
    $name=$_POST['name'];
    $departmentID=$_POST['DepartmentName'];
    
     $sql = "INSERT INTO studentinfo (StudentID,Password,studentName) VALUES ('$StudentID','$password', '$name')";
    
   $query= mysqli_query($connect,$sql);
   if($query){
    $sql2 = "INSERT INTO studentdetail (StudentID,DepartmentName,TeacherID) VALUES ('$StudentID','$departmentID', 0)";
    $reuslt=mysqli_query($connect,$sql2);
    echo'<script> alert("Student Added")</script>';
     echo'<script>window.location="../admin/all_student.php"</script>';
   }
 }
 
?>
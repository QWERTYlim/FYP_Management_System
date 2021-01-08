<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['StudentID'])){
    session_start();
    $StudentID=$_POST['StudentID'];
    $Password=$_POST['Password'];
    
    
    $result=mysqli_query($connect,"SELECT*FROM studentinfo where StudentID='".$StudentID."'and Password='".$Password."' ");
	if(mysqli_num_rows($result)>0){
        $name=mysqli_query($connect,"SELECT studentName FROM studentinfo WHERE StudentID='".$StudentID."'");
        $FID=mysqli_query($connect,"SELECT FacultyID FROM studentinfo WHERE StudentID='".$StudentID."'");
        $TID=mysqli_query($connect,"SELECT TeacherID FROM studentinfo WHERE StudentID='".$StudentID."'");

        $my_information=mysqli_fetch_assoc($name);
        $my_name=$my_information['studentName'];
        $my_information2=mysqli_fetch_assoc($FID);
        $my_facultyid=$my_information2['FacultyID'];
        $my_information3=mysqli_fetch_assoc($TID);
        $my_teacherid=$my_information3['TeacherID'];
        $_SESSION['StudentID']=$StudentID;
        $_SESSION['studentName']=$my_name;
        $_SESSION['FacultyID']=$my_facultyid;
        $_SESSION['TeacherID']=$my_teacherid;
        
        header("location:../student/StudentHome.php?user=$StudentID");
    }
    else{
        echo'<script> alert("Wrong!")</script>';
        echo'<script>window.location="../student/login.php"</script>';
        
    }
}
?>

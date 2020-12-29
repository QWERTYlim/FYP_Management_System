<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['TeacherID'])){
    session_start();
    $TeacherID=$_POST['TeacherID'];
    $TeacherPassword=$_POST['TeacherPassword'];
    $_SESSION['TeacherID']=$TeacherID;
    $_SESSION['studentName']=$StudentName;
    $result=mysqli_query($connect,"SELECT*FROM teacher where TeacherID='".$TeacherID."'and TeacherPassword='".$TeacherPassword."' ");
	if(mysqli_num_rows($result)>0){
        header("location:../teacherHome.php?user=$TeacherID");
    }
    else{
        header("location:../teacherlogin.php");
    }



   

}



?>


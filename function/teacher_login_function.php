<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['TeacherID'])){
    session_start();
    $TeacherID=$_POST['TeacherID'];
    $Password=$_POST['Password'];
    
    
    $result=mysqli_query($connect,"SELECT*FROM teacher where TeacherID='".$TeacherID."'and Password='".$Password."' ");
	if(mysqli_num_rows($result)>0){
        $name1=mysqli_query($connect,"SELECT Name FROM teacher WHERE TeacherID='".$TeacherID."'");
        $DID=mysqli_query($connect,"SELECT DepartmentName FROM teacher WHERE TeacherID='".$TeacherID."'");
        

        $my_information=mysqli_fetch_assoc($name1);
        $my_name1=$my_information['Name'];
        $my_information2=mysqli_fetch_assoc($DID);
        $my_facultyid=$my_information2['DepartmentName'];
        
        $_SESSION['TeacherID']=$TeacherID;
        $_SESSION['TeacherName']=$my_name1;
        $_SESSION['DepartmentName']=$my_facultyid;
        
        
        header("location:../teacher/teacherHome.php?user=$TeacherID");
    }
    else{
        echo'<script> alert("Wrong!")</script>';
        echo'<script>window.location="../teacher/login.php"</script>';
        
    }
}



?>


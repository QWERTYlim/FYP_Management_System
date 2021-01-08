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
        $FID=mysqli_query($connect,"SELECT FacultyID FROM teacher WHERE TeacherID='".$TeacherID."'");
        

        $my_information=mysqli_fetch_assoc($name1);
        $my_name=$my_information['Name'];
        $my_information2=mysqli_fetch_assoc($FID);
        $my_facultyid=$my_information2['FacultyID'];
        
        $_SESSION['TeacherID']=$TeacherID;
        $_SESSION['Name']=$my_name;
        $_SESSION['FacultyID']=$my_facultyid;
        
        
        header("location:../teacher/teacherHome.php?user=$TeacherID");
    }
    else{
        echo'<script> alert("Wrong!")</script>';
        echo'<script>window.location="../teacher/login.php"</script>';
        
    }
}



?>


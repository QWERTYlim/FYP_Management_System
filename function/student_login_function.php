<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['StudentID'])){
    
    $StudentID=$_POST['StudentID'];

    $Pword=$_POST['Password'];
    $Pword=sha1("$Pword");


    
    
    $result=mysqli_query($connect,"SELECT*FROM studentinfo where StudentID='".$StudentID."'and Password='".$Pword."' ");
    
	if(mysqli_num_rows($result)>0){
        $name=mysqli_query($connect,"SELECT studentName FROM studentinfo WHERE StudentID='".$StudentID."'");
        $DID=mysqli_query($connect,"SELECT DepartmentName FROM studentdetail WHERE StudentID='".$StudentID."'");
        $TID=mysqli_query($connect,"SELECT TeacherID FROM studentdetail WHERE StudentID='".$StudentID."'");

        $my_information=mysqli_fetch_assoc($name);
        $my_name=$my_information['studentName'];
        $my_information2=mysqli_fetch_assoc($DID);
        $my_departmentid=$my_information2['DepartmentName'];
        $my_information3=mysqli_fetch_assoc($TID);
        $my_teacherid=$my_information3['TeacherID'];
        $_SESSION['StudentID']=$StudentID;
        $_SESSION['studentName']=$my_name;
        $_SESSION['DepartmentName']=$my_departmentid;
        $_SESSION['TeacherID']=$my_teacherid;
        
        header("location:../student/StudentHome.php?user=$StudentID");
    }
    else{
        echo'<script> alert("Wrong!")</script>';
       
        echo'<script>window.location="../student/login.php"</script>';
        
    }
}
?>

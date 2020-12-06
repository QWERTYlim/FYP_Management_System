<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['StudentID'])){
    $StudentID=$_POST['StudentID'];
    $Password=$_POST['Password'];
    $_SESSION['StudentID']=$StudentID;
    $result=mysqli_query($connect,"SELECT*FROM studentinfo where StudentID='".$StudentID."'and Password='".$Password."' ");
	if(mysqli_num_rows($result)>0){
        header("location:../StudentInfo_ajax.php?user=$StudentID");
    }
    else{
        header("location:../login.php");
    }



   

}



?>


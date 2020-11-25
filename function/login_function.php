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
        header("location:../StudentInfo.php?user=$StudentID");
    }
    else{
        header("location:../login.php");
    }


    
    if(isset($_POST['StudentInfo_btn'])){
        
        $PhoneNumber=$_POST['PhoneNumber'];
        $Email=$_POST['Email'];
    
        $query="UPDATE studentinfo set `PhoneNumber`='$PhoneNumber',`Email`='$Email'where StudentID='$StudentID'";
        $result1=mysqli_query($connect,$query);
    
        if($result1){
            echo'<script type="text/javascript"> alert("Data Update")</script>';
        }else{
            echo'<script type="text/javascript"> alert("Data not Update")</script>';
        }
    }

}





?>


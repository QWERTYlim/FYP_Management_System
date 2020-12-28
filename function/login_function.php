<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['StudentID'])){
    session_start();
    $StudentID=$_POST['StudentID'];
    $Password=$_POST['Password'];
    $_SESSION['StudentID']=$StudentID;
    $_SESSION['studentName']=$StudentName;
    $result=mysqli_query($connect,"SELECT*FROM studentinfo where StudentID='".$StudentID."'and Password='".$Password."' ");
	if(mysqli_num_rows($result)>0){
        header("location:../StudentHome.php?user=$StudentID");
    }
    else{
        header("location:../login.php");
    }



   

}



?>
<?php
$query = "SELECT * FROM studentinfo";
$res = mysqli_query($connect,$query); 
while($row=mysqli_fetch_array($res)){
    session_start();
	$_SESSION["studentName"] =$row["studentName"];
	
?>
	<?php
	}
?>
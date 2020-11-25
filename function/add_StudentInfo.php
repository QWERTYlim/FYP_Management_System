<?php
	include '../includes/db.connect.php'
?>
<?php
 if(isset($_POST['StudentInfo_btn'])){
	    session_start();
        $StudentID=$_SESSION['StudentID'];
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


?>
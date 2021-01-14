<?php
include '../includes/db.connect.php'
?>
<?php
if(isset($_POST['AdminID'])){
    
    $AdminID=$_POST['AdminID'];

    $Pword=$_POST['Password'];
    $Pword=sha1("$Pword");
    
    
    $result=mysqli_query($connect,"SELECT*FROM admin where AdminID='".$AdminID."'and Password='".$Pword."' ");
	if(mysqli_num_rows($result)>0){
       
        $_SESSION['adminID']=$AdminID;
        
        
        header("location:../admin/add_room.php?user=$AdminID");
    }
    else{
        echo'<script> alert("Wrong!")</script>';
        echo'<script>window.location="../admin/admin_login.php"</script>';
        
    }
}



?>


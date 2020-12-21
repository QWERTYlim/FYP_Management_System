<?php
	include '../includes/db.connect.php'
?>
<?php
session_start();
if (isset($_POST["submit"]))
 {
   
    $title = $_POST["title"];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];

    $sql = "INSERT into uploadref(filetitle,file) VALUES('$title','$pname')";
    
    if(mysqli_query($connect,$sql)){
        echo'<script> alert("File Sucessfully uploaded")</script>';
        echo'<script>window.location="../uploadRef.php"</script>';
    }
    else{
        echo "Error";
    }
}
 

?>
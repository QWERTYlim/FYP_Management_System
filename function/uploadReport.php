<?php
	include '../includes/db.connect.php'
?>
<?php
session_start();

if (isset($_POST["submit"]))
 {   
    
    $SID=$_SESSION['StudentID'];

   
    $query = "SELECT * FROM `teacher`";
	$result1 = mysqli_query($connect, $query);
	$options3 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options3 = $options3."<option>$row2[1]</option>";
	}

    $teacher=$_POST['teacher'];
    $title = $_POST["title"];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $file=$_FILES["file"];
    move_uploaded_file($file["tmp_name"],"../report_upload/".$file["name"]);

    $sql = "INSERT into uploadreport(sid,filetitle,file,teacherName) VALUES('$SID','$title','$pname','$teacher')";
    
    if(mysqli_query($connect,$sql)){
        echo'<script> alert("File Sucessfully uploaded")</script>';
        echo'<script>window.location="../uploadReport.php"</script>';
    }
    else{
        echo "Error";
    }
}
 ?>

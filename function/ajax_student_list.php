<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT studentinfo.studentName,formrequest.comment,formrequest.file,formrequest.Title,formrequest.sid,formrequest.Title,studentinfo.Email,studentinfo.PhoneNumber FROM formrequest LEFT JOIN studentinfo ON formrequest.sid=studentinfo.StudentID WHERE teacher='". $_SESSION['TeacherName']."'AND request='Approve'" ;

$res = mysqli_query($connect,$query); 
echo "<table class='table table-striped table-bordered' style='width:80%;margin-left: auto;margin-right: auto;'>";
echo "<thead>";
	echo "<tr style='border:2px solid black,font-weight: bold;'>" ;
		echo "<th style='border:2px solid black'>";echo"Student Name";echo "</th>";
		echo "<th style='border:2px solid black'>";echo"Student ID";echo "</th>";
		echo "<th style='border:2px solid black'>";echo'&nbsp';echo"Title";echo "</th>";
		echo "<th style='border:2px solid black'>";echo'&nbsp';echo"E-Mail";echo "</th>";
		echo "<th style='border:2px solid black'>";echo'&nbsp';echo"Phone Number";echo "</th>";

		echo "<th style='border:2px solid black'>";echo'&nbsp';echo"Download";echo "</th>";
		echo "<th style='border:2px solid black'>";echo'&nbsp';echo"Comment";echo "</th>";
		
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr style='border:2px solid black'>";
	echo "<td style='border:2px solid black'>";echo $row["studentName"];echo '&nbsp'; "</td>";
	echo "<td style='border:2px solid black'>";echo $row["sid"];echo '&nbsp'; "</td>";
	echo "<td style='border:2px solid black'>";echo'&nbsp';echo $row["Title"];echo '&nbsp'; "</td>";
	echo "<td style='border:2px solid black'>";echo $row["Email"];echo '&nbsp'; "</td>";
	echo "<td style='border:2px solid black'>";echo $row["PhoneNumber"];echo '&nbsp'; "</td>";

	echo "<td style='border:2px solid black'>";echo'&nbsp';?><a href="../function/ajax_student_request.php?file_name=<?php echo $row["file"]; ?>">Download</a><?php echo '&nbsp';"</td>";
	echo "<td style='border:2px solid black'>";echo'&nbsp';echo $row["comment"];echo'&nbsp'; "</td>";
	
	
	
	echo"</tr>";
 }
 echo "</table>";

}
if($status=="decline"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update formrequest set request='Decline' where sid='$id'";
	$res = mysqli_query($connect,$query); 
	$query = "update studentdetail set TeacherID='0' where StudentID='$id'";
	$res = mysqli_query($connect,$query); 
}
if($status=="approve"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update formrequest set request='Approve' where sid='$id'";
	$res = mysqli_query($connect,$query); 
	$query = "update studentdetail set TeacherID='". $_SESSION['TeacherID']."' where StudentID='$id'";
	$res = mysqli_query($connect,$query); 
}




if (isset($_GET['file_name'])) {
	$name = $_GET['file_name'];
	
	// fetch file to download from database
	$sql = "SELECT * FROM formrequest WHERE file=$name";
	$result = mysqli_query($connect, $sql);
	
	$filepath = '../request_upload/' . $name;
	echo'<script> alert("Wrong!")</script>';


	if (file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('../request_upload/' . $name));
		readfile('../request_upload/' . $name);
		exit;
	}

}


 ?>

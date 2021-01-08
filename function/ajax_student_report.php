<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM  uploadreport WHERE teacherName='". $_SESSION['TeacherID']."'" ;
$res = mysqli_query($connect,$query); 
echo "<table>";

echo "<thead>";
	echo "<tr>";
		echo "<th>";echo"SID";echo "</th>";
		echo "<th>";echo"Title";echo "</th>";
		echo "<th>";echo"File";echo "</th>";
		echo "<th>";echo"Download";echo "</th>";
		echo "<th>";echo"Action";echo "</th>";
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["sid"];echo "</td>";
    echo "<td>";echo $row["filetitle"];echo "</td>";
    echo "<td>";echo $row["name"];echo "</td>";
	echo "<td>";?><a href="../function/ajax_student_report.php?file_name=<?php echo $row["name"]; ?>">Download</a><?php echo "</td>";
	echo "<td>";?><a href="../teacher/edit_report.php?id=<?php echo $row["id"]; ?>">Edit</a><?php echo "</td>";

	
	
	echo"</tr>";
 }
 echo "</table>";
 
}



if (isset($_GET['file_name'])) {
	$name = $_GET['file_name'];
	
	// fetch file to download from database
	$sql = "SELECT * FROM uploadreport WHERE name=$name";
	$result = mysqli_query($connect, $sql);
	
	$filepath = '../report_upload/' . $name;
	echo'<script> alert("Wrong!")</script>';


	if (file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('../report_upload/' . $name));
		readfile('../report_upload/' . $name);
		exit;
	}

}


 ?>

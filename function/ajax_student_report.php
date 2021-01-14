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
echo "<table class='table table-striped table-bordered' style='width:50%;margin-left: auto;margin-right: auto;'>";

echo "<thead>";
	echo "<tr style='border:2px solid black'>";
		echo "<th style='border:2px solid black'>";echo"SID";echo "</th>";
		echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Title";echo "</th>";
		echo "<th style='border:2px solid black'>";echo '&nbsp';echo"File";echo "</th>";
		echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Rating";echo "</th>";
		echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Download";echo '&nbsp';"</th>";
		echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Action";echo '&nbsp'; "</th>";
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr style='border:2px solid black'>";
	echo "<td style='border:2px solid black'>";echo $row["sid"];echo '&nbsp';"</td>";
    echo "<td style='border:2px solid black'>";echo'&nbsp';echo $row["filetitle"];echo '&nbsp';"</td>";
    echo "<td style='border:2px solid black'>";echo'&nbsp';echo $row["name"];echo '&nbsp';"</td>";
    echo "<td style='border:2px solid black'>";echo'&nbsp';echo $row["Rating"];echo '/5';"</td>";
	echo "<td style='border:2px solid black'>";echo'&nbsp';?><a href="../function/ajax_student_report.php?file_name=<?php echo $row["name"]; ?>">Download</a><?php echo '&nbsp';"</td>";
	echo "<td style='border:2px solid black'>";echo'&nbsp';?><a href="../teacher/edit_report.php?id=<?php echo $row["id"]; ?>">Edit</a><?php echo'&nbsp'; "</td>";

	
	
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

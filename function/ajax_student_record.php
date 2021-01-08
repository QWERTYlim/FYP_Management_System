<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM  recordmeeting WHERE teacherName='". $_SESSION['TeacherID']."'" ;
$res = mysqli_query($connect,$query); 
echo "<table>";

echo "<thead>";
	echo "<tr>";
	echo "<th>";echo"SID";echo "</th>";
	echo "<th>";echo"File";echo "</th>";
	echo "<th>";echo"Download";echo "</th>";
	echo "<th>";echo"Issues identified";echo "</th>";
	echo "<th>";echo"Feedback received";echo "</th>";
	echo "<th>";echo"Action taken on feedback";echo "</th>";
	echo "<th>";echo"Matters to discuss";echo "</th>";
	echo "<th>";echo"Time Upload";echo "</th>";
	echo "<th>";echo"noted";echo "</th>";
	echo "<th>";echo"Info";echo "</th>";
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["sid"];echo "</td>";
	echo "<td>";echo $row["file"];echo "</td>";
	echo "<td>";?><a href="../function/ajax_student_record.php?file_name=<?php echo $row["file"]; ?>">Download</a><?php echo "</td>";
	echo "<td>";echo $row["issues"];echo "</td>";
	echo "<td>";echo $row["feedback"];echo "</td>";
	echo "<td>";echo $row["actionfeedback"];echo "</td>";
	echo "<td>";echo $row["matters"];echo "</td>";
	echo "<td>";echo $row["created_at"];echo "</td>";
	echo "<td>";echo $row["seen"];echo "</td>";
	echo "<td>";?>
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Seen" onclick="approve(this.id)">
	

	<?php echo "</td";
	echo"</tr>";
 }
 echo "</table>";

}

if($status=="approve"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update recordmeeting set seen='seen' where id='$id'";
	$res = mysqli_query($connect,$query); 
}




if (isset($_GET['file_name'])) {
	$name = $_GET['file_name'];
	
	// fetch file to download from database
	$sql = "SELECT * FROM recordmeeting WHERE file=$name";
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

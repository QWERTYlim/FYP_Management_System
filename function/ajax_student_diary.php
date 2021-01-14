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
echo "<table class='table table-striped table-bordered' style='width:80%;margin-left: auto;margin-right: auto;'>";

echo "<thead>";
	echo "<tr>";
	echo "<th style='border:2px solid black'>";echo"Student ID";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"File";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Download";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Issues identified";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Feedback received";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Action taken on feedback";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';;echo"Matters to discuss";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Time Upload";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Noted";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Selection";echo '&nbsp';"</th>";
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr style='border:2px solid black'>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["sid"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["file"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';?><a href="../function/ajax_student_record.php?file_name=<?php echo $row["file"]; ?>">Download</a><?php echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["issues"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["feedback"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["actionfeedback"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["matters"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["created_at"];echo '&nbsp';"</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["seen"];echo '&nbsp';"</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';?>
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Approve" onclick="seen(this.id)">
	

	<?php echo '&nbsp';"</td";
	echo"</tr>";
 }
 echo "</table>";

}

if($status=="seen"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update recordmeeting set seen='Approve' where id='$id'";
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

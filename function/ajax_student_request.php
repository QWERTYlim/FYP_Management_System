<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM  formrequest WHERE teacher='". $_SESSION['TeacherName']."'" ;
$res = mysqli_query($connect,$query); 
echo "<table>";

echo "<thead>";
	echo "<tr>";
		echo "<th>";echo"SID";echo "</th>";
		echo "<th>";echo"File";echo "</th>";
		echo "<th>";echo"Download";echo "</th>";
		echo "<th>";echo"Comment";echo "</th>";
		echo "<th>";echo"Status";echo "</th>";
		echo "<th>";echo"Approve/Decline";echo "</th>";
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["sid"];echo "</td>";
	echo "<td>";echo $row["file"];echo "</td>";
	echo "<td>";?><a href="../function/ajax_student_request.php?file_name=<?php echo $row["file"]; ?>">Download</a><?php echo "</td>";
	echo "<td>";echo $row["comment"];echo "</td>";
	echo "<td>";echo $row["request"];echo "</td>";
	echo "<td>";?>
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Approve" onclick="approve(this.id)">
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Decline" onclick="if (!confirm('Are you sure?')) { return false };decline(this.id)">
	<?php echo "</td";
	echo"</tr>";
 }
 echo "</table>";

}
if($status=="decline"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update formrequest set request='Decline' where id='$id'";
	$res = mysqli_query($connect,$query); 
}
if($status=="approve"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update formrequest set request='Approve' where id='$id'";
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

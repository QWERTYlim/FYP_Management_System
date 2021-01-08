<?php
include '../includes/db.connect.php';
echo"asdasdasdasd";
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
<?php
$connect = mysqli_connect("localhost", "root", "", "tests");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	
	$query = "SELECT * FROM uploadreport WHERE filetitle LIKE '%".$search."%'  AND Rating>80
	OR name LIKE '%".$search."%' AND Rating>80 ";
	

}
else
{
	$query = "
	SELECT * FROM uploadreport LEFT JOIN studentinfo ON uploadreport.sid=studentinfo.StudentID WHERE Rating>80";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						<th>Student ID</th>
						<th>Title</th>
							<th>File Name</th>
							<th>date</th>
							<th>Download</th>
							<th>PhoneNumber</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
			<td>'.$row["sid"].'</td>
			<td>'.$row["filetitle"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["date"].'</td>
				 <td><a href="../function/stu_ref_fetch.php?file_name='.$row["name"].'">Download</a></td>
				 <td>'.$row["PhoneNumber"].'</td>
				 
			</tr>	
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
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
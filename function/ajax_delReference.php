<?php
$connect = mysqli_connect("localhost", "root", "", "tests");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM uploadref
	WHERE name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM uploadref ORDER BY name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
                            <th>Download</th>
                            <th>Delete</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
                <td>'.$row["name"].'</td>
                <td><a href="../function/ajax_delReference.php?file_name='.$row["name"].'">Download</a></td>
                <td><button class="btn-sm btn-primary"><a href="../function/issetid.php?id='.$row["id"].'"style="color:white;">Delete</a></button></td>
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
    $sql = "SELECT * FROM uploadref WHERE name=$name";
    $result = mysqli_query($connect, $sql);
    
    $filepath = '../ref_upload/' . $name;
    echo'<script> alert("Wrong!")</script>';


    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../ref_upload/' . $name));
        readfile('../ref_upload/' . $name);
        exit;
    }

}



?>
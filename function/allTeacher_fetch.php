<?php
$output = '';
include '../includes/db.connect.php';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM teacher 
	WHERE TeacherID LIKE '%".$search."%'
	OR Name LIKE '%".$search."%' 
	OR DepartmentName LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM teacher ORDER BY Name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
                            <th>TeacherID</th>
                            <th>DepartmentName</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
                <td>'.$row["Name"].'</td>
                <td>'.$row["TeacherID"].'</td>
				<td>'.$row["DepartmentName"].'</td>
				<
                
            
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}



?>
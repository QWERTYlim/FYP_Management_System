<?php
$connect = mysqli_connect("localhost", "root", "", "tests");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM studentinfo 
	WHERE StudentID LIKE '%".$search."%'
	OR studentName LIKE '%".$search."%' 
   
	";
}
else
{
	$query = "
	SELECT * FROM studentinfo ORDER BY studentName";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
                            <th>StudentID</th>
                            <th>Email</th>
                            <th>PhoneNumber</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
                <td>'.$row["studentName"].'</td>
                <td>'.$row["StudentID"].'</td>
                <td>'.$row["Email"].'</td>
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



?>
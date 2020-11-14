<?php
	include 'includes/db.connect.php'
?>
<?php
	$query = "SELECT * FROM `faculty`";
	$result1 = mysqli_query($connect, $query);
	$options = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options = $options."<option>$row2[1]</option>";
	}

	$query = "SELECT * FROM `room`";
	$result1 = mysqli_query($connect, $query);
	$options2 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options2 = $options2."<option>$row2[1]</option>";
	}

	$query = "SELECT * FROM `teacher`";
	$result1 = mysqli_query($connect, $query);
	$options3 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options3 = $options3."<option>$row2[1]</option>";
	}

	$query = "SELECT * FROM `time`";
	$result1 = mysqli_query($connect, $query);
	$options4 = "";
	while($row2 = mysqli_fetch_array($result1))
	{
    	$options4 = $options4."<option>$row2[1]</option>";
	}

?>

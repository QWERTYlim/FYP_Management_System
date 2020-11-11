<?php
	include 'includes/db.connect.php'
?>
<?php
	

	// mysql select query
	$query = "SELECT * FROM `faculty`";

	// for method 1
	$result1 = mysqli_query($connect, $query);

	$options = "";

	while($row2 = mysqli_fetch_array($result1))
	{
    	$options = $options."<option>$row2[1]</option>";
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>    
	<label class="col-md-4 control-label" for="faculty">Faculty</label> 
	<select id="faculty" name="faculty" class="form-control">
        <?php echo $options;?>
    </select>
		
</body>
</html>



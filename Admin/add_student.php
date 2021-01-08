<?php include '../includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <button class="blue"><a href="admin_home.php" class="blue">Home</a></button>   
</head>
<body>
<style>
textarea {
   resize: none;
}
</style>
<form method="Post" enctype="multipart/form-data" action="../function/insert_student.php">


    <br>
    <br>
    
   
    
    <p>Student ID</p>
    <input type="text" name="StudentID" >
    <br>
    <br>
    <p>Student Password</p>
    <input type="text" name="password" >
    <br>
    <br>
    <p>name</p>
    <input type="text" name="name" >
    <br>
    <br>
    <div style="width:100%;">
    <?php
    $query = "SELECT * FROM department " ;
	$result1 = mysqli_query($connect, $query);
	$options5 = "";
    while($row2 = mysqli_fetch_array($result1))
    
	{
    	$options5 = $options5."<option>$row2[1]</option>";
    }
    ?>
			<p for="DepartmentName">Department</p>
			<select id="DepartmentName" name="DepartmentName" style="width: 50%;">
				<?php echo $options5;?>
			</select>
		</div>
    
    <input type="submit" name="submit"value="submit">
 
 
</form>
 
</body>
</html>
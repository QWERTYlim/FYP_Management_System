<?php include '../includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <button class="blue"><a href="admin_home.php" class="blue">Home</a></button>   
</head>
<body>
<style>
textarea {
   resize: none;
}
</style>
<form method="Post" enctype="multipart/form-data" action="../function/insert_teacher.php">


    <br>
    <br>
    
   
    
    <p>Teacher ID</p>
    <input type="text" name="TeacherID" >
    <br>
    <br>
    <p>Teacher Password</p>
    <input type="text" name="Tpassword" >
    <br>
    <br>
    <p>Teacher Name</p>
    <input type="text" name="Tname" >
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
			<p for="Tdepartment">Department</p>
			<select id="Tdepartment" name="Tdepartment" style="width: 50%;">
				<?php echo $options5;?>
			</select>
		</div>
   
    
    
    <input type="submit" name="submit"value="submit">
 
 
</form>
 
</body>
</html>
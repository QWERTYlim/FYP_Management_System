<?php
	include 'includes/db.connect.php'
?>

<?php
    $query = "SELECT * FROM `set_progress`";
    $result1 = mysqli_query($connect, $query);
    $options1 = "";
    while($row2 = mysqli_fetch_array($result1))
    {
        $options1 = $options1."<option>$row2[1]</option>";
    }
?>

<?php
    if (isset($_POST['update_btn'])){
        $week = $_POST['week'];
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
        $progress =$_POST['progress'];
        
        $sql = 
        "UPDATE timeslot 
        SET progress = $progress 
        WHERE week = $week,student_id = $student_id,student_name = $student_name";

        if (mysqli_query($connect, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
            
        mysqli_close($connect);
    }	
?>

<html>
    <head>
        <title>
            Set Student's progress Status
        </title>
    </head>
    <body>
        <h1>Update Status</h1>
        <h3>Enter the number of the week to modified data</h3>
        <label for="week">Week: </label>
        <input type="text" id="week" name="week"><br><br>

        <h3>Enter details for update the data</h3>
        <label for="studentID">Student ID: </label>
        <input type="text" id="student_id" name="student_id"><br>
        <br>

        <label for="studentName">Student Name: </label>
        <input type="text" id="student_name" name="student_name">
        <br>
        <br>

        <label class="col-md-4 control-label" for="sem_name">Status :</label>
        <select id="progress" name="progress" class="form-control" style="width: 150px;">
                    <?php echo $options1;?>
        </select>
        <br>
        <br>
	    <button id="update_btn" name="update_btn">Update Data</button>
        
    </body>

</html>
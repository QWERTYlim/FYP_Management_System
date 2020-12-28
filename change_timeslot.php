<?php
	include 'includes/db.connect.php'
?>

<?php
		$query = "SELECT * FROM `teacher`";
		$result1 = mysqli_query($connect, $query);
		$options1 = "";
		while($row2 = mysqli_fetch_array($result1))
		{
			$options1 = $options1."<option>$row2[1]</option>";
		}


		$query = "SELECT * FROM `sem`";
		$result1 = mysqli_query($connect, $query);
		$options2 = "";
		while($row2 = mysqli_fetch_array($result1))
		{
			$options2 = $options2."<option>$row2[1]</option>";
		}


		$query = "SELECT * FROM `time`";
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

<?php

    if (isset($_POST['update_btn'])){
        $student_id = $_POST['student_id'];
        $student_name = $_POST['student_name'];
		$teacher_name =$_POST['teacher_name'];
		$sem_name=$_POST['sem_name'];
		$week = $_POST['week'];
		$dates = $_POST['dates'];
		$from_time=$_POST['from_time'];
		$to_time=$_POST['to_time'];
        
        $sql = 
        "UPDATE timeslot 
        SET dates = $dates,from_time = $from_time,to_time = $to_time
        WHERE week = $week,student_id = $student_id,student_name = $student_name,teacher_name = $teacher_name,sem_name = $sem_name";

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
      <title>change schedule data</title>
    </head>
    <body>
        <h1>Update Schedule</h1>
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

        <label class="col-md-4 control-label" for="teacher_name">Teacher :</label>
        <select id="teacher_name" name="teacher_name" class="form-control">
            <?php echo $options1;?>
            
        </select>

        <br>
        <label class="col-md-4 control-label" for="sem_name">Sem :</label>
        <select id="sem_name" name="sem_name" class="form-control" style="width: 150px;">
                    <?php echo $options2;?>
        </select>
        <br>
        <label for="dates">Date: </label>
        <input type="date" id="dates" name="dates">
        <br>
        <label class="col-md-4 control-label" for="from">From Time: </label>
        <select id="from" name="from" class="form-control">
            <?php echo $options3;?>
        </select>
        <br>
        <label class="col-md-4 control-label" for="to">To Time :</label>
        <select id="to" name="to" class="form-control">
            <?php echo $options4;?>
        </select>
        <br>
        <label for="report">Report: </label>
        <input type="text" id="report" name="report"><br>
        <br>
	    <button id="update_btn" name="update_btn">Update Data</button>
    </body>
</html>
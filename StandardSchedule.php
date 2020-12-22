<?php
    include 'includes/db.connect.php'
?>

<?php
    $query = "SELECT * FROM teacher";
    $result1 = mysqli_query($connect, $query);
		$options1 = "";
		while($row2 = mysqli_fetch_array($result1))
		{
			$options1 = $options1."<option>$row2[1]</option>";
        }
        

?>

<html>
    <head>
        <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }

        table, td, th {
        border: 1px solid black;
        padding: 5px;
        }

        th {text-align: left;}
        </style>
    </head>
    <body>
        <h1>Standard Schedule</h1>
        <h3>Please select your target</h3>

        <script>

        </script>

        <div id="txtHint">
            <label class='col-md-4 control-label' for='teacher_name'>Teacher :</label>
            <select id='teacher_nam' name='teacher_name' class='form-control'>
                <?php echo $options1;?>
            </select>
        </div>
        
        <div >
            <?php
                $sql = "SELECT student_id,student_name,sem_name,week,date,from_time,to_time,report,progress  FROM timeslot WHERE teacher_name='Lim Pei Geok'";
                $result = mysqli_query($connect, $sql); 
                echo "<br><h3>Schedule of Student: </h3>";
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<table>
                        <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Sem</th>
                        <th>Week</th>
                        <th>Date</th>
                        <th>From Time</th>
                        <th>To Time</th>
                        <th>Progress</th>
                        <th>Report</th>
                        </tr>";

                        echo "<tr>";
                        echo "<td>" . $row["student_id"] . "</td>";
                        echo "<td>" . $row["student_name"] . "</td>";
                        echo "<td>" . $row["sem_name"] . "</td>";
                        echo "<td>" . $row["week"] . "</td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>" . $row["from_time"] . "</td>";
                        echo "<td>" . $row["to_time"] . "</td>";
                        echo "<td>" . $row["progress"] . "</td>";
                        echo "<td>" . $row["report"] . "</td>";
                        echo "</tr>";
                        echo "<br><br>";
                    }
                } else {
                echo "0 results";
                }
                mysqli_close($connect);
            ?>
        </div>
    </body>
</html>


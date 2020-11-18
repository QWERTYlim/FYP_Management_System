<?php
    include 'includes/db.connect.php'
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Appointment Approve</title>
    <link rel="stylesheet" type="text/css" href="css/blue.button.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <button class="blue"><a href="index.php" class="blue">Home</a></button>

    </head>

    <body>
        <h1>display Weekly Timeslot</h1>
        <table>
            <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Teacher</th>
            <th>Sem</th>
            <th>From</th>
            <th>To</th>

            <th>Delete</th>
            </tr>

            <?php
            $query = "SELECT * FROM timeslot";
            $data = mysqli_query($connect,$query);
            $total = mysqli_num_rows($data);

            

            if($total!=0){
                while($result=mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                    <th>&nbsp".$result['id']."</th>
                    <th>&nbsp".$result['student_id']."</th>
                    <th>&nbsp".$result['student_name']."</th>
                    <th>&nbsp".$result['teacher_name']."</th>
                    <th>&nbsp".$result['sem_name']."</th>
                    <th>&nbsp".$result['from_time']."</th>
                    <th>&nbsp".$result['to_time']."</th>
                    <th><a href='deleteTimeslot.php?id=$result[id]'>Delete</a></th>
                   <br>
                   <br>
                </tr>
                ";
                }
            }
            else{
                echo "0 result";
            }
            ?>
        </table>
        
        
    </body>

</html>

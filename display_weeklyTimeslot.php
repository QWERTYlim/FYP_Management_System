<?php
    include 'includes/db.connect.php'
?>

<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <h1>display Weekly Timeslot</h1>
        <?php
            $query = "SELECT * FROM timeslot";
            $data = mysqli_query($connect,$query);
            $total = mysqli_num_rows($data);

            if($total!=0){
                while($result=mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                    <tr>ID:&nbsp".$result['id']."&nbsp</tr>
                    <tr>Student ID:&nbsp".$result['student_id']."&nbsp</tr>
                    <tr>Student Name:&nbsp".$result['student_name']."&nbsp</tr>
                    <tr>Teacher:&nbsp".$result['teacher_name']."&nbsp</tr>
                    <tr>Sem:&nbsp".$result['sem_name']."&nbsp</tr>
                    <tr>From:&nbsp	".$result['from_time']."</tr>
                    <tr>To:&nbsp	".$result['to_time']."</tr>
                    
                    <tr><a href='?id=$result[id]'>Decline</a></tr>
                
                   <br>
                   <br>
                </tr>
                ";
                }
            }


        ?>
    </body>

</html>

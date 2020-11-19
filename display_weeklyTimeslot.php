<?php
    include 'includes/db.connect.php'
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Display Weekly Timeslot</title>
    <link rel="stylesheet" type="text/css" href="css/blue.button.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <button class="blue"><a href="index.php" class="blue">Home</a></button>

    </head>

    <body>
        <h1>display Weekly Timeslot</h1>

            <?php
            $status=$_GET["status"];
            if($status=="disp")
            {
            $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
            $query = "SELECT * FROM timeslot";
            $res = mysqli_query($connect,$query); 
            
            echo "<table>";
            echo "<tr>";
                echo "<td>";echo"ID";echo "</td>";
                echo "<td>";echo"Student ID";echo "</td>";
                echo "<td>";echo"Student Name";echo "</td>";
                echo "<td>";echo"Teacher";echo "</td>";
                echo "<td>";echo"Sem";echo "</td>";
                echo "<td>";echo"From";echo "</td>";
                echo "<td>";echo"To";echo "</td>";
                echo "<td>";echo"Delete";echo "</td>";
            echo"</tr>";
            while($row=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>";echo $row["id"];echo "</td>";
                echo "<td>";echo $row["student_id"];echo "</td>";
                echo "<td>";echo $row["student_name"];echo "</td>";
                echo "<td>";echo $row["teacher_name"];echo "</td>";
                echo "<td>";echo $row["sem_name"];echo "</td>";
                echo "<td>";echo $row["from_time"];echo "</td>";
                echo "<td>";echo $row["to_time"];echo "</td>";
                echo "<td>";?>
                <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Decline" onclick="decline(this.id)">
                <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Accept" onclick="accept(this.id)">
            
                <?php echo "</td";
                echo"</tr>";
             }
             echo "</table>";
            
            }
            if($status=="delete"){
                $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
                $id=$_GET["id"];
                $query = "DELETE FROM appointment where id=$id";
                $res = mysqli_query($connect,$query); 
            }


/*
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
                    <th><button class='blue'><a href='deleteTimeslot.php?id=$result[id]' class='blue'>Delete</a></button></th>
                   <br>
                   <br>
                </tr>
                ";
                }
            }
            else{
                echo "0 result";
            }
*/
            ?>
        
        
        
    </body>

</html>

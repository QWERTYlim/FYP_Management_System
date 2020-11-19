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
        <h1 style="text-align:center;">display Weekly Timeslot</h1>

        <?php include 'includes/db.connect.php';?>
        <style>
        <?php include 'css/table.css';?>
        </style>

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
            
	        <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Delete" onclick="delete1(this.id)">

            <?php echo "</td";
            echo"</tr>";
        }
        echo "</table>";

        }
        if($status=="delete"){
            $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
            $id=$_GET["id"];
            $query = "DELETE FROM timeslot where id=$id";
            $res = mysqli_query($connect,$query); 
        }
        ?>


    </body>

</html>

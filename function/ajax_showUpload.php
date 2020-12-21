<?php include '../includes/db.connect.php'?>
<?php
    $status=$_GET["status"];
    if($status=="disp")
        {
        $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
        $query = "SELECT * FROM uploadref";
        $res = mysqli_query($connect,$query); 

        echo "<table>";
        echo "<tr>";
            echo "<td>";echo"id";echo "</td>";
            echo "<td>";echo"File Title";echo "</td>";
            echo "<td>";echo"File";echo "</td>";
            echo "<td>";echo"Download";echo "</td>";
            echo "<td>";echo"Action";echo "</td>";
        echo"</tr>";
    while($row=mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>";echo $row["id"];echo "</td>";
            echo "<td>";echo $row["filetitle"];echo "</td>";
            echo "<td>";echo $row["file"];echo "</td>";
            echo "<td>";echo '<a href="function/download.php">download</a>';echo "</td>";
            echo "<td>";
            ?>
            <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Delete"
            onclick="delete1(this.id)">
            <?php       
            echo "</td";
        echo"</tr>";
            }
        echo "</table>";

        }
        if($status=="delete"){
            $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
            $id=$_GET["id"];
            $query = "DELETE FROM uploadref where id=$id";
            $res = mysqli_query($connect,$query); 
        }
        ?>

<?php include '../includes/db.connect.php'?>
<?php
    $status=$_GET["status"];
    if($status=="disp")
        {
        $connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
        $query = $query = "SELECT * FROM uploadref " ;
        $res = mysqli_query($connect,$query); 

        echo "<table>";

        echo "<thead>";
            echo "<tr>";
                echo "<th>";echo"id";echo "</th>";
                echo "<th>";echo"File";echo "</th>";
                echo "<th>";echo"Download";echo "</th>";
                echo "<th>";echo"Action";echo "</th>";
            echo"</tr>";
        echo "</thead>";

    while($row=mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>";echo $row["id"];echo "</td>";
            echo "<td>";echo $row["name"];echo "</td>";
            echo "<td>";?><a href="../function/ajax_showupload.php?file_name=<?php echo $row["name"]; ?>">Download</a><?php echo "</td>";
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

        if (isset($_GET['file_name'])) {
            $name = $_GET['file_name'];
            
            // fetch file to download from database
            $sql = "SELECT * FROM uploadref WHERE name=$name";
            $result = mysqli_query($connect, $sql);
            
            $filepath = '../ref_upload/' . $name;
            echo'<script> alert("Wrong!")</script>';
        
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('../ref_upload/' . $name));
                readfile('../ref_upload/' . $name);
                exit;
            }
        
        }
        ?>
        

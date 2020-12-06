<?php include '../includes/db.connect.php';?>
<style>
    <?php include '../css/table.css';
    ?>
</style>
<?php
$status=$_GET["status"];
if($status=="disp")
{
session_start();
$StudentID=$_SESSION['StudentID'];
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM studentinfo  WHERE StudentID='$StudentID'";
$res = mysqli_query($connect,$query); 
$row=mysqli_fetch_array($res);
echo "<table>";
echo "<tr>";
	echo "<td>";echo"StudentID";echo "</td>";
	echo "<td>";echo"Phone Number";echo "</td>";
	echo "<td>";echo"E-Mail";echo "</td>";
echo"</tr>";
echo "<tr>";
    echo "<td>";echo $row["StudentID"];echo "</td>";
    echo "<td>";echo $row["PhoneNumber"];echo "</td>";
    echo "<td>";echo $row["Email"];echo "</td>";
echo"</tr>";
echo "</table>";
?>
<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Update" onclick="approve(this.id)">
<?php
}
if($status=="update"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update appointment set approval='Decline' where id=$id";
	$res = mysqli_query($connect,$query); 
}

 ?>
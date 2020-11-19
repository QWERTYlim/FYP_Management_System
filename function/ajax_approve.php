<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM appointment";
$res = mysqli_query($connect,$query); 

echo "<table>";
echo "<tr>";
	echo "<td>";echo"ID";echo "</td>";
	echo "<td>";echo"Faculty";echo "</td>";
	echo "<td>";echo"Date";echo "</td>";
	echo "<td>";echo"Time";echo "</td>";
	echo "<td>";echo"Room";echo "</td>";
	echo "<td>";echo"Teacher";echo "</td>";
	echo "<td>";echo"Status";echo "</td>";
	echo "<td>";echo"Approve/Decline";echo "</td>";
	
echo"</tr>";
while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["id"];echo "</td>";
	echo "<td>";echo $row["faculty"];echo "</td>";
	echo "<td>";echo $row["date"];echo "</td>";
	echo "<td>";echo $row["time"];echo "</td>";
	echo "<td>";echo $row["room"];echo "</td>";
	echo "<td>";echo $row["teacher"];echo "</td>";
	echo "<td>";echo $row["approval"];echo "</td>";
	echo "<td>";?>
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Approve" onclick="approve(this.id)">
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Decline" onclick="if (!confirm('Are you sure?')) { return false };decline(this.id)">
	<?php echo "</td";
	echo"</tr>";
 }
 echo "</table>";

}
if($status=="decline"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update appointment set approval='Decline' where id=$id";
	$res = mysqli_query($connect,$query); 
}
if($status=="approve"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update appointment set approval='Approve' where id=$id";
	$res = mysqli_query($connect,$query); 
}
 ?>

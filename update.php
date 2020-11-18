<?php include 'includes/db.connect.php';?>
<style>
<?php include 'css/table.css';?>
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
echo"</tr>";
while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["id"];echo "</td>";
	echo "<td>";echo $row["faculty"];echo "</td>";
	echo "<td>";echo $row["date"];echo "</td>";
	echo "<td>";echo $row["time"];echo "</td>";
	echo "<td>";echo $row["room"];echo "</td>";
	echo "<td>";echo $row["teacher"];echo "</td>";
	echo "<td>";?><input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="delete" onclick="delete1(this.id)">
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
 ?>

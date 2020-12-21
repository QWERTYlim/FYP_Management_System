<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM user";
$res = mysqli_query($connect,$query); 

echo "<table>";
echo "<tr>";
	echo "<td>";echo"ID";echo "</td>";
	echo "<td>";echo"Username";echo "</td>";
	echo "<td>";echo"Identity";echo "</td>";
	echo "<td>";echo"Normal/Admin";echo "</td>";
	
echo"</tr>";
while($row=mysqli_fetch_array($res)){
	echo "<tr>";
	echo "<td>";echo $row["ID"];echo "</td>";
	echo "<td>";echo $row["Username"];echo "</td>";
	echo "<td>";echo $row["Identity"];echo "</td>";
	echo "<td>";?>
	<input type="button" id="<?php echo $row["ID"]; ?>" name="<?php echo $row["ID"];?>" value="Admin" onclick="admin(this.id)">
	<input type="button" id="<?php echo $row["ID"]; ?>" name="<?php echo $row["ID"];?>" value="Normal" onclick="if (!confirm('Are you sure?')) { return false };normal(this.id)">
	<?php echo "</td";
	echo"</tr>";
 }
 echo "</table>";

}
if($status=="admin"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update user set Identity='Admin' where id='$id'";
	$res = mysqli_query($connect,$query); 
}
if($status=="normal"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update user set Identity='Normal' where id='$id'";
	$res = mysqli_query($connect,$query); 
}
 ?>

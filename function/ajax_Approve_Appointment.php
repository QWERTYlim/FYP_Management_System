<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM  appointment WHERE teacher='". $_SESSION['TeacherName']."'" ;
$res = mysqli_query($connect,$query); 
echo "<table class='table table-striped table-bordered' style='width:80%;margin-left: auto;margin-right: auto;'>";

echo "<thead>";
	echo "<tr>";
	echo "<th style='border:2px solid black'>";echo"Student ID";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Student Name";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Room";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Time";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Date";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Status";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';;echo"Action";echo '&nbsp';"</th>";
	
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr style='border:2px solid black'>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["student_id"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["student_name"];echo "</td>";
	
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["room"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["time"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["date"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["approval"];echo "</td>";
	
	echo "<td style='border:2px solid black'>";echo '&nbsp';?>
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"];?>" value="Approve" onclick="seen(this.id)">
	

	<?php echo '&nbsp';"</td";
	echo"</tr>";
 }
 echo "</table>";

}

if($status=="seen"){
	$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$id=$_GET["id"];
	$query = "update appointment set approval='Approve' where id='$id'";
	$res = mysqli_query($connect,$query); 
}







 ?>

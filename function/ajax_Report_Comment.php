<?php include '../includes/db.connect.php';?>
<style>
<?php include '../css/table.css';?>
</style>

<?php
$status=$_GET["status"];
if($status=="disp")
{
$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$query = "SELECT * FROM  uploadreport WHERE sid='".$_SESSION['StudentID']."' ";
$res = mysqli_query($connect,$query); 
echo "<table class='table table-striped table-bordered' style='width:80%;margin-left: auto;margin-right: auto;'>";

echo "<thead>";
	echo "<tr>";
	echo "<th style='border:2px solid black'>";echo"Title";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"File Name";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Comment";echo '&nbsp';"</th>";
	echo "<th style='border:2px solid black'>";echo '&nbsp';echo"Date";echo '&nbsp';"</th>";
  
	
	echo"</tr>";
echo "</thead>";

while($row=mysqli_fetch_array($res)){
	echo "<tr style='border:2px solid black'>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["filetitle"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["name"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["comment"];echo "</td>";
	echo "<td style='border:2px solid black'>";echo '&nbsp';echo $row["date"];echo "</td>";
	
	
	
	echo"</tr>";
 }
 echo "</table>";

}









 ?>

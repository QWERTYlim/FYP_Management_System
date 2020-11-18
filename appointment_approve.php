<?php
	include 'includes/db.connect.php'
	
?>

<!DOCTYPE html>
<html>

<head>
	<title>Appointment Approve</title>
</head>
<a href='index.php'>Home</a>
<body>
<h3>Pending Approvement</h3>
<?php
$query = "SELECT * FROM appointment";
$data = mysqli_query($connect,$query);
$total = mysqli_num_rows($data);

if($total!=0){
		while($result=mysqli_fetch_assoc($data)){
			echo "
			<tr>
			<th>ID:&nbsp".$result['id']."&nbsp</th>
			<th>Faculty:&nbsp".$result['faculty']."&nbsp</th>
			<th>Date:&nbsp".$result['date']."&nbsp</th>
			<th>Time:&nbsp".$result['time']."&nbsp</th>
			<th>Room:&nbsp".$result['room']."&nbsp</th>
			<th>Teacher:&nbsp	".$result['teacher']."</th>
			<th><a href='delete.php?id=$result[id]'>Decline</a></th>
		   <br>
		   <br>
		</tr>
		";
		}
}

?>
</body>

</html>

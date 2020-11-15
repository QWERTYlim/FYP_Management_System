<?php
	include 'includes/db.connect.php'
	
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
<h3>display</h3>
<?php
$query = "SELECT * FROM appointment";
$data = mysqli_query($connect,$query);
$total = mysqli_num_rows($data);

if($total!=0){
		while($result=mysqli_fetch_assoc($data)){
			echo "
			<tr>
			<tr>ID:&nbsp".$result['id']."&nbsp</tr>
			<tr>Faculty:&nbsp".$result['faculty']."&nbsp</tr>
			<tr>Date:&nbsp".$result['date']."&nbsp</tr>
			<tr>Time:&nbsp".$result['time']."&nbsp</tr>
			<tr>Room:&nbsp".$result['room']."&nbsp</tr>
			<tr>Teacher:&nbsp	".$result['teacher']."</tr>
			
			<tr><a href='delete.php?id=$result[id]'>Decline</a></tr>
		
		   <br>
		   <br>
		</tr>
		";
		}
}

?>
</body>

</html>

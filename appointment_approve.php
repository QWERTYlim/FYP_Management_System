<?php
	include 'includes/db.connect.php'
	
?>

<!DOCTYPE html>
<html>

<head>
<title>Appointment Approve</title>
<style type="text/css">
        table
        {
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
            height: 30px;
        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 100px;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }
    </style>
</head>
<a href='index.php'>Home</a>
<body>
<h3>Pending Approvement</h3>
<table>
<tr>
	<th>ID</th>
	<th>Faculty</th>
	<th>Date</th>
	<th>Time</th>
	<th>Room</th>
	<th>Teacher</th>
	<th>Accept/Decline</th>
</tr>
<?php
$query = "SELECT * FROM appointment";
$data = mysqli_query($connect,$query);
$total = mysqli_num_rows($data);

if($total!=0){
		while($result=mysqli_fetch_assoc($data)){
			echo "
			<tr>
			<th>&nbsp".$result['id']."</th>
			<th>&nbsp".$result['faculty']."</th>
			<th>&nbsp".$result['date']."</th>
			<th>&nbsp".$result['time']."</th>
			<th>&nbsp".$result['room']."</th>
			<th>&nbsp	".$result['teacher']."</th>
			<th><a href='delete.php?id=$result[id]'>Decline</a></th>
		   <br>
		   <br>
		</tr>
		";
		}
}
else{
	echo "0 result";
}

?>
</table>
</body>

</html>

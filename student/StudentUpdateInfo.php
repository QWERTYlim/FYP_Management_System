<?php include '../includes/db.connect.php'?>

<?php
$query = "SELECT * FROM studentinfo";
$res = mysqli_query($connect,$query); 

?>

<!DOCTYPE html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


<html>

<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/text_field.css">
	<button class="blue"><a href="StudentHome.php" class="blue">Home</a></button>
</head>




<body>

	<form name="StudentInfo" action="../function/add_StudentInfo.php" method="POST">
		<p>Welcome <?php echo $_SESSION['studentName'];?>,Please update your Student Info</p> 
		
		<p></p>
        <div style="width:100%;">
            <p for="Email">EMAIL</p>
            <input id="Email" name="Email" autofocus>
        </div>
        <div style="width:100%;">
            <p for="PhoneNumber">PHONE</p>
            <input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="123-4556678" pattern="[0-9]{3}-[0-9]{7}" required >
		</div>
		
		<div style= "width:100%; height: 220px;">

		</div>

		<p>
			<button id="StudentInfo_btn" name="StudentInfo_btn">
				<a>CONTINUE</a>
			</button>
		</p>
		

        <a>CopyRight &#169; 2020 by Junwendd</a>
    </form>

	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/text_field.js"></script>
</body>

</html>

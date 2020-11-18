<!DOCTYPE html>
<html>
<head>
	<title>Menu</title> 
	<style type="text/css">
		button {
    color: #444444;
    background: #F3F3F3;
    border: 1px #DADADA solid;
    padding: 5px 10px;
    border-radius: 2px;
    font-weight: bold;
    font-size: 9pt;
    outline: none;
}

button:hover {
    border: 1px #C6C6C6 solid;
    box-shadow: 1px 1px 1px #EAEAEA;
    color: #333333;
    background: #F7F7F7;
}

button:active {
    box-shadow: inset 1px 1px 1px #DFDFDF;   
}

button.blue {
    color: white;
    background: #4C8FFB;
    border: 1px #3079ED solid;
    box-shadow: inset 0 1px 0 #80B0FB;
}

button.blue:hover {
    border: 1px #2F5BB7 solid;
    box-shadow: 0 1px 1px #EAEAEA, inset 0 1px 0 #5A94F1;
    background: #3F83F1;
}

button.blue:active {
    box-shadow: inset 0 2px 5px #2370FE;   
}
	</style>   
</head>
<body>

<button class='blue'><a href='appointment.php' style="color: white;text-decoration: none;">Make Appointment</a></button>
<br>
<br>
<button class='blue'><a href='appointment_approve.php' style="color: white;text-decoration: none;">Approve</a></button>
<br>
<br>
<button class='blue'><a href='weekly_timeslot.php' style="color: white;text-decoration: none;">Weekly Timeslot</a></button>
</body>
</html>
disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","../function/ajax_Approve_Appointment.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	 function decline(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","../function/ajax_Approve_Appointment.php?id="+id+"&status=decline",false);
		 xmlhttp.send(null);
		 disp_data();
	 }
	 function seen(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","../function/ajax_Approve_Appointment.php?id="+id+"&status=seen",false);
		 xmlhttp.send(null);
		 disp_data();
	 }

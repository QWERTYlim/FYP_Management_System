disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","../function/ajax_show_Appointment.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	

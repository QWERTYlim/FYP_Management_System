disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","../function/ajax_student_rejected.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	 function decline(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","../function/ajax_student_rejected.php?id="+id+"&status=decline",false);
		 xmlhttp.send(null);
		 disp_data();
	 }
	 function approve(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","../function/ajax_student_rejected.php?id="+id+"&status=approve",false);
		 xmlhttp.send(null);
		 disp_data();
	 }

disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","function/ajax_studentinfo.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	 function update(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","function/ajax_studentinfo.php?id="+id+"&status=update",false);
		 xmlhttp.send(null);
		 disp_data();
	 }

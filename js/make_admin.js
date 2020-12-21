disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","function/ajax_make_admin.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	 function admin(id)
	 {
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","function/ajax_make_admin.php?id="+id+"&status=admin",false);
		xmlhttp.send(null);
		disp_data();
	 }
	 function normal(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","function/ajax_make_admin.php?id="+id+"&status=normal",false);
		 xmlhttp.send(null);
		 disp_data();
	 }

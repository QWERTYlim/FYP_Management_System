 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
  
 </body>
 <div id="disp_data"></div>

 <script type="text/javascript">
 	disp_data()
 	function disp_data()
 	{
 		var xmlhttp=new XMLHttpRequest();
 		xmlhttp.open("GET","update.php?status=disp",false);
 		xmlhttp.send(null);
 		document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
 	}
	 function delete1(id)
	 {
		 var xmlhttp=new XMLHttpRequest();
		 xmlhttp.open("GET","update.php?id="+id+"&status=delete",false);
		 xmlhttp.send(null);
		 disp_data();
	 }
 </script>
 </html>
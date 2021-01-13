
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../function/ajax_delReference.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});


// function delete1(id)
// {
	
	
// 	$.ajax({
		
// 		url:"../function/ajax_delReference.php?id="+id+"&status=delete",
// 		method:"get",
// 		data:{id:id},
// 		success:function(data)
// 			{
				
// 				console.log(id);	
// 				$('#result').html(data);
// 			}
// 	});
	
//     var xmlhttp=new XMLHttpRequest();
//     xmlhttp.open("GET","../function/ajax_delReference.php?id="+id+"&status=delete",false);
//     xmlhttp.send(null);
// }
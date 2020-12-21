disp_data()
function disp_data()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","function/ajax_showUpload.php?status=disp",false);
    xmlhttp.send(null);
    document.getElementById("disp_data").innerHTML=xmlhttp.responseText; 
}
function delete1(id)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","function//ajax_showUpload.php?id="+id+"&status=delete",false);
    xmlhttp.send(null);
    disp_data();
}

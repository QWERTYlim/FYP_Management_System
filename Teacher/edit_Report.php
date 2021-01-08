<?php include '../includes/db.connect.php'?>

<!DOCTYPE html>
<html>

<head>
	<title>Student Report </title>
	<link rel="stylesheet" type="text/css" href="../css/blue.button.css">
	
</head>




<body>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM uploadreport WHERE id='$id'" ;
$result1 = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result1))
{
    $title = $row[2];
    $comment = $row[6];
    $file = $row[3];

}	
?>
	
<form method="Post" enctype="multipart/form-data" action="../function/teacher_edit_comment.php?id=<?php echo $id; ?>">

<p1> <p1>
    <br>
    <br>
    <label>Title：<?php echo $title;?></label>
    <br>
    <br>
    <label>File Upload：<?php echo $file;?></label>
    <br>
    <label>Comment:</label>
    <br>
    <textarea cols="45" rows="5" name="message" >
    <?php echo $comment?>
    </textarea>
    
    <input type="submit" name="submit"value="submit">
 
 
</form>
</body>

</html>

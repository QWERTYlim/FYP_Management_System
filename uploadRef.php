
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data" action="function/uploadFunction.php">
<?php
session_start();
?>
<p1> <?php echo $_SESSION['StudentID'];?><p1>
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
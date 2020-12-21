<?php include 'includes/db.connect.php'?>
<?php include 'function/show.appointment.option.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="Post" enctype="multipart/form-data" action="function/uploadReport.php">
<?php
session_start();
?>
<p1> <?php echo $_SESSION['StudentID'];?><p1>
    <br>
    <br>
    <label>Title：</label>
    <input type="text" name="title">
    <br>
    <br>
    <label>File Upload：</label>
    <input type="File" name="file" >
    <br>
    <br>
    <label class="col-md-4 control-label" for="teacher">Teacher :</label>
		<select id="teacher" name="teacher" class="form-control" style="width: 150px;">
			<?php echo $options3;?>
		</select>
        <br>
        <br>
    <textarea cols="45" rows="5" name="message" disabled></textarea>
    <br>
    <br>
    <input type="submit" name="submit"value="submit">
 
 
</form>
 
</body>
</html>
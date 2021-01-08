<?php include '../includes/db.connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>

<?php
if($_SESSION['TeacherID']=='0')
{
    echo "<script type='text/javascript'>alert('Please Request teacher first!');
    window.location='requestForm.php';
    </script>";
}
?>

<html>
<head>
    <title>File Upload</title>
    
    <link rel="stylesheet" type="text/css" href="../css/blue.button.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/text_field.css">
    <link rel="stylesheet" type="text/css" href="../css/uploadRef.css">

    <button class="blue"><a href="StudentHome.php" class="blue">Home</a></button>   
</head>
<body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
textarea {
   resize: none;
}
</style>
<form method="Post" enctype="multipart/form-data" action="../function/upload_RecordMeeting.php">

<p1> <?php echo $_SESSION['StudentID']; echo "&nbsp"; echo $_SESSION['studentName'];?><p1>
    <br>
    <br>
    
   
    
    <p>Issues identified in previous meeting:</p>
    <textarea cols="35" rows="3" name="message" ></textarea>
    <br>
    <br>
    <p>Feedback received in previous meeting:</p>
    <textarea cols="35" rows="3" name="message1" ></textarea>
    <br>
    <br>
    <p>Action taken on feedback</p>
    <textarea cols="35" rows="3" name="message2" ></textarea>
    <br>
    <br>
    <p>Matters to discuss:</p>
    <textarea cols="35" rows="3" name="message3" ></textarea>
    <br>
    <br>
    
    <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <div class="form-inline">
            <div class="form-group">
                <input type="file"  name="myfile" id="myfile" multiple>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" name="submit"value="submit">Upload files</button>
        </div>
    </form>
    
</form>
 
</body>
</html>
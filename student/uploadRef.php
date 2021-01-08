


<?php include '../includes/db.connect.php';?>

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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/uploadRef.css">
    <link rel="stylesheet" type="text/css" href="../css/blue.button.css">
    <button class="blue"><a href="StudentHome.php" class="blue">Home</a></button>
</head>
<body>






<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div style="width:100%; height:50px;"></div>
<form action="../function/uploadFunction.php" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading" ><strong>Upload Files</strong>
    <div class="panel-body">

        <!-- Standar Form -->
        <h4>Welcome <?php echo $_SESSION['TeacherID'];?>,Please upload your file And Write a title</h4>
        <h4>Please write your title: </h4>
        <input type="text" name="title">
        <h4>Select files from your computer</h4>
        <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <div class="form-inline">
            <div class="form-group">
            <input type="file"  name="myfile" id="myfile" multiple>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" name="save" id="save">Upload files</button>
        </div>
        </form>

        <!-- Drop Zone -->
        <h4>Or drag and drop files below</h4>
        <div class="upload-drop-zone" id="drop-zone">
        Just drag and drop files here
        </div>

        <!-- Progress Bar -->
        <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
            <span class="sr-only">100% Complete</span>
        </div>
        </div>

        <!-- Upload Finished -->
        <div class="js-upload-finished">
        <h3>Processed files</h3>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
            <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>
        </div>
        </div>
    </div>
    </div>
</div> <!-- /container -->
</form>
<script type="text/javascript" src="js/uploadRef.js"></script>
</body>
</html>
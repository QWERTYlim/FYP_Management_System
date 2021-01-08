<?php include '../function/show.appointment.option.php'?>
<!DOCTYPE html>
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


<?php
$query = "SELECT * FROM teacher WHERE facultyid='". $_SESSION['FacultyID']."'" ;
$result1 = mysqli_query($connect, $query);
$options3 = "";
while($row2 = mysqli_fetch_array($result1))
{
    $options3 = $options3."<option>$row2[3]</option>";
}?>


<div style="width:100%; height:50px;"></div>
<form method="post" enctype="multipart/form-data" action="../function/uploadRequest.php">
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading"><strong>Upload Files</strong>
    <div class="panel-body">

        <!-- Standar Form -->
        <h4>Welcome <?php echo $_SESSION['StudentID'];?>,Please upload your file And Write a title</h4>
        <h4>Please write your title: </h4>
        <input type="text" name="myfile">
        <h4>Select files from your computer</h4>
        <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
        <div class="form-inline">
            <div class="form-group">
            <input type="file"  name="file" id="file" multiple>
            </div>
            <button type="submit" class="btn btn-sm btn-primary" name="submit"value="submit">Upload</button>
        </div>
        <h4 for="teacher">Teacher :</h4>
		<select id="teacher" name="teacher" class="form-control" style="width: 150px; height:30px;">
			<?php echo $options3;?>
		</select>
        <br>
        <br>
        <textarea cols="45" rows="5" name="message" ></textarea>
        </form>
    </div>
    </div>
    </div>
</div> <!-- /container -->
</form>
<script type="text/javascript" src="js/uploadRef.js"></script>

</body>
</html>
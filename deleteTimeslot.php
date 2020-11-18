<html>
<link rel="stylesheet" type="text/css" href="css/blue.button.css">
    <head></head>

    <body>
    <?php
    include 'includes/db.connect.php';
    error_reporting(0);
    $id=$_GET['id'];
    $query="DELETE FROM timeslot WHERE id='$id'";
    $data=mysqli_query($connect,$query);

    if($data){
        echo"cancel the request";
    }

    ?>
    <br>
    <br>
    <button class="blue"><a href="Index.php">Home</a></button>
    </body>
</html>
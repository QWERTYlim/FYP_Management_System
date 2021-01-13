<?php include '../includes/db.connect.php'?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Room</title>
    <button class="blue"><a href="admin_home.php" class="blue">Home</a></button>   
</head>
<body>
<style>
textarea {
   resize: none;
}
</style>
<form method="Post" enctype="multipart/form-data" action="../function/insert_room.php">


    <br>
    <br>
    
   
    
    <p>Room Name</p>
    <input type="text" name="room" >
    <br>
    <br>
   
   
   
    
    
    <input type="submit" name="submit"value="submit">
 
 
</form>
 
</body>
</html>
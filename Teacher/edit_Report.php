<?php include '../includes/db.connect.php'?>

<!DOCTYPE html>
<html>

<head>
	<title>Student Report </title>
    <link rel="stylesheet" type="text/css" href="../css/blue.button.css">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
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
    <div class="rateyo" id= "rating"
         				data-rateyo-rating="4"
        				 data-rateyo-num-stars="5"
         				data-rateyo-score="3">
     </div>
     <div>
    
    <span class='result'>Rating:0</span>
    <input type="hidden" name="rating">
</br>
    <input type="submit" name="submit"value="submit">
 
 
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>

</html>
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('Rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
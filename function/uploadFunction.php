<?php
	include '../includes/db.connect.php'
?>
<?php
// connect to database


$sql = "SELECT * FROM uploadref";
$result = mysqli_query($connect, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
   
    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO uploadref (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($connect, $sql)) {
                echo'<script> alert("File was upload")</script>';
            echo'<script>window.location="../uploadRef.php"</script>';

            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files



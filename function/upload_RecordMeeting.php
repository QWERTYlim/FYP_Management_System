<?php
	include '../includes/db.connect.php'
?>
<?php
// connect to database


$sql = "SELECT * FROM recordmeeting";
$result = mysqli_query($connect, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../record_upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $sid =$_SESSION['StudentID'];
    $message=$_POST['message'];
    $message1=$_POST['message1'];
    $message2=$_POST['message2'];
    $message3=$_POST['message3'];
    $dates=$_POST['dates'];
$teacher=$_SESSION['TeacherID'];
    if (!in_array($extension, ['zip', 'pdf', 'docx','rar'])) {
        echo "You file extension must be .zip,.rar, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO recordmeeting (sid,file,size,issues,feedback,actionfeedback,matters,teacherName,date) VALUES ('$sid','$filename', $size,'$message','$message1','$message2','$message3','$teacher','$dates')";
            if (mysqli_query($connect, $sql)) {
                echo'<script> alert("File was upload")</script>';
            echo'<script>window.location="../student/StudentHome.php"</script>';

            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM recordmeeting WHERE id=$id";
    $result = mysqli_query($connect, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'record_upload/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('record_upload/' . $file['name']));
        readfile('record_upload/' . $file['name']);

        // Now update downloads count
      
    }

}

<?php
	include '../includes/db.connect.php'
?>
<?php
// connect to database


$sql = "SELECT * FROM formrequest";
$result = mysqli_query($connect, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../request_upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $sid =$_SESSION['StudentID'];
    $teacher=$_POST['teacher'];
    $message=$_POST['message'];
    $title=$_POST['title'];
    

    if (!in_array($extension, ['zip', 'pdf', 'docx','rar'])) {
        echo "You file extension must be .zip,.rar, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO formrequest (sid,file, size,teacher,comment,Title) VALUES ('$sid','$filename', $size,'$teacher','$message','$title')";

            if (mysqli_query($connect, $sql)) {
                $sid =$_SESSION['StudentID'];
                $_SESSION['TeacherID']='1';
                $query = "update studentdetail set TeacherID='1' where StudentID='$sid'";
                $res = mysqli_query($connect,$query); 
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
    $sql = "SELECT * FROM formrequest WHERE id=$id";
    $result = mysqli_query($connect, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'request_upload/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('request_upload/' . $file['name']));
        readfile('request_upload/' . $file['name']);

        // Now update downloads count
      
    }

}
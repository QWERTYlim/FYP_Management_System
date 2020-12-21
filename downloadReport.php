<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<?php
$files=scandir("report_upload");

for($a=2;$a<count($files);$a++){
    ?>
    <a download="<?php echo $files[$a] ?>" href="report_upload/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
    <?php
}
?>
 
</body>
</html>
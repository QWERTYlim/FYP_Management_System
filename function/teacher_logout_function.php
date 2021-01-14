<?php
session_start();
session_unset();
header("Location:../teacher/login.php");
?>
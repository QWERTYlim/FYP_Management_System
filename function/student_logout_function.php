<?php
session_start();
session_unset();
header("Location:../student/login.php");
?>
<?php
session_start();
unset($_SESSION["StudentID"]);
unset($_SESSION["Password"]);
header("Location:../login.php");
?>
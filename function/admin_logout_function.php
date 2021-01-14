<?php
session_start();
session_unset();
header("Location:../admin/admin_login.php");
?>
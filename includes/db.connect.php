<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tests";

$connect = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

?>
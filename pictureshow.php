<?php
session_start();
include("dbconnectlogin.php");
$id = $_GET['username'];
$query = "SELECT namefile, typefile, size, picture FROM database_student WHERE username = '$id'";
$result = mysqli_query($conn, $query) or die('Error, query failed');
list($namefile, $type, $size, $content) = mysqli_fetch_array($result);


header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$namefile");
echo $content;

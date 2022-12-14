<?php

include('dbconnectlogin.php');



$fileName = $_FILES['userfile']['name'];
$fileSize = $_FILES['userfile']['size'];
$fileTemp = $_FILES['userfile']['tmp_name'];
$fileType = $_FILES['userfile']['type'];
$username = $_POST['userid'];
$password = $_POST['pass'];


$file = fopen($fileTemp, "r");
$photouser = fread($file, filesize($fileTemp));
$photouser = addslashes($photouser);
fclose($file);

$fileName = addslashes($fileName);
$location = "images/$fileName";
move_uploaded_file($fileTemp, $location);
$query = "INSERT INTO database_student (username,password,namefile,typefile,size,picture) VALUES ('$username','$password','$fileName','$fileType','$fileSize','$photouser')";
mysqli_query($conn, $query);

<?php

session_start();
include('dbconnectlogin.php');
$userid = $_POST["userid"];
$pass = $_POST["pass"];

$regex = '/[A-Z]/';
if (!preg_match($regex, $pass)) {
    echo " must contain at least one capital letter";
} else {
    header("Location: login.php");

    if ($_GET['mod'] == 'login') {
        $Q = mysqli_query($conn, "SELECT * FROM database_student WHERE username='$userid' AND password='$pass'");
        $r = mysqli_fetch_array($Q);
        //check data
        if (mysqli_num_rows($Q)) {
            $_SESSION['username'] = $r['username'];
            $_SESSION['pass'] = $r['pass'];
            header('location:success.php');
        } else {
            header('location:loginwrong.php');
        }
    }
    // if regex }

}

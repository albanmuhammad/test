<?php
include("dbconnectlogin.php");
// require("pictureshow.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: youmustlogin.php");
}
$id = $_SESSION['username'];
$datas = mysqli_query($conn, "SELECT * FROM database_student where username ='$id'");
foreach ($datas as $row) {

?>

    <table border="1">
        <td><?= $id ?> </td>
        <td> <a href=pictureshow.php?username=<?= $id ?>> Download </a> </td>
        <td> <a href="./images/<?= $row['namefile'] ?>" download>Download link </a> </td>
        <td> <img src=' pictureshow.php?username=<?= $id ?>' width='200' height='150' border='0' /></td>
        <td><img src="./images/<?= $row['namefile'] ?>" width='200' height='150'></td>
    </table>
<?php
}

?>
<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
<a href="Logout.php"><input type="button" value="Log Out"></a>
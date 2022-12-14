<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$num_per_page = 05;
$start_from = ($page - 1) * 05;

$query = "select * from user limit $start_from,$num_per_page";
$result = mysqli_query($con, $query);

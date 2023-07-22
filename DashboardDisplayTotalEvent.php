<?php
include_once 'conn.php';
$sql = "SELECT Name, Date, Venue FROM event WHERE UserId = '$UserId' ";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
echo $count;
?>
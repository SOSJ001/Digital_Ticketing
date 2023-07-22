<?php
session_start();
include_once 'conn.php';

if (isset($_POST['qrCodeMessage'])) {

    $qrCode = mysqli_real_escape_string($con, $_POST['qrCodeMessage']);

    // hashing the password 
    // $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
    $sql = "SELECT * FROM ticket WHERE qrCode = '$qrCode'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    date_default_timezone_set("UTC");
    $date = date("y/m/d h:i:s a");
    $sql = "UPDATE ticket SET Time_in = '$date' WHERE qrCode = '$qrCode' ";
    $result = mysqli_query($con, $sql);
    echo json_encode($qrCode);
    exit;
}
?>
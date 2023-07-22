<?php
session_start();
include_once 'conn.php';

if (isset($_POST['qrCodeMessage'])) {

    $qrCode = mysqli_real_escape_string($con, $_POST['qrCodeMessage']);

    // hashing the password 
    // $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
    $sql = "UPDATE ticket SET status = 'PAID' WHERE qrCode = '$qrCode'";
    if(mysqli_query($con, $sql)){
        $msg = "Successfully verified";
    }
    echo json_encode($msg);
    exit;
}
?>
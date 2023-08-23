<?php
session_start();
include_once 'conn.php';

if (isset($_POST['qrCodeMessage'])) {

    $qrCode = mysqli_real_escape_string($con, $_POST['qrCodeMessage']);
    $queryString = parse_url($qrCode, PHP_URL_QUERY);// Get the query string from the URL
    parse_str($queryString, $variables); // Parse the query string and store variables in an array
    // Access the variables
    $qrCode = $variables['name'];
    $eventId = mysqli_real_escape_string($con, $_POST['ScanValue']);

    // hashing the password 
    // $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
    $sql = "SELECT * FROM ticket WHERE qrCode = '$qrCode' and eventId = '$eventId' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($count > 0) {
        $data['name'] = $row["GuestName"];
        $data['status'] = $row["status"];
        $data['time'] = $row["Time_in"];
        echo json_encode($data);
    }else{
        $data['name'] = null;
        $data['status'] = null;
        $data['time'] = null;
        echo json_encode($data);
    }

    
    exit;
}
?>
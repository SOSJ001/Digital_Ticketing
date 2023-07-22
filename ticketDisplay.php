<?php
session_start();
$UserId = $_SESSION['user']['id']; //getting the user id
include_once 'conn.php';

if (isset($_POST['ScanValue'])) {
    $eventId = mysqli_real_escape_string($con, $_POST['ScanValue']);

    // hashing the password 
    $sql = "SELECT * FROM event WHERE UserId = '$UserId'";
    $result = mysqli_query($con, $sql); //excuting the query

    while ($row = mysqli_fetch_assoc($result)) {
        $eId = $row["id"];
        $sqlSeat = "SELECT * FROM seat WHERE eventId = '$eId'";
        $result_sqlSeat = mysqli_query($con, $sqlSeat); //excuting the query
        $count = mysqli_num_rows($result_sqlSeat);
        $row_sqlSeat = mysqli_fetch_assoc($result_sqlSeat);

        $seatId = $row_sqlSeat["id"]; //getting the seat id
        $sqlSeat = "SELECT * FROM ticket WHERE SeatId = '$seatId'"; //tecket query
        $result1 = mysqli_query($con, $sqlSeat);
        while ($row1 = mysqli_fetch_assoc($result1)) { //getting the tickets details
            
        }
    }
    if ($count > 0) {
        $data['name'] = $row["GuestName"];
        $data['status'] = $row["status"];
        $data['date'] = $row["tranDate"];
        $data['time'] = $row["tranTime"];
        $data['eventName'] = $row["tranTime"]; ///event name goes here
        echo json_encode($data);
    } else {
        $data['name'] = null;
        $data['status'] = null;
        $data['time'] = null;
        echo json_encode($data);
    }


    exit;
}
?>
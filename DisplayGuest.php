<?php
session_start();
$UserId = $_SESSION['user']['id']; //getting the user id

include_once 'conn.php';

if (isset($_POST['ScanValueE'])) {

    $eventId = mysqli_real_escape_string($con, $_POST['ScanValueE']);

    // hashing the password 
    // $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
    $sql = "SELECT * FROM event WHERE UserId = '$UserId'";
    $result = mysqli_query($con, $sql); //excuting the query
    $scope = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $eId = $row["id"]; //id of the event
        $eName = $row["Name"]; //name of the event
        $sqlSeat = "SELECT * FROM seat WHERE eventId = '$eId'";
        $result_sqlSeat = mysqli_query($con, $sqlSeat); //excuting the query
        $count = mysqli_num_rows($result_sqlSeat);
        $row_sqlSeat = mysqli_fetch_assoc($result_sqlSeat);
        $seatId = $row_sqlSeat["id"];

        $sqlticket = "SELECT * FROM ticket WHERE SeatId = '$seatId'";
        $result1 = mysqli_query($con, $sqlticket);
        $countSeat = mysqli_num_rows($result1);
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $scope++;
            if ($countSeat > 0) {
                $dataEvent['id'] = $row1["id"];
                $dataEvent['scope'] = $scope;
                $dataEvent['name'] =  $row1["GuestName"];
                $dataEvent['status'] = $row1["status"];
                $dataEvent['date'] = $row1["tranDate"];
                $dataEvent['time'] = $row1["tranTime"];
                $dataEvent['eName'] = $eName;
                echo json_encode($dataEvent);
            } else {
                $dataEvent['id'] = null;
                $dataEvent['scope'] = null;
                $dataEvent['name'] =  null;
                $dataEvent['status'] = null;
                $dataEvent['date'] = null;
                $dataEvent['time'] = null;
                $dataEvent['eName'] = null;
                $sms = "not here";
                echo json_encode($sms);
            }
        }
    }
    exit;
}
?>
<?php session_start(); 
$UserId = $_SESSION['user']['id'];
include_once 'conn.php';

if (isset($_POST["addSeat"])) {
    $eventId =  mysqli_real_escape_string($con, $_POST['eventId']);
    $SeatArea =  strtoupper(mysqli_real_escape_string($con, $_POST['SeatArea']));
    $SeatDesc =  strtoupper(mysqli_real_escape_string($con, $_POST['SeatDesc']));
    $MaxSeat =  mysqli_real_escape_string($con, $_POST['MaxSeat']);
    $TicketPrice =  mysqli_real_escape_string($con, $_POST['TicketPrice']);
        
            // Insert into seat
            $insert = $con->query("INSERT into seat SET eventId = '$eventId', area ='$SeatArea',maxseat ='$MaxSeat' ,description = '$SeatDesc' ,ticketPrice = '$TicketPrice'");
            if ($insert) {
                header("location: dashboard.php");

            } else {
                $statusMsg = "File upload failed, please try again.";
            }
       
} else {
    $statusMsg = 'Please select a file to upload.';
    header("location: dashboard.php");
}
echo $statusMsg;
?>
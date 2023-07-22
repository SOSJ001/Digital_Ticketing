<?php
include_once 'conn.php';
$UserId = $_SESSION['user']['id'];
$selEvent = "SELECT * FROM event WHERE UserId = '$UserId'"; //getting event details
$result_selEvent = mysqli_query($con, $selEvent);
$countresult_selEvent = mysqli_num_rows($result_selEvent);
$maxSeat = 0;
while ($rowEvent = mysqli_fetch_assoc($result_selEvent)) {
    $event_EventId = $rowEvent["id"];
    
    $sql__seatToDisp = "SELECT * FROM seat WHERE eventId = '$event_EventId'"; //getting seat details
    $result_seatToDisp = mysqli_query($con, $sql__seatToDisp);// result
    while($row_seatToDisp = mysqli_fetch_assoc($result_seatToDisp)){ //getting the row
    $maxSeat += $row_seatToDisp["maxSeat"];
    }
}
if(isset($maxSeat)){
    echo $maxSeat;
}else{
    echo 0;
}
?>

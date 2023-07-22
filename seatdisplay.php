<?php
include_once 'conn.php';
$UserId = $_SESSION['user']['id'];
$selEvent = "SELECT * FROM event WHERE UserId = '$UserId'"; //getting event details
$result_selEvent = mysqli_query($con, $selEvent);
$countresult_selEvent = mysqli_num_rows($result_selEvent);
$maxSeat = 0;
$scope = 0;
while ($rowEvent = mysqli_fetch_assoc($result_selEvent)) {
    $event_EventId = $rowEvent["id"];
    

    $sql__seatToDisp = "SELECT * FROM seat WHERE eventId = '$event_EventId'"; //getting seat details
    $result_seatToDisp = mysqli_query($con, $sql__seatToDisp);// result
    while($row_seatToDisp = mysqli_fetch_assoc($result_seatToDisp)){ //getting the row
        $scope++;
        $event_EventName = $rowEvent["Name"];
        $seatId = $row_seatToDisp["id"];
        $seatArea = $row_seatToDisp["area"];
        $seatMax = $row_seatToDisp["maxSeat"];
        $seatDes = $row_seatToDisp["description"];
        $seatTicPrice = $row_seatToDisp["ticketPrice"];    
?> 
<tr class="text-start" id="<?php echo $seatId; ?>">
        <th scope="row"><?php echo $scope; ?></th>
        <td id="Name" data-target="Name"><?php echo $event_EventName; ?></td>
        <td id="area" data-target="area"><?php echo $seatArea; ?></td>
        <td id="maxSeat" data-target="maxSeat"><?php echo $seatMax; ?></td>
        <td id="description" data-target="description"><?php echo $seatDes; ?></td>
        <td id="ticketPrice" data-target="ticketPrice"><?php echo $seatTicPrice; ?></td>

        <th scope="col" class="d-flex">
            <!-- <a href="#" data-role="update" data-id="<?php echo $seatId; ?>" class="editbtn btn d-inline"> -->
                <span class="m-1" title="Edit Event"><i class="fa-regular fa-pen-to-square"></i></span>
            <!-- </a> -->
            <!-- <a href="#" data-role="delete" data-id="<?php echo $seatId; ?>" class="deletebtn btn d-inline"> -->
                <span class="m-1" title="Delete Event"><i class="fa-regular fa-trash-can"></i></span>
            <!-- </a> -->
        </th>
    </tr>
<?php

    }
     
}
?>
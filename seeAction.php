<?php 
header('Access-Control-Allow-Origin: *');
// $UserId = $_SESSION['user']['id'];
include_once('conn.php');

$name = mysqli_real_escape_string($con, $_POST['name']);

$sql_ticket = "SELECT * FROM ticket WHERE qrCode = '$name'"; //####################################
$result_ticket = mysqli_query($con, $sql_ticket); // getting * from the ticket
$row_ticket = mysqli_fetch_assoc($result_ticket); //####################################################

// selecting the event id from the database
$Event_id = $row_ticket["eventId"];
$GuestName = $row_ticket["GuestName"];


// using the event id
$sql_event = "SELECT * FROM event WHERE id = '$Event_id'"; //####################################
$result_event = mysqli_query($con, $sql_event); // getting * from the ticket
$row_event = mysqli_fetch_assoc($result_event); //####################################################

// selecting the image id from the database
$Image_id = $row_event["ImageId"];

//event name
$Event_name= $row_event["Name"];
$Event_date= $row_event["Date"];//event Date
$Event_venue= $row_event["Venue"];// Event Venue


// using the image id
$sql_image = "SELECT * FROM image WHERE id = '$Image_id'"; //####################################
$result_image = mysqli_query($con, $sql_image); // getting * from the ticket
$row_image = mysqli_fetch_assoc($result_image); //####################################################

// selecting the image Filename from the database
$Image_FileName = $row_image["FileName"];


// Return a response (optiozal)
$response['image'] = $Image_FileName;
$response['EventName'] = $Event_name;
$response['EventDate'] = $Event_date;
$response['EventVenue'] = $Event_venue;
$response['GuestName']= $GuestName;

echo json_encode($response);
?>
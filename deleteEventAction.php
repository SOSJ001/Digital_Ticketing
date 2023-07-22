<?php
session_start();
$UserId = $_SESSION['user']['id'];
include_once 'conn.php';
// $eventid = $_POST["eventid"];
// $targetDir = "uploads/";
// $fileName = basename($_FILES["image"]["name"]);
// $fileName1 = "uploads/" . $fileName;
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
echo $statusMsg = "";
if (isset($_POST["deleteEvent"])) {
    $eventid = mysqli_real_escape_string($con, $_POST['eventid']);
    // $Name =  mysqli_real_escape_string($con, $_POST['Name']);
    // $Date =  strtoupper(mysqli_real_escape_string($con, $_POST['Date']));
    // $Venue =  mysqli_real_escape_string($con, $_POST['Venue']);
    // $Audience =  mysqli_real_escape_string($con, $_POST['Audience']);
    $sql = "SELECT * FROM event where id = '$eventid'";
    if ($result = mysqli_query($con, $sql)) {

        if ($row = mysqli_fetch_assoc($result)) {
            $imageid = $row["ImageId"];
            $seatid = $row["SeatsId"];
            //DELEATING THE IMAGE FILE FROM THE STORAGE
            $sql5 = "SELECT * FROM image where id = '$imageid'";
            $result5 = mysqli_query($con, $sql5);
            $row5 = mysqli_fetch_assoc($result5);
            unlink($row5["FileName"]);
            //Deleting event from ticket
            $sql1 = "DELETE FROM ticket where eventId = '$eventid'";
            if (mysqli_query($con, $sql1)) {
                // deleting from event
                $sql2 = "DELETE FROM seat where eventId = '$eventid'";
                if (mysqli_query($con, $sql2)) {
                    // deleting from image
                    $sql3 = "DELETE FROM image where id = '$imageid'";
                    if (mysqli_query($con, $sql3)) {
                        // deleting from seat
                        $sql4 = "DELETE FROM event where id = '$eventid'";
                        if (mysqli_query($con, $sql4)) {
                            header("location: dashboard.php");
                        }
                    }
                }
            }

            // $row = mysqli_fetch_assoc($result);
            // $imageName= $row["FileName"];
            // $allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JEPG',);
            // $insert = $con->query("UPDATE image  SET FileName = '$fileName1' WHERE id = '$imageid'");
            // if ($insert) {
            //     unlink($imageName);
            //     if (in_array($fileType, $allowTypes)) {
            //         // Upload file to server
            //         if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            //             // Insert image file name into database
            //             $select = $con->query("UPDATE event SET Name= '$Name', Date = '$Date', Venue = '$Venue', Audience= '$Audience' where id = '$eventid'");
            //             if ($select) {
            //                 $statusMsg = "it's here";
            //                 header("location: dashboard.php");

            //                 // #############
            //             } else {
            //                 $statusMsg = "update event failed";
            //             }
            //         } else {
            //             $statusMsg = "Sorry, there was an error uploading your file.";
            //         }
            //     } else {
            //         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            //     }
            // } else {
            //     $statusMsg = "File upload failed, please try again.";
            // }
        } else {
            // echo "not seen image id";
            header("location: dashboard.php");
        }
    } else {
        $statusMsg = $eventid . " not able to execute the select all from event";
    }
} else {
    $statusMsg = 'Please select a file to upload.';
    // header("location: dashboard.php");
}
echo $statusMsg;
?>
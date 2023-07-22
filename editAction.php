<?php
$UserId = $_SESSION['user']['id'];
include_once 'conn.php';
// $eventid = $_POST["eventid"];
$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$fileName1 = mysqli_real_escape_string($con, "uploads/" . $fileName);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
echo $statusMsg = "";
if (isset($_POST["updateEvent"]) && !empty($_FILES["image"]["name"])) {
    $eventid = mysqli_real_escape_string($con, $_POST['eventid']);
    $Name =  mysqli_real_escape_string($con, $_POST['Name']);
    $Date =  strtoupper(mysqli_real_escape_string($con, $_POST['Date']));
    $Venue =  mysqli_real_escape_string($con, $_POST['Venue']);
    $Audience =  mysqli_real_escape_string($con, $_POST['Audience']);
    $sql = "SELECT * FROM event where id = '$eventid'";
    if ($result = mysqli_query($con, $sql)) {

        if ($row = mysqli_fetch_assoc($result)) {
            $imageid= $row["ImageId"];
            //GETTING THE OLD FILE NAME
            $sql1 = "SELECT FileName FROM image where id = '$imageid'";
            $result = mysqli_query($con, $sql1);
            $row = mysqli_fetch_assoc($result);
            $imageName= $row["FileName"];
            $allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JEPG',);
            $insert = $con->query("UPDATE image  SET FileName = '$fileName1' WHERE id = '$imageid'");
            if ($insert) {
                unlink($imageName);
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                        // Insert image file name into database
                        $select = $con->query("UPDATE event SET Name= '$Name', Date = '$Date', Venue = '$Venue', Audience= '$Audience' where id = '$eventid'");
                        if ($select) {
                            $statusMsg = "it's here";
                            header("location: dashboard.php");

                            // #############
                        } else {
                            $statusMsg = "update event failed";
                        }
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            echo "not seen image id";
        }
    } else {
        $statusMsg = $eventid . " not able to execute the select all from event";
    }
} else {
    $statusMsg = 'Please select a file to upload.';
    // header("location: dashboard.php");
}
echo $statusMsg;

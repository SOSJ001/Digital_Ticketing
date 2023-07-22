<?php session_start(); 
$UserId = $_SESSION['user']['id'];
include_once 'conn.php';
$targetDir = "uploads/";
$fileName = basename(mysqli_real_escape_string($con, $_FILES["image"]["name"]));
$fileName1 = mysqli_real_escape_string($con, "uploads/" . $fileName);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["add"]) && !empty($_FILES["image"]["name"])) {
    $Access = "";
    $Name =  mysqli_real_escape_string($con, $_POST['Name']);
    $Date =  strtoupper(mysqli_real_escape_string($con, $_POST['Date']));
    $Venue =  mysqli_real_escape_string($con, $_POST['Venue']);
    $Audience =  mysqli_real_escape_string($con, $_POST['Audience']);
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JEPG',);

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $con->query("INSERT into image (Filename, UserId) VALUES ('" . $fileName1 . "','" . $UserId . "')");
            if ($insert) {
                // $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                // ################################
                $select = $con->query("SELECT * FROM image WHERE FileName = '$fileName1' and UserId = '$UserId'");

                if ($select->num_rows > 0) {
                    while ($row = $select->fetch_assoc()) {
                        $imageid = $row["id"];
                    }
                    //#################################
                    // inserting into event table below
                    $sql = "INSERT INTO event SET Name = '$Name', Date = '$Date', Venue = '$Venue', Access = '$Access', UserId = '$UserId', Audience = '$Audience', ImageId = '$imageid' ";
                    if (mysqli_query($con, $sql)) {

                        $statusMsg = "event added successfully";
                        header("location: dashboard.php");
                    } else {
                        $statusMsg = "error adding event added successfully";
                    }

                    // #############
                }

                // ################################


            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
    header("location: dashboard.php");
}
echo $statusMsg;
?>
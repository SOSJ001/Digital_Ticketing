<?php
session_start();
$UserId = $_SESSION['user']['id'];
include_once('conn.php');
include('phpqrcode/qrlib.php');
// getting form details
$suc = mysqli_real_escape_string($con, $_POST['ScanValue2']);
$CustomerName = strtoupper(mysqli_real_escape_string($con, $_POST['F_Name']));
$ticket_EventId = strtoupper(mysqli_real_escape_string($con, $_POST['number'])); //getting the event id from the form
$ticket_seatId = strtoupper(mysqli_real_escape_string($con, $_POST['number1'])); //getting the seat id from the form
// #####################################

$sql_event = "SELECT * FROM event WHERE id = '$ticket_EventId'"; //####################################
$result_event = mysqli_query($con, $sql_event); // getting * from the event
$row_event = mysqli_fetch_assoc($result_event); //####################################################

// ######################################

// #####################################

// $sql_image = "SELECT * FROM image WHERE id = '$image_Id'";//####################################
// $result_image = mysqli_query($con, $sql_image);// getting * from the event
// $row_image = mysqli_fetch_assoc($result_image);//####################################################

// ######################################


// getting the count of tickets sold for this particular seat
$ticket_and_seat = "SELECT * FROM ticket WHERE eventId = '$ticket_EventId' and SeatId = '$ticket_seatId'";
$result_ticket_and_seat = mysqli_query($con, $ticket_and_seat);
$count_ticket_and_seat = mysqli_num_rows($result_ticket_and_seat);
$row_ticket_and_seat = mysqli_fetch_assoc($result_ticket_and_seat);

// getting seat description from seat
$seat = "SELECT * FROM seat WHERE id = '$ticket_seatId'";
$result_seat = mysqli_query($con, $seat);
$count_seat = mysqli_num_rows($result_seat);
$row_seat = mysqli_fetch_assoc($result_seat);
$var = uniqid();
// setting the qr image name
// $qrimage = $ticket_EventId . "-" . $CustomerName . "-" . $row_seat["area"] . "-" . $var . "-" . $ticket_seatId;
// header("loaction: dashboard.php");
// echo $qrimage;



###################################################
// selecting the invitation that you up loaded
$img_id = $row_event["ImageId"];
$user_id = $row_event["UserId"];
$select_image = "select * from image where  id='$img_id' and UserId = '$user_id'";
if ($result_select_image = mysqli_query($con, $select_image)) {
    $row_select_image = mysqli_fetch_assoc($result_select_image);
    //storing the invitation to a variable
    $invitation = $row_select_image["FileName"];
    $fileName1 = $CustomerName.'_'.uniqid() . '.png';
    ####################################
    // Set the data that you want to encode in the QR Code
    // $codeContents = 'https://sosseats.epizy.com/see.php?name='.$fileName1;

    $codeContents = 'http://localhost/php/ticket/icecream/see.php?name='.$fileName1;

    // Set the path to your logo image
    $logo = 'img/sosSeats copy.png';

    // Set the size of the QR Code
    $size = 10;

    // Generate the QR code
    $tempDir = "temp/";
    $fileName = uniqid() . '.png';
    $filePath = $tempDir . $fileName;
    QRcode::png($codeContents, $filePath, QR_ECLEVEL_L, $size);

    // Load the QR code image
    $qrCode = imagecreatefrompng($filePath);

    // Load the logo image
    $logoImage = imagecreatefrompng($logo);

    // Get the QR code and logo image dimensions
    $qrWidth = imagesx($qrCode);
    $qrHeight = imagesy($qrCode);
    $logoWidth = imagesx($logoImage);
    $logoHeight = imagesy($logoImage);

    // Calculate the position to place the logo in the center of the QR code
    $logoX = ($qrWidth - $logoWidth) / 2;
    $logoY = ($qrHeight - $logoHeight) / 2;

    // Create a transparent canvas with the same size as the QR code
    $canvas = imagecreatetruecolor($qrWidth, $qrHeight);
    $transparent = imagecolorallocatealpha($canvas, 0, 0, 0, 127);
    imagefill($canvas, 0, 0, $transparent);
    imagesavealpha($canvas, true);

    // Copy the QR code to the canvas
    imagecopy($canvas, $qrCode, 0, 0, 0, 0, $qrWidth, $qrHeight);

    // Merge the QR code and logo images on the canvas
    imagecopy($canvas, $logoImage, $logoX, $logoY, 0, 0, $logoWidth, $logoHeight);

    // Store the final QR code image
    $fileName = $fileName1;
    imagepng($canvas, $tempDir . $fileName);

    // Clean up the images
    imagedestroy($qrCode);
    imagedestroy($logoImage);
    imagedestroy($canvas);

    // Remove the temporary QR code file
    unlink($filePath);

    $temp = "insert into temp SET tempFile = '$tempDir.$fileName'";

    // ########## Reseizing the qrimage

    //inserting the qr code 
    if ($result_temp = mysqli_query($con, $temp)) {

        


        // displaying
        // echo '<img src="' . $invitation . '" /><br>';
        // echo '<img src="' . $tempDir . $fileName . '" />';

        // ########################################################################
        // dealing with the photo

        // list($width_qr, $height_qr) = getimagesize($tempDir . $fileName); //getting the qr width and height
        // $width_qr = $width_qr*3;
        // $height_qr = $height_qr*3;
        // list($width_bg, $height_bg) = getimagesize($invitation); //gettting the invitation width and height
        // echo "<br>width of qr = ".$width_qr."<br>";
        // echo "height of qr = ".$height_qr."<br>";
        // echo "width of bg = ".$width_bg."<br>";
        // echo "width of bg = ".$height_bg."<br>";

        // $diff_width = $width_bg - $width_qr;//differences in width
        // $diff_height = $height_bg - $height_qr;//difference in height
        $dest = imagecreatefromstring(file_get_contents($invitation)); //getting the invitation from server
        $src1 = imagecreatefromstring(file_get_contents($tempDir . $fileName));
        // #########################
        //$img = imagecreate(348, 30); // creating a blank canvas
        // ###############


        $src = imagescale($src1, 348, 348, IMG_NEAREST_NEIGHBOUR); //reseizing the  qr image
        // creating basic colours
        // $white = imagecolorallocate($img, 255, 255, 255);
        $black = imagecolorallocate($src, 0, 0, 0);
        // giving the rectangle a  colour
        //imagefilledrectangle($img, 0, 0, 500, 300, $white);
        // putting the text into the image###########
        imagestring($src, 5, 50, 0, $CustomerName, $black);
        $str_img = "str_image/" . $CustomerName . uniqid() . ".png";
        imagepng($src, $str_img); //saving  the string on the qr
        // ##############################
        $width_qr = imagesx($src);
        $height_qr = imagesy($src); //getting the width and height of the qr (src) in the memory
        list($width_bg, $height_bg) = getimagesize($invitation); //gettting the invitation width and height
        $diff_width = $width_bg - $width_qr; //differences in width
        $diff_height = $height_bg - $height_qr; //difference in height
        if (imagecopymerge($dest, $src, $diff_width - 30, $diff_height - 30, 0, 0, $width_qr, $height_qr, 100)) {
            $file = "qr_image/";
            // // Output and free from memory
            //header('Content-Disposition: Attachment; filename=' . $dest);
            //header('Content-Type: image/png');
            date_default_timezone_set("UTC");
            $date = date("y/m/d");
            $time = date("h:i:s");
            $sql_ticket = "INSERT INTO ticket SET eventId = '$ticket_EventId',qrCode = '$fileName',GuestName = '$CustomerName',SeatId='$ticket_seatId',tranDate ='$date',tranTime='$time',qrImage='$file$fileName'";
            if (mysqli_query($con, $sql_ticket)) {
                imagepng($dest, $file . $fileName, 9);
                imagedestroy($dest);
                imagedestroy($src);
                header("Content-Type: image/png");
                header("Content-Disposition: attachment;filename=" . $file . $fileName);
                if ($suc != null) {
                    $data2['downloadName'] = $fileName;
                    $data2['link'] = $file . $fileName;
                    echo json_encode($data2);
                }
                // echo file_get_contents($file . $fileName);
                // header("location: dashboard.php");
                // echo '<a href="dashboard.php"><br>GENERATE NEW<a>';
                // header("location: dashboard.php");
            }
        }
    }
}
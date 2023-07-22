<?php
include_once 'conn.php';
$UserId = $_SESSION['user']['id'];
$sql = "SELECT Name, Date, Venue, ImageId, id FROM event WHERE UserId = '$UserId' ";
$result = mysqli_query($con, $sql);
$scope = 0;
// selecting from the image
while ($row = mysqli_fetch_assoc($result)) {
    $scope++;
    $imageId = $row["ImageId"];
    $sqlimage = "SELECT * FROM image WHERE UserId = '$UserId' and id = '$imageId' ";
    $resultimage = mysqli_query($con, $sqlimage);
    $rowImage = mysqli_fetch_assoc($resultimage)
?>
    <tr class="text-start" id="<?php echo $row["id"]; ?>">
        <th scope="row"><?php echo $scope; ?></th>
        <td><a target="_blank" href="<?php echo $rowImage["FileName"]; ?>"><img class="img-fluid" src="<?php echo $rowImage["FileName"]; ?>" alt="" /></a></td>
        <td id="Name" data-target="Name"><?php echo $row["Name"]; ?></td>
        <td id="Date" data-target="Date"><?php echo $row["Date"]; ?></td>
        <td id="Venue" data-target="Venue"><?php echo $row["Venue"]; ?></td>

        <th scope="col" class="d-flex">
            <a href="#" data-role="update" data-id="<?php echo $row["id"]; ?>" class="editbtn btn d-inline">
                <span class="m-1" title="Edit Event"><i class="fa-regular fa-pen-to-square"></i></span>
            </a>
            <a href="#" data-role="delete" data-id="<?php echo $row["id"]; ?>" class="deletebtn btn d-inline">
                <span class="m-1" title="Delete Event"><i class="fa-regular fa-trash-can"></i></span>
            </a>
        </th>
    </tr>
<?php }
?>
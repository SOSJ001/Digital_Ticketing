<?php
session_start();
include_once 'conn.php';
// if (isset($_POST['ReadyLogin'])) {
// if (isset($_SESSION['user']['name']) && isset($_SESSION['user']['access'])) {
//     header("location: dashboard.php");
// }
$Email = mysqli_real_escape_string($con, $_POST['Email']);
$Pass = mysqli_real_escape_string($con, $_POST['Pass']);
// hashing the password 
// $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
$sql = "SELECT * FROM useraccount WHERE Email = '$Email' AND Password = '$Pass'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if ($count == 1 && $row['Email'] == $Email && $row['Password'] == $Pass) {
    $Username = $row['Username'];
    $Access = $row['Access'];
    $id = $row['id'];
    $_SESSION['user']['name'] = $Username;
    $_SESSION['user']['access'] = $Access;
    $_SESSION['user']['id'] = $id;
    // header("location: dashboard.php");
    if (isset($Username)) {
        $data['name'] = $Username;
        echo json_encode($data);
    } 
} else {
    // header("location: index.php");
    $data['name'] = "null";
    echo json_encode($data);
}

exit;
// }

?>
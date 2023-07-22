<?php
session_start();
if (isset($_SESSION['user']['name']) && isset($_SESSION['user']['access'])) {
    if(session_destroy()){
        header("location: index.php");
    }
}else{
    header("location: index.php");
}
exit();
?>

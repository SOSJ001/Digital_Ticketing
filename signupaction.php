<!-- <div class="modal fade" id="signupaction" data-bs-backdrop="static" tabindex="-1" aria-labelledby="signupaction" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">WELCOME </h1>
            </div>
            <div class="modal-body align-items-center justify-content-center">
                <div>
                    <h4>
                        Thank you. <br> Customer Satisfaction is our GOAL
                    </h4>
                </div>

            </div>
            <div class="modal-footer">
                    <button class="btn btn-dark text-lights" data-bs-target="#LoginModal" data-bs-toggle="modal" name="Signup">
                        LOGIN
                    </button>
            </div>
        </div>
    </div>
</div> -->
<?php
include_once 'conn.php';
session_start();
if (isset($_POST['ReadySignup'])) {
    if (isset($_SESSION['user']['name']) && isset($_SESSION['user']['access'])) {
        header("location: dashboard.php");
    }
    $Fname =  strtoupper(mysqli_real_escape_string($con, $_POST['Fname']));
    $Lname =  strtoupper(mysqli_real_escape_string($con, $_POST['Lname']));
    $Username =  mysqli_real_escape_string($con, $_POST['Username']);
    $Phone =  mysqli_real_escape_string($con, $_POST['Phone']);
    $Email =  mysqli_real_escape_string($con, $_POST['Email']);
    $Pass =  mysqli_real_escape_string($con, $_POST['Pass']);
    // hashing the password 
    // $Pass = password_hash(mysqli_real_escape_string($con, $_POST['Pass']), PASSWORD_ARGON2I);
    $sql = "INSERT INTO useraccount SET Fname = '$Fname', Lname = '$Lname', Username = '$Username', Phone = '$Phone', Email = '$Email', Password = '$Pass', Access = 'CUSTOMER' ";
    if (mysqli_query($con, $sql)) {
        $sql = "SELECT * FROM useraccount WHERE Email = '$Email' AND Password = '$Pass'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if ($count ==1 && $row['Email'] == $Email && $row['Password'] == $Pass) {
            echo "details correct";
            $Username = $row['Username'];
            $Access = $row['Access'];
            $id = $row['id'];
        
            $_SESSION['user']['name'] = $Username;
            $_SESSION['user']['access'] = $Access;
            $_SESSION['user']['id'] = $id;
            // if(isset($_SESSION['user']['name'] && )){}
            // echo ." ".," ".$_SESSION['user']['id'];
            header("location: dashboard.php");
            
        } else {
            // header("location: index.php");
            echo "error getting details from account";
        }
    } else {
        //header("location: dashboard.php");
        echo "error inserting";
    }
}

?>
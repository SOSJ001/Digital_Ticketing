<?php session_start();

if (empty($_SESSION['user']['name'])) {
    header("location: index.php");
    //echo "dashboad session empty";
}
;
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body class="index">
    <div class="blur disable" id="remove">
        
    
    <?php include 'navdashboard.php'; ?>
    <div class="container-fluid p-3">
        <?php
        include 'scanTicket.php'; //do not remove this scanticket.php from this position
        include 'guest.php';
        include 'scanPrepaid.php';
        include 'deleteevent.php'; ?>
        <?php include 'shareEvent.php';
        include 'qrDownload.php';
        include 'addSeat.php';
        include 'seat.php';

        ?>
        <?php include 'event.php'; ?>
        <?php include 'editevent.php'; ?>
        <?php include 'addevent.php'; ?>
        <?php include 'sidebar.php'; ?>
        <div class="sm:ml-64  align-items-center justify-content-center animate__animated animate__zoomIn">
            <!--Putting the item at the center of the page -->
            <hr class="text-light m-3 line">
            <div class="pb-1 mb-2 container rounded bg-secondary bg-opacity-50">
                <!-- First row -->
                <div class="row rounded row-col-2 row-col-md-1 has shadow bg-dark text-light p-3 my-3">
                    <!-- showing Scan and Guest -->
                    <div class="col col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0 border-warning">
                        <div class=" d-flex align-items-center">
                            <!-- <div class="d-flex"> -->
                            <div class="icon rounded-circle">
                                <!-- <button class="btn btn-light text-dark"> -->
                                <a href="#scanTicket.php" data-bs-target="#ScanModal" data-bs-toggle="modal"
                                    class="link-dark link-dark text-none btn btn-light text-dark m-3">
                                    <i class="fa-solid fa-camera-retro fa-3x"></i>
                                    <br><span class="fw-bold">SCAN</span>
                                </a>

                                <!-- </button> -->
                            </div>
                            <div class="m-3">
                                <!-- description of the ticket -->
                                <h4>SCAN <br> TICKETS</h4>
                            </div>
                            <!-- </div> -->
                            <div class="fs-1"><i class="fa-solid fa-qrcode"></i></div>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0 border-warning">
                        <div class=" d-flex align-items-center">
                            <div class="icon rounded-circle">
                                <!-- <button class="btn btn-light text-dark"> -->
                                <a href="#guest.php" data-bs-target="#guestModal" data-bs-toggle="modal"
                                    class="link-dark link-dark text-none btn btn-light text-dark m-3">
                                    <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                    <i class="fa-solid fa-users-gear fa-2x"></i>
                                    <br><span class="fw-bold">GUESTS</span>
                                </a>

                                <!-- </button> -->
                            </div>
                            <div class="m-3">
                                <h4>SEE <br> GUESTS</h4>
                            </div>
                            <i class="fa-solid fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
                <!-- second row -->
                <div class="row rounded row-col-2 row-col-md-1 has shadow bg-dark text-light p-3 my-3">
                    <!-- showing total events and seats -->
                    <div
                        class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 border border-warning border-top-0 border-end-0 border-bottom-0">
                        <div class=" d-flex align-items-center">
                            <div class="icon rounded-circle">
                                <!-- <button class="btn btn-light text-dark"> -->
                                <a href="#event.php" data-bs-target="#EventModal" data-bs-toggle="modal"
                                    class="link-dark link-dark text-none btn btn-light text-dark m-3">
                                    <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                    <i class="fa-solid fa-calendar-days fa-3x"></i>
                                    <br><span class="fw-bold">EVENTS</span>
                                </a>
                                <!-- </button> -->
                            </div>
                            <div class="m-3">
                                <!-- description of the ticket -->
                                <h4>TOTAL <br> EVENTS</h4>
                            </div>
                            <div class="fs-1"><strong>
                                    <?php include 'DashboardDisplayTotalEvent.php'; ?>
                                </strong></div>
                        </div>
                    </div>
                    <div
                        class="col col-lg-6 col-xl-6 col-md-6 col-sm-12 border border-warning border-top-0 border-end-0 border-bottom-0">
                        <div class=" d-flex align-items-center">
                            <div class="icon rounded-circle">
                                <a href="#addSeat.php" data-bs-target="#SeatModal" data-bs-toggle="modal"
                                    class="link-dark link-dark text-none btn btn-light text-dark m-3">
                                    <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                    <i class="fa-solid fa-chair fa-3x"></i>
                                    <br><span class="fw-bold">SEATS</span>
                                </a>
                            </div>
                            <div class="m-3">
                                <h4>TOTAL <br> SEATS</h4>
                            </div>
                            <div class="fs-1"><strong>
                                    <?php include 'DashboardDisplayTotalSeat.php'; ?>
                                </strong></div>
                        </div>
                    </div>
                </div>
                <!-- horizontal line in the page -->
                <hr class="text-light m-3">
                <?php
                $id = $_SESSION['user']['id']; //assigning user id to variable
                $sql = "SELECT * FROM event WHERE UserId = '$id'"; //getting event details
                $resultEvent = mysqli_query($con, $sql);
                $countEvent = mysqli_num_rows($result);
                while ($rowEvent = mysqli_fetch_assoc($resultEvent)) {
                    $event_EventId = $rowEvent["id"];
                    $sql__seat = "SELECT * FROM seat WHERE eventId = '$event_EventId'"; //getting seat details
                    $result_seat = mysqli_query($con, $sql__seat); // result
                    $count_seat = mysqli_num_rows($result_seat); //counting the row
                    $row_seat = mysqli_fetch_assoc($result_seat); //getting the row
                
                    // ##############################################################################
                
                    $sql_ticket_Dashboard = "SELECT * FROM ticket WHERE eventId = '$event_EventId'";
                    $result_ticket_Dashboard = mysqli_query($con, $sql_ticket_Dashboard); //////getting ticket details for display on the dashboad
                    $count_ticket_Dashboard = mysqli_num_rows($result_ticket_Dashboard);
                    $row_ticket_Dashboard = mysqli_fetch_assoc($result_ticket_Dashboard); ///////////////up///////////////////////
                
                    // #################################################################################
                    // ##############################################################################
                
                    $sql_ticketP_Dashboard = "SELECT * FROM ticket WHERE status = 'PAID' and eventId = '$event_EventId'";
                    $result_ticketP_Dashboard = mysqli_query($con, $sql_ticketP_Dashboard); //////getting PAIDticket details for display on the dashboad
                    $count_ticketP_Dashboard = mysqli_num_rows($result_ticketP_Dashboard);
                    $row_ticketP_Dashboard = mysqli_fetch_assoc($result_ticketP_Dashboard); ///////////////up///////////////////////
                
                    // #################################################################################
                    if ($count_seat < 1) {
                        // if no seats available for the event
                        ?>
                        <div title="Add Seat To Share Invite"
                            class="row rounded row-col-2 row-col-md-1 row-col-sm-1 has shadow bg-dark border border-light text-light p-3 my-3">
                            <!-- sharing tickets row -->
                            <div
                                class="col d-flex align-items-center justify-content-between col-md-6 col-sm-12 border-warning border border-top-0 border-end-0 border-bottom-0">
                                <div class=" d-flex align-items-center">
                                    <div class="icon rounded-circle">
                                        <!-- sell button -->
                                        <button disabled data-id="<?php echo $rowEvent["id"]; ?>"
                                            data-name="EVENT: <?php echo $rowEvent["Name"]; ?>"
                                            data-cmd="<?php echo $row_seat["id"]; ?>"
                                            class="share1 link-dark text-none btn btn-light text-dark m-3"
                                            data-bs-target="#ShareEventModal" data-bs-toggle="modal" role="button"><i
                                                class="fa-solid fa-share-from-square fa-3x"></i>
                                            <br><span class="fs-6 fw-bold">Share Invite</span>
                                        </button>
                                    </div>
                                    <div class="m-3">
                                        <h4>
                                            EVENT:
                                            <?php echo $rowEvent["Name"] ?>
                                        </h4>
                                        <small class="text-muted fs-6">
                                            <?php if (isset($row_seat["area"])) {
                                                echo $row_seat["area"];
                                            } else {
                                                ?>
                                                <small title="PAY TO GET SEATS">
                                                    <?php echo "Add Seat to Enable";
                                            } ?>
                                            </small>
                                            <br>
                                             Cost : NLe 
                                            <?php if (isset($row_seat["ticketPrice"])) {
                                                echo $row_seat["ticketPrice"];
                                            } else { ?>
                                                    <?php echo "0";
                                            } ?>
                                        </small>
                                    </div>
                                </div>
                                <div>
                                    <div class="hidden-sm-down text-muted">Last Sent Ticket:
                                        <?php if (isset($count_ticket_Dashboard)) {
                                            echo $count_ticket_Dashboard;
                                        } else {
                                            echo "0";
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col d-flex align-items-center justify-content-center col-md-6 col-sm-12 border border-warning border-top-0 border-end-0 border-bottom-0">
                                <div class=" d-flex align-items-center">
                                    <div class="m-">
                                        <div class="hidden-sm-down text-muted"><i class="fa-solid fa-chair"></i>Total Seats :
                                            <?php if (isset($row_seat["maxSeat"])) {
                                                echo $row_seat["maxSeat"];
                                            } else {
                                                echo "0";
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="m-3">
                                        <div class="hidden-sm-down text-muted"><i class="fa-solid fa-check-double"></i>Total
                                            Verified : 0</div>
                                    </div>
                                    <div class="m-3">
                                        <div class="hidden-sm-down text-muted"><i class="fa-regular fa-note-sticky"></i>Total
                                            Remaining :
                                            <?php if (isset($row_seat["maxSeat"])) {
                                                echo $row_seat["maxSeat"] - $count_ticket_Dashboard;
                                            } else {
                                                echo "0";
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        // if seats is available for the event
                        ?>
                        <div
                            class="row rounded row-col-2 row-col-md-1 row-col-sm-1 has shadow bg-dark border border-light text-light p-3 my-3">
                            <!-- sharing tickets row -->
                            <div
                                class="col d-flex align-items-center justify-content-between col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0">
                                <div class=" d-flex align-items-center">
                                    <div class="icon rounded-circle">
                                        <!-- sell button -->
                                        <button title="Share Invite" data-id="<?php echo $rowEvent["id"]; ?>"
                                            data-name="EVENT: <?php echo $rowEvent["Name"]; ?>"
                                            data-cmd="<?php echo $row_seat["id"]; ?>"
                                            class="share1 link-dark text-none btn btn-light text-dark m-3"
                                            data-bs-target="#ShareEventModal" data-bs-toggle="modal" role="button"><i
                                                class="fa-solid fa-share-from-square fa-3x"></i>
                                            <br><span class="fs-6 fw-bold">Share Invite</span>
                                        </button>
                                    </div>
                                    <div class="m-3">
                                        <h4>
                                            EVENT:
                                            <?php echo $rowEvent["Name"] ?>

                                        </h4>
                                        <small class="text-muted fs-6">
                                            Area :
                                            <?php if (isset($row_seat["area"])) {
                                                echo $row_seat["area"];
                                            } else {
                                                ?>
                                                class="text-muted fs-6" title="PAY TO GET SEATS">
                                                <?php echo "Add Seat";
                                            } ?>

                                            <br>Cost : NLe
                                            <?php if (isset($row_seat["ticketPrice"])) {
                                                echo $row_seat["ticketPrice"];
                                            } else { ?>
                                                <?php echo "0";
                                            } ?>
                                        </small>

                                    </div>
                                </div>
                                <div>
                                    <div class="hidden-sm-down text-muted">Last Sent Ticket:
                                        <?php if (isset($count_ticket_Dashboard)) {
                                            echo $count_ticket_Dashboard;
                                        } else {
                                            echo "0";
                                        } ?>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col d-flex align-items-center justify-content-center col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0">
                                <div class=" d-flex align-items-center">
                                    <div class="m-">
                                        <div class="hidden-sm-down text-muted"><i class="fa-solid fa-chair"></i>Total Seats :
                                            <!-- ########################################################## -->
                                            <?php if (isset($row_seat["maxSeat"])) {
                                                echo $row_seat["maxSeat"];
                                            } else {
                                                echo "0";
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="m-3">
                                        <div class="hidden-sm-down text-muted"><i class="fa-solid fa-check-double"></i>Total
                                            Verified :
                                            <?php if (isset($count_ticketP_Dashboard)) {
                                                echo $count_ticketP_Dashboard;
                                            } else {
                                                echo "0";
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="m-3">
                                        <div class="hidden-sm-down text-muted"><i class="fa-regular fa-note-sticky"></i>Total
                                            Remaining :
                                            <?php if (isset($row_seat["maxSeat"])) {
                                                echo $row_seat["maxSeat"] - $count_ticket_Dashboard;
                                            } else {
                                                echo "0";
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                } ?>
                <!-- ##################################### -->
                <!-- <div class="row rounded row-col-2 row-col-md-1 row-col-sm-1 has shadow bg-dark border border-light text-light p-3 my-3">
                    
                    <div class="col d-flex align-items-center justify-content-between col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0">
                        <div class=" d-flex align-items-center">
                            <div class="icon rounded-circle">
                                <a href="#" class="link-dark text-none btn btn-light text-dark m-3" role="button"><i class="fa-solid fa-share-from-square fa-3x"></i>
                                    <br><span class="fs-6 fw-bold">Share</span>
                                </a>
                            </div>
                            <div class="m-3">
                                <h4>$Area@$price</h4><small class="text-muted">Area Description</small>
                            </div>
                        </div>
                        <div>
                            <div class="hidden-sm-down text-muted">Last Sold Ticket: VP - 3</div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center col-md-6 col-sm-12 border border-top-0 border-end-0 border-bottom-0">
                        <div class=" d-flex align-items-center">
                            <div class="m-">
                                <div class="hidden-sm-down text-muted"><i class="fa-solid fa-chair"></i>Total Seats : $100</div>
                            </div>
                            <div class="m-3">
                                <div class="hidden-sm-down text-muted"><i class="fa-solid fa-check-double"></i>Total Verified : 0</div>
                            </div>
                            <div class="m-3">
                                <div class="hidden-sm-down text-muted"><i class="fa-regular fa-note-sticky"></i>Total Remaining : 0</div>
                            </div>
                        </div>
                    </div>
                </div>  -->
                <!-- ######################################################## -->
            </div>
            <?php include 'footer.php'; ?>
        </div>

    </div>
    </div>
    <?php include 'spinner.php'; ?>
    <?php include 'script.php'; ?>
    
</body>


</html>
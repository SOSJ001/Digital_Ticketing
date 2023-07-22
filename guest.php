<div class="modal fade modal-lg" id="guestModal" role="dialog">
    <!-- Event pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">GUESTS</h1>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light">
                <section class="table">
                    <div class="container-fluid">
                        <div class="card text-center">
                            <div class="card-header align-items-center d-flex">

                                <a href="#scanPrepaid.php" data-bs-target="#ScanPrepaidModal" data-bs-toggle="modal"
                                    title="Scan Paid Tickets..." class="btn btn-dark">
                                    <i class="fa-solid fa-plus fa-2x"></i>
                                    <br><i class="fw-bold">Add Prepaid</i>
                                </a>
                                <h6 class="mx-2">
                                    SHOW
                                    <select class="text-center ScanValueE" id="ScanValueE" required name="eventId">
                                        <option class="text-center" selected value="">All</option>
                                        <!-- fetching the event that were created by the user -->
                                        <?php include_once 'conn.php';
                                        $UserId = $_SESSION['user']['id']; //getting the user id
                                        
                                        $sql = "SELECT * FROM event WHERE UserId = '$UserId'";
                                        $result = mysqli_query($con, $sql); //excuting the query
                                        
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $eId = $row["id"];
                                            $sqlSeat = "SELECT * FROM seat WHERE eventId = '$eId'";
                                            $result_sqlSeat = mysqli_query($con, $sqlSeat); //excuting the query
                                            $count = mysqli_num_rows($result_sqlSeat);
                                            $row_sqlSeat = mysqli_fetch_assoc($result_sqlSeat);
                                            echo "<option class='fw-bold text-center' value=" . $row_sqlSeat["eventId"] . ">" . $row["Name"] . "</option>"; //showing all the events that you have created seats for
                                        }
                                        ?>
                                    </select>
                                    GUESTS
                                </h6>
                            </div>
                            <div class="card-body overflow-auto">
                                <table
                                    class=" table table-resopnsive table-bordered fs-6 table-striped justify-content-center ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Guest Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Event Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM event WHERE UserId = '$UserId'";
                                        $result = mysqli_query($con, $sql); //excuting the query
                                        $scope = 0;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $eId = $row["id"]; //id of the event
                                            $eName = $row["Name"]; //name of the event
                                            $sqlSeat = "SELECT * FROM seat WHERE eventId = '$eId'";
                                            $result_sqlSeat = mysqli_query($con, $sqlSeat); //excuting the query
                                            $count = mysqli_num_rows($result_sqlSeat);
                                            $row_sqlSeat = mysqli_fetch_assoc($result_sqlSeat);
                                            if (isset($row_sqlSeat)) {
                                                $seatId = $row_sqlSeat["id"];
                                                // echo $seatId;
                                                $sqlSeat = "SELECT * FROM ticket WHERE SeatId = '$seatId'";
                                                $result1 = mysqli_query($con, $sqlSeat);
                                                // selecting from the image
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    $scope++;
                                                    ?>
                                                    <tr class="text-start" id="<?php echo $row1["id"]; ?>">
                                                        <th scope="row">
                                                            <?php echo $scope; ?>
                                                        </th>
                                                        <td>
                                                            <?php echo $row1["GuestName"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row1["status"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row1["tranDate"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row1["tranTime"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $eName; ?>
                                                        </td>

                                                        <th scope="col" class="d-flex" disabled>
                                                            <a href="#" class="editbtn btn d-inline">
                                                                <span class="m-1" title="Edit Event"><i
                                                                        class="fa-regular fa-pen-to-square"></i></span>
                                                            </a>
                                                            <a href="#" class="deletebtn btn d-inline">
                                                                <span class="m-1" title="Delete Event"><i
                                                                        class="fa-regular fa-trash-can"></i></span>
                                                            </a>
                                                        </th>
                                                    </tr>
                                                <?php }

                                            }

                                        }
                                        ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <div class="modal-footer justify-content-center">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
            </div>
        </div>
    </div>
</div>
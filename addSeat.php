<div class="modal fade border border-warning" id="AddSeatModal" data-bs-backdrop="static" aria-hidden="true"
    aria-labelledby="AddSeatModal" tabindex="-1">
    <!-- sign up pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">ADD SEAT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                </button>
            </div>
            <div class="modal-body bg-dark text-light">
                <!-- form -->
                <form action="addSeataction.php" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row mb-2">
                            <label for="" class="form-label col-12">EVENT NAME</label>
                            <select class="form-select" required name="eventId">
                                <option disabled selected value="">Select Event Name</option>
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
                                    if ($count < 1) {
                                        echo "<option class='fw-bold text-center' value=" . $row["id"] . ">" . $row["Name"] . "</option>";
                                    }
                                } ?>
                            </select>
                            <!-- <input type="text" class="form-control col-12" placeholder="MICHAEL" name="Name" required> -->
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-12">SEAT-AREA</label>
                            <input type="text" class="form-control col-12" placeholder="" name="SeatArea" required>
                            <small class="text-muted col-12">(e.g. FIRST CLASS / VIP / NORMAL)</small>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-12">SEAT-DESCRIPTION</label>
                            <input type="text" class="form-control col-12" placeholder="" name="SeatDesc" required>
                            <small class="text-muted col-12">(e.g. VERY IMPORTANT PERSONALITY)</small>
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-12">MAX-SEATS</label>
                            <input type="number" min="1" class="form-control col-12" placeholder="" name="MaxSeat"
                                required>
                            <small class="text-muted col-12">(Total Number Of People You Are Expecting)</small>
                        </div>
                        <div class="row my-2">
                            <label for="" class="form-label col-12">TICKET-PRICE</label>
                            <input type="number" min="0" class="form-control col-12" placeholder="" name="TicketPrice"
                                required>
                            <small class="text-muted col-12">(If Not For Sale Enter 0)</small>
                        </div>
                        <div class="row my-3">
                            <input type="submit" class="btn form-control col-4 bg-warning text-2xl text-dark fw-bold"
                                value="ADD" name="addSeat">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <button class="btn btn-dark text-light" title="Go to seats" data-bs-target="#SeatModal"
                    data-bs-toggle="modal"><i class="fa-solid fa-circle-left fa-2x"></i></button>
            </div>
        </div>
    </div>
</div>
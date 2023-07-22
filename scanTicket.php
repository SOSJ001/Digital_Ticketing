<script src="popper/html5-qrcode.min_.js"></script>
<div class="modal fade modal-lg" id="ScanModal" data-bs-backdrop="static" role="dialog">
    <!-- Event pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">SCAN TICKET</h1>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light overflow-auto">
                <div class="row gy-3 row-cols-1 row-cols-md-1 row-cols-sm-1">
                    <div class=" P-3 col col-md-6 col-sm-12">
                        <!-- <h4>SCAN RESULT</h4> -->
                        <form action="" id="panda">
                            <select class="form-select" id="ScanValue" required name="eventId">
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
                                    $row_sqlSeat = mysqli_fetch_assoc($result_sqlSeat);
                                    echo "<option class='fw-bold text-center' value=" . $row_sqlSeat["eventId"] . ">" . $row["Name"] . "</option>";

                                } ?>
                            </select>
                            <label for="" class="fs-4" id="qrGuestName"><span>Guest Name:</span></label>
                            <input id="result" type="text" placeholder="Guest Name Here" readonly
                                class="mb-3 mt-1 form-control">
                            <input type="text" hidden id="qrCode" class="my-3 form-control">
                            <!-- display qr code -->
                        </form>
                        <div>
                            <span class="fs-4">STATUS: </span>
                            <!-- <span id="name1"></span> -->
                            <span id="status1"></span>
                            <!-- <span id="time1"></span> -->
                        </div>
                        <div>
                            <span class="fs-4">SEAT-AREA: </span>
                            <!-- <span id="name1"></span> -->
                            <span id="area"></span>
                            <!-- <span id="time1"></span> -->
                        </div>
                    </div>

                    <div class="col col-md-6 col-sm-12 ">
                        <div style="width:100%;" id="reader"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    function onScanSuccess(qrCodeMessage) { // on scan success
                        //alert the select values
                        document.getElementById('qrCode').value = qrCodeMessage;
                        var ScanValue = document.getElementById('ScanValue').value; //event id
                        var ScanValue1 = document.getElementById('ScanValue'); //event id
                        //alert(ScanValue+'ScanValue');
                        // document.forms[0].submit();
                        //alert(ScanValue)
                        if (ScanValue == "") {
                            // if the event is not selected
                            document.getElementById('status1').innerHTML =
                                "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-warning p-3 text-center'>Warning <i class='fa-solid fa-triangle-exclamation'></i> <br>Please select an EVENT</i></p>";
                        } else {
                            // if the event is selected
                            $.ajax({
                                type: "POST",
                                url: "scanTicketAction.php",
                                data: {
                                    qrCodeMessage: qrCodeMessage,
                                    ScanValue: ScanValue
                                },
                                cache: false,
                                success: function (data) {
                                    // /document.getElementById('result').value = data;
                                    //alert(data);
                                    var name1 = JSON.parse(data).name;
                                    var status1 = JSON.parse(data).status;
                                    var time1 = JSON.parse(data).time;
                                    var SeatArea = JSON.parse(data).SeatArea;
                                    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                                    // checkinh if the guest exists in the database
                                    if (name1 == null) {
                                        document.getElementById('qrGuestName').innerHTML =
                                            "<span>Qr Message Is</span>";
                                        document.getElementById('result').value = qrCodeMessage;
                                    } else {
                                        document.getElementById('result').value = name1;
                                        document.getElementById('qrGuestName').innerHTML =
                                            "<span>Guest Name:</span>";
                                    }
                                    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                                    if (status1 == "PAID" && time1 != null) { //if paid and already entered
                                        document.getElementById('area').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-danger border rounded p-3 text-center'> " +
                                            SeatArea + "</p>";
                                        document.getElementById('status1').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-4 text-dark fw-bold bg-danger rounded p-3 text-center'><i>Already Been Used And Verified By</i> " +
                                            name1 + " <i>At</i> <br>" + time1 +
                                            " !! <br> <small class='p-1 m-1 text-danger bg-dark'>PLEASE SHOW YOUR PASS TO PROCEED</small></p>";
                                    } else if (status1 == "PAID" && time1 == null) { //if paid and not entered
                                        document.getElementById('area').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                            SeatArea + "</p>";
                                        document.getElementById('status1').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-success p-3 text-center'><i class='fa-solid fa-check-double'></i> <br>Already Paid <br> Successfully Verified</p>";
                                        $.ajax({
                                            type: "POST",
                                            url: "insertScanTime.php",
                                            data: {
                                                qrCodeMessage: qrCodeMessage
                                            },
                                            cache: false,
                                            success: function (qrCode) {
                                                // document.getElementById('status1').innerHTML = "<p class='fs-5 text-dark fw-bold bg-success p-3 text-center'>Successfully Verified !!</p>";
                                                //alert('VERIFIED');

                                            },
                                            error: function (xhr, status, error) {
                                                console.error(xhr);
                                            }
                                        });
                                    } else if (status1 == "NOT PAID" && time1 ==
                                        null) { //if not paid and not entered
                                        document.getElementById('area').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                            SeatArea + "</p>";
                                        document.getElementById('status1').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-danger p-3 text-center'>NOT PAID !! <br> <i>Pay Now to Verify Ticket</i> <button class='verifyBtn animate__animated animate__shakeX animate__infinite animate__delay-2s animate__slow btn p-1 m-1 fw-bold fs-4 text-danger bg-dark'>Verify Payment</button></p>";
                                        // on click on the verify buutton above
                                        $(document).ready(function () {
                                            $(document).on('click', '.verifyBtn', function () {
                                                // alert('verified button clicked');                                            
                                                $.ajax({
                                                    url: "verifyScannedTicket.php",
                                                    type: "POST",
                                                    data: {
                                                        qrCodeMessage: qrCodeMessage
                                                    },
                                                    success: function (result) {
                                                        document.getElementById(
                                                            'area').innerHTML =
                                                            "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                                            SeatArea + "</p>";
                                                        document.getElementById(
                                                            'status1')
                                                            .innerHTML =
                                                            "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-success p-3 text-center'>Successfully Verified !!</p>";
                                                        //alert('successfully Verified'); 

                                                    }
                                                });

                                            })

                                        })
                                    } else {
                                        document.getElementById('status1').innerHTML =
                                            "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-danger p-3 text-center'><i class='fa-solid fa-xmark'></i><br>ERROR<br><i>GUEST NOT INVITED</i> !!</p>";
                                    }
                                    // alert("the name is " + name1 + " he has " + status1 + " Time entered " + time1);
                                },
                                error: function (xhr, status, error) {
                                    console.error(xhr);
                                }
                            });
                        }
                        ScanValue1.onclick = function () {
                            var ScanValue = document.getElementById('ScanValue').value; //event id
                            if (ScanValue != "") {
                                $.ajax({
                                    type: "POST",
                                    url: "scanTicketAction.php",
                                    data: {
                                        qrCodeMessage: qrCodeMessage,
                                        ScanValue: ScanValue
                                    },
                                    cache: false,
                                    success: function (data) {
                                        ScanValue = ""; //event id
                                        // /document.getElementById('result').value = data;
                                        //alert(data);
                                        var name1 = JSON.parse(data).name;
                                        var status1 = JSON.parse(data).status;
                                        var time1 = JSON.parse(data).time;
                                        // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                                        // checking if the guest exists in the database
                                        if (name1 == null) {
                                            document.getElementById('qrGuestName').innerHTML =
                                                "<span>Qr Message Is</span>";
                                            document.getElementById('result').value = qrCodeMessage;
                                        } else {
                                            document.getElementById('result').value = name1;
                                            document.getElementById('qrGuestName').innerHTML =
                                                "<span>Guest Name:</span>";
                                        }
                                        // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                                        if (status1 == "PAID" && time1 !=
                                            null) { //if paid and already entered
                                            document.getElementById('area').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                                SeatArea + "</p>";
                                            document.getElementById('status1').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-4 text-dark fw-bold bg-danger p-3 text-center'><i>Already Been Used And Verified By</i> " +
                                                name1 + " <i>At</i> <br>" + time1 +
                                                " !! <br> <small class='p-1 m-1 text-danger bg-dark'>PLEASE SHOW YOUR PASS TO PROCEED</small></p>";
                                        } else if (status1 == "PAID" && time1 ==
                                            null) { //if paid and not entered
                                            document.getElementById('area').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                                SeatArea + "</p>";
                                            document.getElementById('status1').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-success p-3 text-center'><i class='fa-solid fa-check-double'></i> <br>Already Paid <br> Successfully Verified</p>";
                                            $.ajax({
                                                type: "POST",
                                                url: "insertScanTime.php",
                                                data: {
                                                    qrCodeMessage: qrCodeMessage
                                                },
                                                cache: false,
                                                success: function (qrCode) {
                                                    // document.getElementById('status1').innerHTML = "<p class='fs-5 text-dark fw-bold bg-success p-3 text-center'>Successfully Verified !!</p>";
                                                    //alert('VERIFIED');

                                                },
                                                error: function (xhr, status, error) {
                                                    console.error(xhr);
                                                }
                                            });
                                        } else if (status1 == "NOT PAID" && time1 ==
                                            null) { //if not paid and not entered
                                            document.getElementById('area').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                                SeatArea + "</p>";
                                            document.getElementById('status1').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-danger p-3 text-center'>NOT PAID !! <br> <i>Pay Now to Verify Ticket</i> <button class='verifyBtn animate__animated animate__shakeX animate__infinite animate__delay-2s animate__slow btn p-1 m-1 fw-bold fs-4 text-danger bg-dark'>Verify Payment</button></p>";
                                            // on click on the verify buutton above
                                            $(document).ready(function () {
                                                $(document).on('click', '.verifyBtn', function () {
                                                    // alert('verified button clicked');                                            
                                                    $.ajax({
                                                        url: "verifyScannedTicket.php",
                                                        type: "POST",
                                                        data: {
                                                            qrCodeMessage: qrCodeMessage
                                                        },
                                                        success: function (result) {
                                                            document
                                                                .getElementById(
                                                                    'area')
                                                                .innerHTML =
                                                                "<p class='animate__animated animate__zoomInDown fs-4 text-light fw-bold bg-dark border-success border rounded p-3 text-center'> " +
                                                                SeatArea +
                                                                "</p>";
                                                            document
                                                                .getElementById(
                                                                    'status1')
                                                                .innerHTML =
                                                                "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-success p-3 text-center'>Successfully Verified !!</p>";
                                                            //alert('successfully Verified'); 

                                                        }
                                                    });

                                                })

                                            })
                                        } else {
                                            document.getElementById('status1').innerHTML =
                                                "<p class='animate__animated animate__zoomInDown fs-5 text-dark fw-bold bg-danger p-3 text-center'><i class='fa-solid fa-xmark'></i><br>ERROR<br><i>GUEST NOT INVITED</i> !!</p>";
                                        }
                                        // alert("the name is " + name1 + " he has " + status1 + " Time entered " + time1);
                                    },
                                    error: function (xhr, status, error) {
                                        console.error(xhr);
                                    }
                                });
                            }
                        }







                        // $(document).ready(function () {

                        /*
                         * 'post_receiver.php' - where you will be passing the form data
                         * $(this).serialize() - for reading form data quickly
                         * function(data){... - data includes the response from post_receiver.php
                         */

                        //     $.ajax({
                        //         type: 'POST',
                        //         url: 'scanTicketAction.php',
                        //         data: $(this).serialize()
                        //     })
                        //         .done(function (data) {
                        //             // demonstrate the response
                        //             $('#response').html(data);
                        //         })
                        //         .fail(function () {
                        //             // if posting your form failed
                        //             alert("Posting failed.");
                        //         });
                        // });

                        // alert('working');
                        // var xmlhttp = new XMLHttpRequest();
                        // xmlhttp.onreadystatechange = function () {
                        //     if (this.readyState == 4 && this.status == 200) {
                        //         document.getElementById("txtHint").innerHTML = this.responseText;
                        //     }
                        // };
                        // xmlhttp.open("GET", "gethint.php?q=" + str, true);
                        // xmlhttp.send();

                    }

                    function onScanError(errorMessage) {
                        //handle scan error
                        // alert('Image Cannot be Scanned. Change Image.')
                    }
                    var html5QrcodeScanner = new Html5QrcodeScanner(
                        "reader", {
                        fps: 10,
                        qrbox: 250
                    });
                    html5QrcodeScanner.render(onScanSuccess, onScanError);
                </script>
            </div>
            <div class="modal-footer justify-content-center">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <!-- <button class="btn btn-dark text-light" data-bs-target="#AddEventModal" data-bs-toggle="modal">ADD EVENT</button> -->
            </div>
        </div>
    </div>
</div>
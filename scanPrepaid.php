<script src="popper/html5-qrcode.min_.js"></script>
<div class="modal fade modal-lg" id="ScanPrepaidModal" data-bs-backdrop="static" role="dialog">
    <!-- Event pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">UPDATE PREPAID TICKETS</h1>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light overflow-auto">
                <div class="row gy-3 row-cols-1 row-cols-md-1 row-cols-sm-1">
                    <div class=" P-3 col col-md-6 col-sm-12">
                        <!-- <h4>SCAN RESULT1</h4> -->
                        <form action="" id="panda">
                            <select class="form-select" id="ScanValue2" required name="eventId">
                                <option disabled selected value="">Select Event Name</option>
                                <!-- fetching the event that were created by the user -->
                                <?php include_once 'conn.php';
                                $UserId = $_SESSION['user']['id']; //getting the user id
                                
                                $sql = "SELECT * FROM event WHERE UserId = '$UserId'";
                                $result1 = mysqli_query($con, $sql); //excuting the query
                                
                                while ($row = mysqli_fetch_assoc($result1)) {
                                    $eId = $row["id"];
                                    $sqlSeat = "SELECT * FROM seat WHERE eventId = '$eId'";
                                    $result1_sqlSeat = mysqli_query($con, $sqlSeat); //excuting the query
                                    $count = mysqli_num_rows($result1_sqlSeat);
                                    $row_sqlSeat = mysqli_fetch_assoc($result1_sqlSeat);
                                    echo "<option class='fw-bold text-center' value=" . $row_sqlSeat["eventId"] . ">" . $row["Name"] . "</option>";

                                } ?>
                            </select>
                            <label for="" class="fs-4" id="qrGuestName1"><span>Guest Name:</span></label>
                            <input id="result1" type="text" placeholder="Guest Name Here" readonly
                                class="mb-3 mt-1 form-control">
                            <input type="text" hidden id="qrCode" class="my-3 form-control">

                        </form>
                        <div> <span class="fs-4">STATUS: </span>
                            <!-- <span id="name1"></span> -->
                            <span id="status2"></span>
                            <!-- <span id="time1"></span> -->

                        </div>
                    </div>

                    <div class="col col-md-6 col-sm-12 ">
                        <div style="width:100%;" id="reader2"></div>
                    </div>
                </div>
                <script type="text/javascript">
                    function onScanSuccess(qrCodeMessage) {// on scan success
                        //alert the select values
                        document.getElementById('qrCode').value = qrCodeMessage;
                        var ScanValue2 = document.getElementById('ScanValue2').value;//event id
                        var ScanValue1 = document.getElementById('ScanValue2');//event id
                        //alert(ScanValue2+'ScanValue2');
                        // document.forms[0].submit();
                        //alert(ScanValue2)
                        if (ScanValue2 == "") {
                            // if the event is not selected
                            document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-warning p-3 text-center'>Warning <i class='fa-solid fa-triangle-exclamation'></i> <br>Please select an EVENT</i></p>";
                        } else {
                            // if the event is selected
                            $.ajax({
                                type: "POST",
                                url: "scanPrepaidAction.php",
                                data: {
                                    qrCodeMessage: qrCodeMessage,
                                    ScanValue: ScanValue2
                                },
                                cache: false,
                                success: function (data) {
                                    // /document.getElementById('result1').value = data;
                                    //alert(data);
                                    var name1 = JSON.parse(data).name;
                                    var status = JSON.parse(data).status;
                                    var time1 = JSON.parse(data).time;
                                    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                                    // checking if the guest exists in the database
                                    if (name1 != null) {
                                        document.getElementById('result1').value = name1;
                                        document.getElementById('qrGuestName1').innerHTML = "<span>Guest Name:</span>";
                                        $.ajax({
                                            type: "POST",
                                            url: "insertPrepaid.php",
                                            data: {
                                                qrCodeMessage: qrCodeMessage,
                                            },
                                            cache: false,
                                            success: function (msg) {
                                                // /document.getElementById('result1').value = data;
                                                //alert(data);
                                                var name1 = JSON.parse(msg).name;
                                                var status = JSON.parse(msg).status;
                                                var time1 = JSON.parse(msg).time;
                                                // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                                                document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-success p-3 text-center'><i class='fa-solid fa-check-double'></i> <br> Successfully Updated</p>";
                                                //alert(msg);
                                            },
                                            error: function (xhr, status, error) {
                                                console.error(xhr);
                                            }
                                        });
                                    } else {
                                        document.getElementById('qrGuestName1').innerHTML = "<span>Qr Message Is</span>";
                                        document.getElementById('result1').value = qrCodeMessage;
                                        document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-warning p-3 text-center'>Warning <i class='fa-solid fa-triangle-exclamation'></i> <br>Invalid Qrcode</i></p>";
                                    }
                                    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                                    // if (status != null) {
                                    //     document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-success p-3 text-center'><i class='fa-solid fa-check-double'></i> <br> Successfully Updated</p>";

                                    // }

                                },
                                error: function (xhr, status, error) {
                                    console.error(xhr);
                                }
                            });
                        }
                        ScanValue1.onclick = function () {
                            var ScanValue2 = document.getElementById('ScanValue2').value;//event id
                            if (ScanValue2 != "") {
                                $.ajax({
                                    type: "POST",
                                    url: "scanPrepaidAction.php",
                                    data: {
                                        qrCodeMessage: qrCodeMessage,
                                        ScanValue: ScanValue2
                                    },
                                    cache: false,
                                    success: function (data) {
                                        ScanValue2 = "";//event id
                                        // /document.getElementById('result1').value = data;
                                        //alert(data);
                                        var name1 = JSON.parse(data).name;
                                        var status = JSON.parse(data).status;
                                        var time1 = JSON.parse(data).time;
                                        // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                                        // checking if the guest exists in the database
                                        if (name1 != null) {
                                            document.getElementById('result1').value = name1;
                                            document.getElementById('qrGuestName1').innerHTML = "<span>Guest Name:</span>";
                                            $.ajax({
                                                type: "POST",
                                                url: "insertPrepaid.php",
                                                data: {
                                                    qrCodeMessage: qrCodeMessage,
                                                },
                                                cache: false,
                                                success: function (msg) {
                                                    // /document.getElementById('result1').value = data;
                                                    //alert(data);
                                                    var name1 = JSON.parse(msg).name;
                                                    var status = JSON.parse(msg).status;
                                                    var time1 = JSON.parse(msg).time;
                                                    // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
                                                    document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-success p-3 text-center'><i class='fa-solid fa-check-double'></i> <br> Successfully Updated</p>";
                                                    alert(msg);
                                                },
                                                error: function (xhr, status, error) {
                                                    console.error(xhr);
                                                }
                                            });
                                        } else {
                                            document.getElementById('qrGuestName1').innerHTML = "<span>Qr Message Is</span>";
                                            document.getElementById('result1').value = qrCodeMessage;
                                            document.getElementById('status2').innerHTML = "<p class='animate__animated animate__zoomInDown fs-4 fw-bold text-dark bg-warning p-3 text-center'>Warning <i class='fa-solid fa-triangle-exclamation'></i> <br>Invalid Qrcode</i></p>";


                                        }
                                        // \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
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
                        "reader2", { fps: 10, qrbox: 250 });
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
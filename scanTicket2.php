<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>

<div class="modal fade modal-lg" id="ScanModal" data-bs-backdrop="static" role="dialog">
    <!-- Event pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">SCAN TICKET</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-light overflow-auto">
                <div class="row gy-3 row-cols-1 row-cols-md-1 row-cols-sm-1">

                    <div class="col col-md-6 col-sm-12 ">
                        <video style="width:100%;" id="preview"></video>
                    </div>
                    <div class="col col-md-6 col-sm-12" style="padding:0px;">
                        <!-- <h4>SCAN RESULT</h4> -->

                    </div>
                </div>
                <script>
                    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                    Instascan.Camera.getCameras().then(function (cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            alert('No cameras found');
                        }
                    }).catch(function (e) {

                        console.error(e);
                    });
                    scanner.addListener('scan', function (c) {
                        //document.getElementById('text').value = c;
                        //document.forms[0].submit();
                    });
                </script>

            </div>
            <div class="modal-footer justify-content-center">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <!-- <button class="btn btn-dark text-light" data-bs-target="#AddEventModal" data-bs-toggle="modal">ADD EVENT</button> -->
            </div>
        </div>
    </div>
</div>
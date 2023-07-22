
<div class="modal fade" id="qrdownload" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="qrdownload" tabindex="-1">
    <!-- sign up pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">PLEASE WAIT </h1><br>
                <small class=" m-2 d-block text-muted">loading......</small>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-light">
                <!-- sell ticket form -->
                <?php 
                
                echo '<img width="500" src="' . $file . $fileName . '" /><br>';?>
            </div>
            <div class="modal-footer justify-content-center">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <!-- <button class="btn btn-dark text-light" title="Go to events" data-bs-target="#EventModal" data-bs-toggle="modal"><i class="fa-solid fa-circle-left fa-2x"></i></button> -->
            </div>
        </div>
    </div>
</div>
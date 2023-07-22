<div class="modal fade border border-warning" id="ShareEventModal" data-bs-backdrop="static" aria-hidden="true"
    aria-labelledby="ShareEventModal" tabindex="-1">
    <!-- sign up pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">SELL TICKET </h1><br>
                <small class=" m-2 d-block text-muted">Enter Guest Detail</small>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light">
                <!-- sell ticket form -->
                <!-- <form action="#" method="POST"> -->
                <div class="container">
                    <div class="row mb-2">
                        <input type="text" readonly id="TicketEventName"
                            class=" bg-dark text-light fs-4 fw-bold text-center form-control col-8" disabled
                            name="EventName">
                    </div>
                    <!-- sending the event number -->
                    <input width="10" readonly class=" bg-dark text-dark border-0" id="TicketId" name="number" input>
                    <!-- <div class="row mb-2">
                            <label for="" class="form-label col-6">GUEST LAST NAME</label>
                            <input type="text" class="form-control col-8" placeholder="JOHNSON" name="L_Name" required>
                        </div> -->
                    <div class="row mb-2">
                        <label for="" class="form-label col-12">GUEST NAME <span id="guestName1"></span></label>
                        <input type="text" class="form-control col-12" placeholder="MICHAEL" id="GuestName"
                            name="F_Name" required>
                    </div>
                    <input width="10" readonly class=" bg-dark text-dark border-0" id="seatId" name="number1" input>
                    <!-- <div class="row mb-2">
                            <label for="" class="form-label col-6">GUEST CONTACT</label>
                            <input type="text" class="form-control col-8" placeholder="(OPTIONAL) 03481224" name="Contact" required>
                        </div> -->
                    <!-- <div class="row my-2"> -->
                    <!-- should show photo uploaded -->
                    <!-- <label for="formFile" class="form-label">INVITATION-PHOTO</label>
                            <input class="form-control" type="file" id="formFile" name="image" required>
                        </div> -->
                    <div class="row my-3">
                        <input type="button" class="btn form-control col-4 bg-warning text-dark text-2xl fw-bold GENERATEt"
                            value="GENERATE TICKET" name="generate">
                    </div>
                </div>

                <!-- </form> -->
            </div>
            <div class="modal-footer justify-content-center">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <!-- <button class="btn btn-dark text-light" title="Go to events" data-bs-target="#EventModal" data-bs-toggle="modal"><i class="fa-solid fa-circle-left fa-2x"></i></button> -->
            </div>
        </div>
    </div>
</div>
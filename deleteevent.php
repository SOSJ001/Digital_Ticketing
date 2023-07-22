<div class="modal fade" id="DeleteEventModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="DeleteEventModal" tabindex="-1"> -->
    <!-- sign up pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">DELETE EVENT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light">
                <!-- form -->
                <form action="deleteEventAction.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <input type="text" readonly class="form-control col-8 bg-dark text-dark border-0" name="eventid" required id="Delid">
                        </div>
                        <div class="row mb-2">
                            <span class="form-label col-12 fw-bold">DO YOU WANT TO DELETE </span>
                            <input type="text" class="form-control col-8 bg-dark text-light" name="Name" required id="DelName" readonly>
                        </div>
                        <!-- <div class="row mb-2">
                            <label for="" class="form-label col-4">EVENT-DATE</label>
                            <input type="text" class="form-control col-8" name="Date" required id="eDate">
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-4">EVENT-VENUE</label>
                            <input type="text" class="form-control col-8" name="Venue" required id="eVenue">
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-4">AUDIENCE</label>
                            <div class="col-12 form-control">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input bg-dark" type="radio" checked name="Audience" value="PRIVATE" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                PRIVATE
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input bg-dark" type="radio" name="Audience" value="PUBLIC" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                PUBLIC
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <label for="formFile" class="form-label">INVITATION-PHOTO</label>
                            <input class="form-control" type="file" id="formFile" name="image" required>
                        </div> -->
                        <div class="row d-flex justify-content-between my-3 g-3">
                            <span class="btn btn-dark text-success col-4 bg-light fw-bold" title="Go to events" data-bs-target="#EventModal" data-bs-toggle="modal">CANCEL</span>
                            <input type="submit" title="Delete Event" class="btn  col-4 bg-light text-danger fw-bold " value="DELETE" name="deleteEvent">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                    <P class="fs-5">Customer satisfaction is our GOAL!</P>
                    <button class="btn btn-dark text-light" title="Go to events" data-bs-target="#EventModal" data-bs-toggle="modal"><i class="fa-solid fa-circle-left fa-2x"></i></button>
               
            </div>
        </div>
    </div>
</div>
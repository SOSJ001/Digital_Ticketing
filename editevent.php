<div class="modal fade border border-warning" id="EditEventModal" data-bs-backdrop="static" aria-hidden="true"
    aria-labelledby="EditEventModal" tabindex="-1"> 
    <!-- sign up pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">EDIT EVENT</h1>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body bg-dark text-light">
                <!-- form -->
                <form action="editAction.php" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <input type="text" readonly class="form-control col-8 bg-dark text-dark border-0"
                                name="eventid" required id="eid">
                        </div>
                        <div class="row mb-2">
                            <label for="" class="form-label col-4">EVENT NAME</label>
                            <input type="text" class="form-control col-8" name="Name" required id="eName">
                        </div>
                        <div class="row mb-2">
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
                                            <input class="form-check-input bg-dark" type="radio" checked name="Audience"
                                                value="PRIVATE" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                PRIVATE
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input bg-dark" type="radio" name="Audience"
                                                value="PUBLIC" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                PUBLIC
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <label for="formFile" class="form-label">FLYER/POSTER</label>
                            <input
                                class="form-control border border-gray-300 bg-white py-2 px-4 rounded-lg shadow-sm hover:border-gray-400 focus:outline-none focus:border-blue-500"
                                type="file" id="formFile" name="image" required>
                        </div>
                        <div class="row my-3">
                            <input type="submit" class="btn form-control col-4 bg-warning text-2xl text-dark fw-bold "
                                value="UPDATE" name="updateEvent">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <button class="btn btn-dark text-light" title="Go to events" data-bs-target="#EventModal"
                    data-bs-toggle="modal"><i class="fa-solid fa-circle-left fa-2x"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-lg" id="EventModal" data-bs-backdrop="static" role="dialog">
    <!-- Event pop-up -->
    <div class="top modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light text-dark">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">EVENTS</h1>
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
                                <h4>
                                    <a href="#addevent.php" data-bs-target="#AddEventModal" data-bs-toggle="modal"
                                        title="Add event..." class="btn btn-dark">
                                        <i class="fa-solid fa-plus fa-2x"></i>
                                    </a>
                                    LIST OF EVENTS
                                </h4>
                            </div>
                            <div class="card-body overflow-auto">
                                <table
                                    class=" table table-resopnsive table-bordered fs-6 table-striped justify-content-center ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th width="60" scope="col">PHOTO</th>
                                            <th scope="col">Event Name</th>
                                            <th scope="col">DATE</th>
                                            <th scope="col">VENUE</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php include 'eventdisplay.php'; ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <div class="modal-footer justify-content-between">
                <P class="fs-5">Customer satisfaction is our GOAL!</P>
                <button class="btn btn-dark text-light" data-bs-target="#AddEventModal" data-bs-toggle="modal">ADD
                    EVENT</button>
            </div>
        </div>
    </div>
</div>
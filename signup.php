<?php include 'conn.php'; ?>
<?php //include 'signupaction.php'; ?>
<div id="SignUpModal" class="modal fade" role="dialog" aria-hidden="true" aria-labelledby="SignUpModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <button type="button" class="close position-absolute end-0 top-0 text-light" data-bs-dismiss="modal"
                    data-dismiss="modal">&times;</button>
                <div class="row g-0">
                    <!-- Welcome Text
                 ====================== -->
                    <!-- <div class="col-lg-5 bg-warning rounded-start">
                        <div class="row g-0 h-100">
                            <div class="col-10 col-lg-9 d-flex flex-column mx-auto">
                                <h3 class="title fs-1 text-dark mt-5 mb-4">Register</h3>
                                <p class="text-4 text-light lh-base mb-4">Enter your personal details and start journey
                                    with us.</p>
                                <div class="mt-auto mb-4"><img class="img-fluid" src="img/login-vector.png" alt="Oxyy">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Welcome Text End -->

                    <!-- Register Form
                  ====================== -->
                    <div class="text-light align-items-center bg-dark rounded">
                        <div class="container my-auto py-5">
                            <div class="row">
                                <div class="col-11 col-lg-10 mx-auto">
                                    <h3 class="title text-6xl text-warning text-center text-4 mb-4">Create an Account
                                    </h3>
                                    <div class="d-flex flex-column align-items-center mb-3">
                                        <ul class="d-flex social-icons">
                                            <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Log In with Facebook"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Log In with Twitter"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Log In with Google"><i
                                                        class="fab fa-google"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Log In with Linkedin"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center my-3">
                                        <hr class="flex-grow-1">
                                        <span class="mx-2 text-2 text-muted">Or create with</span>
                                        <hr class="flex-grow-1">
                                    </div>
                                    <form class="form-border row gx-5" method="post" action="signupaction.php">

                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-8">First Name</label>
                                                <input type="text" class="fs-4 p-3 rounded form-control col-8"
                                                    placeholder="MICHAEL" name="Fname" required>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-8">Last Name</label>
                                                <input type="text" class="rounded fs-4 p-3 form-control col-8"
                                                    placeholder="JOHNSON" name="Lname" required>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-8">User Name</label>
                                                <input type="text" class="rounded fs-4 p-3 form-control col-8"
                                                    placeholder="SOSJ001" name="Username" required>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-8">Phone</label>
                                                <input type="text" class="rounded fs-4 p-3 form-control col-8"
                                                    placeholder="+23234981224" name="Phone" require>

                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-8">Email</label>
                                                <input type="email" class="rounded fs-4 p-3 form-control col-8"
                                                    placeholder="michaelsosj@gmail.com" name="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="row">
                                                <label for="" class="form-label col-4">Password</label>
                                                <input type="password" class="rounded fs-4 p-3 form-control col-8"
                                                    placeholder="#########" name="Pass" required>
                                            </div>
                                        </div>
                                        <div class="form-check my-4 align-items-center">
                                            <input id="agree" name="agree" class="square-checkbox" type="checkbox">
                                            <label class="form-check-label text-2" for="agree">I agree to the <a
                                                    href="#" class="text-warning">Terms</a> and <a href="#"
                                                    class="text-warning">Privacy Policy</a>.</label>
                                        </div>
                                        <div class="row my-3">
                                            <input type="submit"
                                                class="fs-4 p-3 btn form-control col-4 bg-warning text-dark fw-bold"
                                                value="SIGN UP" name="ReadySignup">
                                        </div>
                                    </form>
                                    <p class="text-2 text-center mb-0">Already have an account?
                                        <a class="text-warning d-inline" data-bs-target="#LoginModal"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Log In
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Register Form End -->
                </div>
            </div>
        </div>
    </div>
</div>
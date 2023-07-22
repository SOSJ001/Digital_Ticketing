<?php
include_once('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <div class="blur disable" id="remove">

        <?php include 'login.php'; ?>
        <?php include 'signup.php'; ?>
        <!-- Navigation -->

        <nav class="w-full fs-4 py-3 sticky-top z-70 bg-dark text-light border-bottom border-color-light">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
                <a href="#" class="flex items-center">
                    <img src="img/sosSeats.png" class="h-20 mr-1" alt="S.O.S SEATS Logo" />
                </a>

                <div class="flex items-center md:order-2">
                    <a href="#login-modal" data-bs-target="#LoginModal" data-bs-toggle="modal"
                        class="text-white hover:bg-gray-500 rounded-lg px-2 py-2 mr-1">
                        <span>
                            <!-- <i class="fa-solid fa-right-to-bracket me-1"></i> -->
                            LOGIN
                        </span>
                    </a>
                    <a href="#SignUpModal" data-bs-target="#SignUpModal" data-bs-toggle="modal"
                        class="text-white bg-yellow-400 hover:bg-yellow-500  rounded-lg px-2 py-2 mr-1">
                        <span>
                            <!-- <i class="fa-solid fa-user-plus me-2"></i> -->
                            SIGNUP
                        </span>
                    </a>
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" data-drawer-show="logo-sidebar" data-drawer-body-scrolling="true"
                        type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- topnavbar start -->
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col font-medium md:flex-row md:space-x-8 md:mt-0">

                        <li class="nav-item  ">
                            <a href="index.php">SEE MORE EVENTS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- topnavbar end -->
        </nav>

        <!-- navigation -->
        <!-- sidebar slider -->
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-50 w-60 h-screen transition-transform -translate-x-full bg-dark lg:translate-x-0 xl:translate-x-0"
            aria-labelledby="drawer-body-scrolling-label">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-dark ">
                <ul class="space-y-2 font-medium">

                    <li>
                        <a href="index.php"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-yellow-500 hover:text-white">
                            <!-- <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg> -->
                            <span class="flex-1 ml-3 whitespace-nowrap">SEE <br>MORE <br>EVENTS</span>
                        </a>
                    </li>

                </ul>
            </div>
        </aside>
        <!-- sidebar slider end -->

        <div class="pt-4 flex justify-center items-center h-screen">
            <div class="row flex p-5">
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 mb-3">
                    <img class="h-auto max-w-full rounded-lg" id="img" src="" alt="">
                </div>
                <div class="col-12 p-3 col-md-6 col-lg-6 col-sm-12 border rounded d-flex justify-center items-center">
                    <!-- <div class="d-flex justify-content-center align-items-center"> -->
                        <div class="w-full">
                            <div class="row border-bottom border-top pt-4">
                                <p class="col-5 mb-2 text-white">Event Name:</p>
                                <p class="col-7 mb-2 text-white" id="EventName"></p>
                            </div>
                            <div class="row border-bottom pt-4">
                                <p class="col-5 mb-2 text-white">Guest Name:</p>
                                <p class="col-7 mb-2 text-white" id="GuestName"></p>
                            </div>
                            <div class="row border-bottom pt-4">
                                <p class="col-5 mb-2 text-white">Event Date:</p>
                                <p class="col-7 mb-2 text-white" id="EventDate"></p>
                            </div>
                            <div class="row border-bottom pt-4">
                                <p class="col-5 mb-2 text-white">Event Venue:</p>
                                <p class="col-7 mb-2 text-white" id="EventVenue"></p>

                            </div>
                            <div class="flex justify-center items-center mt-3">


                                <button type="button"
                                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 rounded-lg px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"><a
                                        href="index.php">
                                        SEE
                                        MORE EVENTS NOW!</a></button>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>



    </div>
    <?php include 'spinner.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Extract URL variables
            const urlParams = new URLSearchParams(window.location.search);
            const name = urlParams.get('name');
            // var param2 = urlParams.get('param2');

            // Create data object with extracted variables
            const data = {
                name: name
            };

            // Post data to PHP script using AJAX
            $.ajax({
                url: 'seeAction.php',
                type: 'POST',
                data: data,
                success: function (response) {
                    document.getElementById('img').src = JSON.parse(response).image;
                    document.getElementById('EventName').textContent = JSON.parse(response).EventName;
                    document.getElementById('EventDate').textContent = JSON.parse(response).EventDate;
                    document.getElementById('EventVenue').textContent = JSON.parse(response).EventVenue;
                    document.getElementById('GuestName').textContent = JSON.parse(response).GuestName;


                    // Handle successful response from PHP script
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    console.log(xhr.responseText);
                }
            });
        });


    </script>
    <?php include 'script.php'; ?>
</body>

</html>
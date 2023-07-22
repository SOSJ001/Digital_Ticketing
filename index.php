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
                <div id="topnavbar" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li class="nav-item ">
                            <a href="dashboard.php">
                                <span>
                                    <i class="fa-solid fa-gauge-high me-2"></i>DASHBOARD
                                </span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="#searchForm">SEARCH</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#event">EVENT</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- topnavbar end -->
        </nav>

        <!-- navigation -->

        <!-- body content -->
        <!-- <div class="index"> -->
        <!-- ==========Banner-Section========== -->
        <div class="banner fw-semibold">
            <div class="video-container">
                <!-- <video muted autoplay loop playsinline class="video"> -->
                <!-- <source src="img/concert-loop.mp4" type="video/mp4"> -->
                <!-- <video muted autoplay loop playsinline> -->
                <!-- <source src="img/concert-loop.mp4" type="video/mp4">
                <source src="img/concert-loop.webm" type="video/webm"> -->
                <!-- <img src="https://source.unsplash.com/random/800x600/?darkMode" alt="banner video"> -->
                <!-- </video> -->
                <img src="img/explosion.png" alt="Fallback Image" class="fallback-image">
            </div>
            <div class="content">
                <span id="upperContent" class="text-warning cd-headline zoom text-center ms-auto">
                    <span class="cd-words-wrapper p-0 m-0">
                        <b class="is-visible">GET</b>
                        <b>create</b>
                    </span>
                </span>
                <div class="container-fluid">
                    <div class="align-items-center justify-center">
                        <h1 class="cd-headline letters type">
                            <span id="upperContent" class="d-block">your tickets for</span>
                            <span id="upperContent" class="text-warning cd-words-wrapper waiting p-0 m-0">
                                <span>
                                    <b class="is-visible">Movie</b>
                                    <b>Sport</b>
                                    <b>Wedding</b>
                                    <b>Birthday</b>
                                    <b>conference</b>
                                    <b>Pool Party</b>
                                    <b>House Party</b>
                                    <b>+ more Event</b>
                                </span>
                            </span>
                        </h1>
                    </div>

                    <p id="pTag">Safe, secure, reliable ticketing. Your
                        <i id="pTag" class="text-warning cd-headline zoom">
                            <i class="cd-words-wrapper">
                                <b class="is-visible">ticket</b>
                                <b>invitation</b>
                            </i>
                        </i><br> to live satisfying entertainment!
                    </p>


                    <button>Learn More</button>
                </div>
            </div>
        </div>
        <!-- ==========Banner-Section========== -->


        <!-- sidebar slider -->
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-50 w-60 h-screen transition-transform -translate-x-full bg-dark lg:translate-x-0 xl:translate-x-0"
            aria-labelledby="drawer-body-scrolling-label">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-dark ">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="dashboard.php"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-yellow-500 hover:text-white">
                            <svg aria-hidden="true" class="w-6 h-6 text-white transition duration-75"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#searchForm"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-yellow-500 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 50 50"
                                class="w-6 h-6 text-white transition duration-75 ">
                                <path
                                    d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Search</span>
                        </a>
                    </li>
                    <!-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li> -->
                    <li>
                        <a href="#event"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-yellow-500 hover:text-white">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-yellow-500 hover:text-white">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">About Us</span>
                        </a>
                    </li>
                    <!-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li> -->
                    <!-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li> -->
                </ul>
            </div>
        </aside>
        <!-- sidebar slider end -->

        <!--body div starts -->
        
        <div class="bg-fixed bg-no-repeat bg-cover" style="background-image: url('https://source.unsplash.com/1600x900/?nature,water'); background-attachment: fixed;
        background-position: center; background-repeat: no-repeat;">

            <div style="background-color: rgba(0, 0, 0, 0.5);" class="z-1">
                <!-- search div ends -->
                <div id="searchForm" class="pt-5">
                    <div class="mx-auto py-16 flex justify-center">
                        <form
                            style="background-image: url('https://source.unsplash.com/random/800x600/?darkNeon,darkMode')"
                            class="rounded pt-5 bg-fixed bg-center bg-cover bg-dark p-8 text-4xl text-white w-70 justify-center">
                            <!-- ////////////////////////// -->
                            <div style="background-color: rgba(0, 0, 0, 0.5);" class="container p-3 rounded">

                                <div class="row truncate align-items-center mb--20">
                                    <div class="col-lg-6 mb-20">
                                        <div class="search-ticket-header">
                                            <h6 class="text-warning title uppercase">Welcome to Digital Ticket </h6>
                                            <h3 class="mt-3">What are you looking for</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20 mt-3">
                                        <ul class="d-flex row row-col-sm-12 text-xl">
                                            <li
                                                class="col m-3 rounded-5 d-flex align-items-center justify-content-center">
                                                <span class="pl-1"><i
                                                        class="fa-beat text-warning mx-2 fa-solid fa-film"></i>Movie</span>
                                            </li>
                                            <li
                                                class=" col m-3 rounded-5 d-flex align-items-center justify-content-center">
                                                <span class="pl-1"><i
                                                        class="fa-beat mx-2 text-warning fa-solid fa-users-rectangle"></i>Conferences</span>
                                            </li>
                                            <li
                                                class="col m-3 rounded-5 d-flex align-items-center justify-content-center">
                                                <span class="pl-1"><i class="fa-solid text-warning fa-plus fa-beat"></i>
                                                    More Events</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- ////////////////////////////// -->
                                <div class="row justify-content-center text-2xl">
                                    <div class="col-12 col-md-12 col-lg-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="search" class="block text-light font-bold mb-2">Search
                                                Now</label>
                                            <input type="text" name="search" id="search"
                                                class="fs-4 rounded form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="form-group p-2 w-30">
                                                    <label for="venue"
                                                        class="block text-light font-bold mb-2">Venue</label>
                                                    <select name="venue" id="venue" class="fs-4 form-control">
                                                        <option value="">Select Venue</option>
                                                        <option value="venue1">Venue 1</option>
                                                        <option value="venue2">Venue 2</option>
                                                        <option value="venue3">Venue 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4">
                                                <div class="form-group p-2 w-30">
                                                    <label for="date"
                                                        class="block text-light font-bold mb-2">Date</label>
                                                    <input type="date" name="date" id="date" class="fs-4 form-control">
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4">
                                                <div class="form-group p-2 w-30">
                                                    <label for="city"
                                                        class="block text-light font-bold mb-2">City</label>
                                                    <select name="city" id="city" class="fs-4 form-control">
                                                        <option value="">Select City</option>
                                                        <option value="city1">City 1</option>
                                                        <option value="city2">City 2</option>
                                                        <option value="city3">City 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <button type="submit"
                                    class="bg-yellow-400 text-white py-2 px-4 mt-4 rounded hover:bg-yellow-500 w-full">Search
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- search div ends -->

                <!-- carousel div coming up -->
                <div class="row row-col-2 fs-1 text-light p-5 ">
                    <div class="col col-md-12 col-sm-12 ">
                        <h2 class="title uppercase text-warning">movies</h2>
                        <p class="text-nowrap">Be sure not to miss these Movies.</p>
                    </div>
                    <div class="col col-md-12 col-sm-12 uppercase">
                        <div class="w-full rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                            <ul id="btnTab"
                                class="justify-end mb-4 flex flex-wrap text-center rounded-t-lg dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                                <li class="" role="presentation">
                                    <button
                                        class="active-tab hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="trending-tab" data-tabs-target="#TRENDING" type="button" role="tab"
                                        aria-controls="TRENDING" aria-selected="false">TRENDING</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="comingsoon-tab" data-tabs-target="#COMINGSOON" type="button" role="tab"
                                        aria-controls="COMINGSOON" aria-selected="false">COMING SOON</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="all-tab" data-tabs-target="#ALL" type="button" role="tab"
                                        aria-controls="ALL" aria-selected="false">ALL</button>
                                </li>
                            </ul>

                            <div id="defaultTabContent">
                                <div class="hidden rounded-lg" id="TRENDING" role="tabpanel"
                                    aria-labelledby="trending-tab">
                                    <div class="owl-carousel">
                                        <div class="items border rounded-t-lg border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,mountain"
                                                        alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>2alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,dark" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,blue" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- coming soon tab -->
                        <div class="hidden rounded" id="COMINGSOON" role="tabpanel" aria-labelledby="comingsoon-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,mountain" alt="" />
                                        </div>

                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>1alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,sea" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,leaf" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,forest" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,grass" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ALL TAB -->
                        <div class="hidden P-4 rounded-lg md:p-8 dark:bg-gray-800" id="ALL" role="tabpanel"
                            aria-labelledby="all-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,darkMode" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,darkNeon" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?garden,flower" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?black,car" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,vehicle" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?gray,fashion" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>






            <div class="parallax">

                <div class="row row-col-2 fs-1 text-light p-5 " style="background-color: rgba(0, 0, 0, 0.5);">
                    <div class="col col-md-12 col-sm-12 ">
                        <h2 class="title uppercase text-warning">conferences</h2>
                        <p class="text-nowrap">Be sure not to miss these conferences.</p>
                    </div>
                    <div class="col col-md-12 col-sm-12 uppercase">
                        <div class="w-full rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                            <ul id="btnTab"
                                class="justify-end mb-4 flex flex-wrap text-center rounded-t-lg dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                                id="defaultTab" data-tabs-toggle="#ConferenceTabContent" role="tablist">
                                <li class="" role="presentation">
                                    <button
                                        class="active-tab hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="trendC-tab" data-tabs-target="#trendC" type="button" role="tab"
                                        aria-controls="TRENDING" aria-selected="false">TRENDING</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="comingsoonC-tab" data-tabs-target="#COMINGSOONC" type="button" role="tab"
                                        aria-controls="COMINGSOONC" aria-selected="false">COMING SOON</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="allPool-tab" data-tabs-target="#ALLPool" type="button" role="tab"
                                        aria-controls="ALCL" aria-selected="false">ALL</button>
                                </li>
                            </ul>

                            <div id="ConferenceTabContent">
                                <div class="hidden rounded-lg" id="trendC" role="tabpanel" aria-labelledby="trendC-tab">
                                    <div class="owl-carousel">
                                        <div class="items border rounded-t-lg border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,mountain"
                                                        alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>2alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,dark" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,blue" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- coming soon tab -->
                        <div class="hidden rounded" id="COMINGSOONC" role="tabpanel" aria-labelledby="comingsoonC-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,mountain" alt="" />
                                        </div>

                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>1alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,sea" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,leaf" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,forest" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,grass" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ALL TAB -->
                        <div class="hidden P-4 rounded-lg md:p-8 dark:bg-gray-800" id="ALLC" role="tabpanel"
                            aria-labelledby="allC-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,darkMode" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,darkNeon" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?garden,flower" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?black,car" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,vehicle" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?gray,fashion" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div style="background-color: rgba(0, 0, 0, 0.5);" class="z-1 mt-4" id="event">
                <div class="row row-col-2 fs-1 text-light p-5 ">
                    <div class="col col-md-12 col-sm-12 ">
                        <h2 class="title uppercase text-warning">pool parties</h2>
                        <p class="text-nowrap">Be sure not to miss these pool parties.</p>
                    </div>
                    <div class="col col-md-12 col-sm-12 uppercase">
                        <div class="w-full rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">

                            <ul id="btnTab"
                                class="justify-end mb-4 flex flex-wrap text-center rounded-t-lg dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                                id="defaultTab" data-tabs-toggle="#poolTabContent" role="tablist">
                                <li class="" role="presentation">
                                    <button
                                        class="active-tab hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="trendPool-tab" data-tabs-target="#trendPool" type="button" role="tab"
                                        aria-controls="trendPool" aria-selected="false">TRENDING</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="comingsoonPool-tab" data-tabs-target="#COMINGSOONPool" type="button"
                                        role="tab" aria-controls="COMINGSOONPool" aria-selected="false">COMING
                                        SOON</button>
                                </li>
                                <li class="" role="presentation">
                                    <button
                                        class="hover:bg-gray-200 inline-block  border-gray-200 border-1 border rounded-t-lg"
                                        id="allPool-tab" data-tabs-target="#ALLPool" type="button" role="tab"
                                        aria-controls="ALCL" aria-selected="false">ALL</button>
                                </li>
                            </ul>

                            <div id="poolTabContent">
                                <div class="hidden rounded-lg" id="trendPool" role="tabpanel"
                                    aria-labelledby="trendPool-tab">
                                    <div class="owl-carousel">
                                        <div class="items border rounded-t-lg border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,mountain"
                                                        alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>2alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,dark" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,blue" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="items rounded-t-lg border border-gray-200">
                                            <a href="#">
                                                <div class="image-container">
                                                    <img class="image rounded"
                                                        src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                                </div>

                                            </a>
                                            <div class="p-2 bg-yellow-400">
                                                <a href="#">
                                                    <h5
                                                        class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                        <p>1alone</p>
                                                        <p>this is the time</p>
                                                    </h5>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- coming soon tab -->
                        <div class="hidden rounded" id="COMINGSOONPool" role="tabpanel"
                            aria-labelledby="comingsoonPool-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,mountain" alt="" />
                                        </div>

                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>1alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,sea" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,leaf" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,rain" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,forest" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-4 col-sm-6 mb-5 rounded shadow">

                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,grass" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ALL TAB -->
                        <div class="hidden P-4 rounded-lg md:p-8 dark:bg-gray-800" id="ALLPool" role="tabpanel"
                            aria-labelledby="allPool-tab">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?nature,darkMode" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,darkNeon" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?garden,flower" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?black,car" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?dark,vehicle" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5 rounded shadow">
                                    <a href="#">
                                        <div class="image-container">
                                            <img class="image rounded"
                                                src="https://source.unsplash.com/400x900/?gray,fashion" alt="" />
                                        </div>
                                    </a>
                                    <div class="p-2 bg-yellow-400">
                                        <a href="#">
                                            <h5
                                                class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                <p>alone</p>
                                                <p>this is the time</p>
                                            </h5>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="parallax" id="event">
                <div style="background-color: rgba(0, 0, 0, 0.5);" class="z-1 mt-4">
                    <div class="row row-col-2 fs-1 text-light p-5">
                        <div class="col col-md-12 col-sm-12">
                            <h2 class="title uppercase text-warning">movies</h2>
                            <p class="text-nowrap">Be sure not to miss these Movies.</p>
                        </div>
                        <div class="col col-md-12 col-sm-12 uppercase">
                            <ul class="flex flex-wrap align-items-center justify-center">
                                <li
                                    class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                    All
                                </li>
                                <li
                                    class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                    coming soon
                                </li>
                                <li
                                    class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                    Trending
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="owl-carousel px-5 py-3">
                        <div class="background container position-relative">
                            <div class="item position-relative">
                                <div class="bg-warning text-center">
                                    <img src="https://pixner.net/boleto/demo/assets/images/ticket/ticket-tab03.png">
                                </div>
                            </div>
                            <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                                <span>alone</span>
                                <span>this is the time</span>
                            </div>
                        </div>
                        <div class="background container position-relative">
                            <div class="item position-relative">
                                <div class="bg-warning text-center">
                                    <img src="https://source.unsplash.com/400x900/?nature,water">
                                </div>
                            </div>
                            <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                                <span>alone</span>
                                <span>this is the time</span>
                            </div>
                        </div>
                        <div class="background container position-relative">
                            <div class="item position-relative">
                                <div class="bg-warning text-center">
                                    <img src="https://source.unsplash.com/random/400x900/?darkNeon,darkMode"
                                        class="mx-auto h-100 w-auto">
                                </div>
                            </div>
                            <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                                <span>alone</span>
                                <span>this is the time</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div> -->

            <!-- <div style="background-color: rgba(0, 0, 0, 0.5);" class="z-1 mt-4">
                <div class="row row-col-2 fs-1 text-light p-5">
                    <div class="col col-md-12 col-sm-12">
                        <h2 class="title uppercase text-warning">movies</h2>
                        <p class="text-nowrap">Be sure not to miss these Movies.</p>
                    </div>
                    <div class="col col-md-12 col-sm-12 uppercase">
                        <ul class="flex flex-wrap align-items-center justify-center">
                            <li
                                class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                All
                            </li>
                            <li
                                class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                coming soon
                            </li>
                            <li
                                class="hover:bg-green-800 p-3 m-2 flex flex-wrap text-nowrap border-warning border-2 rounded border text-center">
                                Trending
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="owl-carousel px-5 py-3">
                    <div class="background container position-relative">
                        <div class="item position-relative">
                            <div class="bg-warning text-center">
                                <img src="https://pixner.net/boleto/demo/assets/images/ticket/ticket-tab03.png">
                            </div>
                        </div>
                        <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                            <span>alone</span>
                            <span>this is the time</span>
                        </div>
                    </div>
                    <div class="background container position-relative">
                        <div class="item position-relative">
                            <div class="bg-warning text-center">
                                <img src="https://source.unsplash.com/400x900/?nature,water">
                            </div>
                        </div>
                        <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                            <span>alone</span>
                            <span>this is the time</span>
                        </div>
                    </div>
                    <div class="background container position-relative">
                        <div class="item position-relative">
                            <div class="bg-warning text-center">
                                <img src="https://source.unsplash.com/random/400x900/?darkNeon,darkMode"
                                    class="mx-auto h-100 w-auto">
                            </div>
                        </div>
                        <div class="text-center position-absolute left-0 bottom-0 w-100 bg-danger">
                            <span>alone</span>
                            <span>this is the time</span>
                        </div>
                    </div>
                </div>

            </div> -->
            
            <!-- carousel div ends -->

            <!-- </div> -->
            <?php include 'footer.php'; ?>
        </div>
        <!-- body content -->
    </div>



    <?php include 'spinner.php'; ?>
    <?php include 'script.php'; ?>
</body>

</html>
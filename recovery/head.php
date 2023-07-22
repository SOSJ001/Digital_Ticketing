<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Yeseva+One&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/sosSeats.png" type="image/x-icon">
  <title>SOS SEATS</title>
  <link rel="stylesheet" href="animate/animate.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/flowbite.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" href="css/jquery.animatedheadline.css"> -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <script src="js/modernizr.js"></script>
  <style>
    /* square-checkbox */
    .square-checkbox {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 16px;
      height: 16px;
      border: 1px solid #ccc;
      outline: none;
      transition: all 0.2s ease-in-out;
      cursor: pointer;
    }

    /* .square-checkbox:checked {
      background-color: #ccc;
    } */

    /* square-checkbox end */

    /* Social icons */
    .social-icons li {
      border: 1px solid gray;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      color: #f3f3f3;
      margin: 10px;
    }

    /* social icons end */

    /* scroll bar style */
    *::-webkit-scrollbar {
      width: 4px;
      background-color: #f5f5f5;
    }

    *::-webkit-scrollbar-thumb {
      background-color: #ffc107;
    }

    *::-webkit-scrollbar-track {
      -webkit-box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.3);
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.3);
      background-color: #F5F5F5;
    }

    /* scroll bar ends */

    /* parallax background */
    .parallax {
      height: 100%;
      background-image: url('https://source.unsplash.com/random/800x600/?yellow,happy,smiles');
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      /* z-index: 40; */
    }

    /* parallax background ends */

    /* from the style css */

    .model-dialog {
      overflow-y: initial;
    }


    .model-body {
      overflow-y: auto;
    }

    #loader { 
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 9999;
    }

    .blur {
      filter: blur(4px);
    }

    .disable {
      pointer-events: none;
      user-select: none;
    }

    /* from the style css end */


    /* owl carousel */
    .owl-prev {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
    }

    .owl-next {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
    }

    .owl-carousel {
      position: relative;
    }

    .owl-carousel .item {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 400px;
      /* width: auto; */
    }

    .owl-carousel .item div img {
      max-width: 100%;
      max-height: 100%;
      display: block;
      margin: auto;
    }

    .owl-carousel .background {
      height: 400px;
      background: #212529;
    }

    .owl-carousel .background span {
      display: block;
    }

    /* owl carousel end */
.image{
  height: 350px;
  width: 100%;
}
/* Style for the active tab button */
.active-tab {
  color: yellow; /* Text color */
  /* Add any other styles you want for the active tab */
}


    /* title theme */
    .title {
      font-family: 'Alkatra', cursive;
    }

    /* title theme */

    /* Search div start */
    #searchForm {
      margin-top: -150px;
      position: relative;
    }

    /* srarch div end */


    /* banner */
    .content span {
      text-transform: uppercase;
    }

    .fallback-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .banner {
      position: relative;
      height: 100vh;
      background-color: black;
      color: white;
      overflow: hidden;
    }

    .video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 1;
      font-family: 'Alkatra', cursive;
      width: 80%;
    }

    #upperContent {
      font-size: 60px;
    }

    @media (max-width: 662px) {
      #upperContent {
        font-size: 40px;
      }
    }


    #pTag {
      font-size: 20px;
    }

    button {
      font-size: 24px;
      padding: 16px;
      background-color: white;
      color: black;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin: 5px;
    }

    .banner .video-container {
      opacity: .3;
    }

    /* banner  end */

    .index {
      overflow: auto;
      height: 100%;
    }

    body {
      overflow-y: auto;
      overflow-x: hidden;
      font-family: 'Roboto', sans-serif;
      font-size: large;
      color: black;
    }

    /* side nav */
    #sidenav {
      transition: 0.5s;

    }

    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 9;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 70px;
      color: #0dcaf0;
      transition: 0.5s;
    }

    .sidenav a {
      padding-top: 10px;
      padding-bottom: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding-left: 10px;
      color: white;
    }

    .sidenav a:hover {
      color: #212529;
      background-color: #198754;
    }

    .sidenav a span {
      display: block;
    }

    #logo-sidebar {
      padding-top: 110px;
    }
  </style>
</head>
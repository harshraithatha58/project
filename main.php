  <?php
require './sign/_conn.php';
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Klean | Landing, Corporate </title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block navbar-klean" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="index.html"> <img class="me-3 d-inline-block" src="assets/img/gallery/logo.png" alt="" /></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active rounded-pill" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#service">Service</a></li>
            <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
          <form class="ps-lg-5">
            <button class="btn btn-lg btn-klean-outline order-0 fs-0" type="submit">
              <span class="text-gradient fw-bold">
                <a href="./sign/signin.php"> Sign In
                </a></span></button>



            <button class="btn btn-lg btn-klean-outline order-0 fs-0" type="submit">
              <span class="text-gradient fw-bold">
                <a href="./sign/signup.php">Sign
                  Up</a></span></button>

          </form>
        </div>
      </div>
    </nav>
    <section id="home">
      <div class="bg-holder d-none d-md-block bg-size" style="background-image:url(assets/img/illustrations/hero.png);background-position:right bottom;">
      </div>
      <!--/.bg-holder-->

      <div class="bg-holder" style="background-image:url(assets/img/illustrations/heroheader-bg.png);background-position:center;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
            <h1 class="fw-bold display-4 fs-4 fs-lg-6 fs-xxl-7 text-gradient"> XYZ</h1>
            <h1 class="text-700">crafted by <span class="fw-bold">CZMG BCA College</span></h1>
            <p class="mb-5 fs-0">We xyz offer a platform to bridge the gap between quality individuals <br class="d-none d-lg-block" /> and employers building a chain of successful partnerships.
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-lg-0 pt-md-8 py-0">

      <div class="container">
        <div class="row align-items-center justify-content-xl-between py-5 border-klean">
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="assets/img/gallery/google.png" height="40" alt="brands" /></div>
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="assets/img/gallery/netflix.png" height="40" alt="brands" /></div>
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="assets/img/gallery/microsoft.png" height="40" alt="brands" /></div>
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="assets/img/gallery/theme-wagon.png" height="40" alt="brands" /></div>
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="assets/img/gallery/mailbluster.png" height="40" alt="brands" /></div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 circle-blend circle-blend-right circle-warning" id="service">

      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-xxl-5 mx-auto text-center py-7">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Service</h5>
            <p class="mb-0">We offer youth with chances for career development in their practice. We also
              support a wide
              range of services to ensure client satisfaction</p>
          </div>
        </div>
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/service.png);background-position:bottom center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="row flex-center">
          <div class="col-xl-9">
            <div class="row justify-content-center circle">
              <div class="col-md-4 mb-4">
                <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                  <div class="text-center"><img class="my-5" src="assets/img/icons/text.png" width="100" alt="services" />
                    <div class="card-body text-center text-md-start">
                      <h6 class="fw-bold fs-1">Better Recruitment</h6>
                      <p class="mt-3 mb-md-0 mb-lg-3">Financial planning, forecasting and
                        adjusting rapidly with
                        customer demands and budgets.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                        more
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                          </path>
                        </svg></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                  <div class="text-center"><img class="my-5" src="assets/img/icons/organized.png" width="100" alt="services" />
                    <div class="card-body text-center text-md-start">
                      <h6 class="fw-bold fs-1">Vast Opportunities</h6>
                      <p class="mt-3 mb-md-0 mb-lg-3">Latest technology and experienced guidance,
                        trained HR specialists
                        to keep updated.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn
                        more
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                          </path>
                        </svg></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                  <div class="text-center"><img class="my-5" src="assets/img/icons/statistics.png" width="100" alt="services" />
                    <div class="card-body text-center text-md-start">
                      <h6 class="fw-bold fs-1">Analytical Statistics</h6>
                      <p class="mt-3 mb-md-0 mb-lg-3">Messages, real-time reminders, memos, and
                        many more will keep your
                        team in sync.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                          </path>
                        </svg></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-5 circle-blend circle-blend-right-feature circle-cyan" id="feature">
      <div class="bg-holder" style="background-image:url(assets/img/illustrations/feature-bg.png);background-position:right;background-size:auto;">
      </div>

      <div class="bg-holder mt-n4" style="background-image:url(assets/img/illustrations/product-bg-2.png);background-position:left top;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container-xl">
        <div class="row flex-center circle-blend circle-blend-left-product circle-cyan">
          <div class="col-auto">
            <div class="square shadow-square-bottom">
              <div class="card product-card-bg">
                <div class="card-body p-4 h-100"><img class="img-fluid border-img" src="assets/img/gallery/product.png" width="350" alt="..." /></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-lg-auto my-7 my-lg-0 px-sm-8 px-lg-0 ps-lg-2 ps-xl-0">
            <h1 class="fw-bold display-5 lh-sm my-4">A stunning team which <br>helps you find your way</h1>
            <p class="fs-1 mb-3 pe-xxl-8">XYZ is not only a bridge between you and recruiters but it is a
              way between
              you and your success.</p>
            <p class="fs-1 mb-5 pe-xxl-8"> XYZ is an elegant website and a perfect starting point for your
              carrier,
              carefully curated by <span class="fw-bold">CZMGC</span></p>

          </div>
        </div>
        <div class="row flex-center pt-10 pt-md-6 pt-lg-10 circle-blend circle-blend-right-dedicated circle-danger">
          <div class="col-auto ms-lg-auto order-md-1 text-center">
            <div class="square shadow-square-top">
              <div class="card product-card-bg">.
                <div class="card-body p-4"><img class="img-fluid border-img" src="assets/img/gallery/dedicate.png" width="350" alt="..." /></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-0 ms-xl-auto my-7 my-xl-0 px-sm-8 px-lg-3 px-xl-0 me-xl-auto ps-xl-0">
            <h1 class="fw-bold display-5 lh-sm my-4">A proper platform<br>for the present youth.</h1>
            <p class="fs-1 mb-3 pe-xxl-8">you might be thinking "Why Only You?" The reason is we recriut you
              as
              per your skills and intrest.</p>
            <p class="fs-1 mb-5 pe-xxl-8">We see where "your" intrest lies and suggest based on it and
              that's the
              reason you should choose <span class="fw-bold">XYZ</span></p>

          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-7">

      <div class="container">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/project-bg.png);background-position:right;background-size:auto;">
        </div>
        <!--/.bg-holder-->
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0" container container-lg-fluid container-xl="container container-lg-fluid container-xl">

      <div class="container">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/team-bg.png);background-position:left top;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="row justify-content-center mb-6">
          <div class="col-lg-6 text-center mx-auto mb-7">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Our Team</h5>
            <p class="mb-0">People from various origins, cultures, and personalities make up our team. This
              blend makes
              it a powerful team</p>
          </div>
          <div class="col-xxl-9">
            <div class="row flex-center g-0">
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-right"><img class="team-card-1" src="assets/img/gallery/john.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Jani Bhargesh</h5>
                <p>Team leader</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-left"><img class="team-card-2" src="assets/img/gallery/carrey.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Aryan Tankariya</h5>
                <p>Front-end Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-right"><img class="team-card-3" src="assets/img/gallery/ray.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Rukaiya Rampurawala</h5>
                <p>Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-left"><img class="team-card-4" src="assets/img/gallery/3.jpg" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Dhairya Chavda</h5>
                <p>Front-end Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-right"><img class="team-card-1" src="assets/img/gallery/john.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Aditya Majithya</h5>
                <p>Front-end Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-left"><img class="team-card-2" src="assets/img/gallery/carrey.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Naushid Sheikh</h5>
                <p>Front-end Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-right"><img class="team-card-3" src="assets/img/gallery/ray.png" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Bhargav Panchmatiya</h5>
                <p>Fornt-end Developer</p>
              </div>
              <div class="col-sm-6 col-lg-3 text-center">
                <div class="wrapper shadow-square-left"><img class="team-card-4" src="assets/img/gallery/8.jpg" width="200" alt="..." /></div>
                <h5 class="text-800 fw-bold mt-4 mb-1">Harsh Raithatha</h5>
                <p>Back-end Developer</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-5" id="testimonial">
      <div class="bg-holder" style="background-image:url(assets/img/illustrations/testimonial-bg-1.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="bg-holder" style="background-image:url(assets/img/illustrations/testimonial-bg.png);background-position:right top;background-size:auto;margin-top:-43px;margin-left:-200px;">
      </div>
      <!--/.bg-holder-->
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0" id="contact">

      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-xxl-5 mx-auto text-center mt-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-5">Contact Us</h5>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-5 mb-8">
      <div class="bg-holder" style="background-image:url(assets/img/illustrations/contact-us-bg.png);background-position:left bottom;background-size:auto;">
      </div>
      <!--/.bg-holder-->

      <div class="bg-holder" style="background-image:url(assets/img/gallery/contact-bg.png);background-position:center right ;background-size:contain;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row flex-center">
          <div class="col-lg-5 mb-5">
            <div class="card card-bg p-2">
              <div class="card-body">
                <form>
                  <div class="row mb-3 input-group-icon">
                    <label class="col-sm-2 col-form-label visually-hidden" for="inputName">Name</label>
                    <div class="col-sm-12">
                      <input class="form-control rounded-pill border-white input-box" id="inputName" type="text" placeholder="Write your name" />
                      <svg class="bi bi-person-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="row mb-3 input-group-icon">
                    <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail3">Email</label>
                    <div class="col-sm-12">
                      <input class="form-control rounded-pill border-white input-box" id="inputEmail3" type="email" placeholder="Write your email" />
                      <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="row mb-3 input-group-text-icon">
                    <label class="col-sm-2 col-form-label visually-hidden" for="floatingTextarea2">Comments</label>
                    <div class="col-sm-12">
                      <textarea class="form-control rounded-3 border-white input-box" id="floatingTextarea2" placeholder="Write your message" style="height: 150px"></textarea>
                      <svg class="bi bi-pencil-fill input-box-text-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="d-grid">
                        <button class="btn hover-top btn-glow btn-klean rounded-pill" type="submit">Submit </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="d-flex align-items-center mb-5">
              <div class="icon icon-primary"><span data-feather="phone"></span></div>
              <div class="flex-1 ms-3">
                <p class="fw-bold mb-0">Phone </p>
                <p>+880124332334</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-5">
              <div class="icon icon-primary"><span data-feather="mail"></span></div>
              <div class="flex-1 ms-3">
                <p class="fw-bold mb-0">Email</p>
                <p>something@email.com </p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="icon icon-primary"><span data-feather="map-pin"></span></div>
              <div class="flex-1 ms-3">
                <p class="fw-bold mb-0">Location</p>
                <p>43/A Spooner Street,<br />St laurence, Virginia, <br />Texas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="bg-holder" style="background-image:url(assets/img/illustrations/cta-bg.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="bg-holder" style="background-image:url(assets/img/illustrations/cta-bg-1.png);background-position:right top;background-size:auto;margin-top:-38px;margin-left:-200px;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row flex-center circle-blend circle-blend-right circle-pink">
          <div class="col-xxl-9 py-5 text-center">
            <h1 class="fw-bold mb-4 text-gradient fs-6">Exclusively by XYZ</h1>
            <p class="mb-6 mx-xxl-11">We hope that this website finds you informative. If you like this
              share this with
              the one who really needs it and if you are intrested for getting a sutaible job, please Log
              In to<span class="fw-bold">XYZ</span></p><a class="btn hover-top btn-glow btn-klean rounded-pill" href="#">Log
              in</a>
          </div>
        </div>
      </div>
    </section>
    <section class="pb-0 pt-6">
      <div class="bg-holder" style="background-image:url(assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row justify-content-lg-between circle-blend-right circle-danger">
          <div class="col-6 col-sm-4 col-lg-auto mb-3">
            <h5 class="text-600 mb-3 fw-bold">About</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">About</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Resources</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Team</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-auto mb-3">
            <h5 class="text-600 mb-3 fw-bold">Resources </h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Terms</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Help</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Privacy</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-auto mb-3">
            <h5 class="text-600 mb-3 fw-bold">Team</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Developer</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Designer</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-lg-auto mb-3">
            <h5 class="text-600 mb-3 fw-bold">Blog</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Team Leader</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Lifestyle</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Article</a></li>
              <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Tech</a></li>
            </ul>
          </div>
          <div class="col-9 col-sm-6 col-lg-auto mb-3">
            <h5 class="text-600 mb-3 fw-bold">Follow Us</h5>
            <ul class="list-unstyled list-inline my-3">
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/facebook.svg" alt="" width="25" /></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/twitter.svg" alt="" width="25" /></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/linkdin.svg" alt="" width="25" /></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/youtube.svg" alt="" width="25" /></a></li>
              <li class="list-inline-item"><a class="text-decoration-none" href="#!"></a></li>
            </ul>
            <p class="fw-semi-bold mt-4 mb-3">Subscribe to our newsletter</p>
            <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail2">Email</label>
            <div class="col-sm-12 input-group-icon">
              <input class="form-control rounded-pill border-white py-1 px-4" id="inputEmail2" type="email" placeholder="email" />
              <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="left:.8rem;">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z">
                </path>
              </svg>
            </div>
          </div>
        </div>
        <hr class="text-100 mb-0" />
        <div class="row justify-content-md-between justify-content-evenly py-3">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; XYZ, 2023</p>
          </div>
          <div class="col-12 col-sm-8 col-md-6">
            <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#EB6453" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                </path>
              </svg>&nbsp;by&nbsp;<a class="fw-bold text-500" href="https://themewagon.com/" target="_blank">XYZ
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script>
    feather.replace();
  </script>
  <script src="assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
</body>

</html>
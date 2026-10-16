<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          type="text/css"
          href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet"
          type="text/css"
          href="{{ asset('css/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet"
          href="{{ asset('css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon"
          href="{{ asset('images/fevicon.png') }}"
          type="image/gif">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>


<body>


<!-- ================= HEADER START ================= -->

<div class="header_section">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}">
            </a>


            <!-- Mobile Button -->
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- Navbar -->
            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">


                    <!-- Home -->
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/') }}">
                            Home
                        </a>

                    </li>


                    <!-- About -->
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/about') }}">
                            About
                        </a>

                    </li>


                    <!-- Login / User -->
                     @if (session()->has('user_id'))


                        <!-- My Bookings -->
                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ url('/my-bookings') }}">
                                My Bookings
                            </a>

                        </li>


                        <!-- Logout -->
                        <li class="nav-item">

                            <form action="{{ url('/logout') }}"
                                  method="POST"
                                  style="margin: 0;">

                                @csrf

                                <button type="submit"
                                        class="nav-link"
                                        style="
                                            border: none;
                                            background: none;
                                            cursor: pointer;
                                        ">

                                    Logout

                                </button>

                            </form>

                        </li>


                    @else


                        <!-- Login -->
                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ url('/login') }}">
                                Login
                            </a>

                        </li>


                        <!-- Signup -->
                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ url('/signup') }}">
                                Signup
                            </a>

                        </li>


                    @endif


                    <!-- Vehicles -->
                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/cars') }}">
                            Vehicles
                        </a>

                    </li>


                    <!-- Client -->
                    <li class="nav-item">

                        <a class="nav-link"
                           href="#">
                            Client
                        </a>

                    </li>


                    <!-- Contact -->
                    <li class="nav-item">

                        <a class="nav-link"
                           href="#">
                            Contact
                        </a>

                    </li>


                </ul>


                <form class="form-inline my-2 my-lg-0">
                </form>

            </div>

        </nav>

    </div>

</div>

<!-- ================= HEADER END ================= -->



<!-- ================= TOP CONTACT BAR START ================= -->

<div class="call_text_main">

    <div class="container">

        <div class="call_taital">


            <!-- Location -->
            <div class="call_text">

                <a href="#">

                    <i class="fa fa-map-marker"
                       aria-hidden="true"></i>

                    <span class="padding_left_15">
                        Location
                    </span>

                </a>

            </div>


            <!-- Phone -->
            <div class="call_text">

                <a href="#">

                    <i class="fa fa-phone"
                       aria-hidden="true"></i>

                    <span class="padding_left_15">
                        (+71) 8522369417
                    </span>

                </a>

            </div>


            <!-- Email -->
            <div class="call_text">

                <a href="#">

                    <i class="fa fa-envelope"
                       aria-hidden="true"></i>

                    <span class="padding_left_15">
                        demo@gmail.com
                    </span>

                </a>

            </div>


        </div>

    </div>

</div>

<!-- ================= TOP CONTACT BAR END ================= -->



<!-- ================= ABOUT SECTION START ================= -->

<div class="about_section layout_padding">

    <div class="container">

        <div class="about_section_2">

            <div class="row">


                <!-- About Image -->
                <div class="col-md-6">

                    <div class="image_iman">

                        <img src="{{ asset('images/about-img.png') }}"
                             class="about_img">

                    </div>

                </div>


                <!-- About Content -->
                <div class="col-md-6">

                    <div class="about_taital_box">

                        <h1 class="about_taital">

                            About

                            <span style="color: #fe5b29;">
                                Us
                            </span>

                        </h1>


                        <p class="about_text">

                            going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything
                            embarrassing hidden in the middle of text.
                            All the Lorem Ipsum generators on the
                            Internet tend to repeat predefined going
                            to use a passage of Lorem Ipsum, you need
                            to be sure there isn't anything embarrassing
                            hidden in the middle of text. All the Lorem
                            Ipsum generators on the Internet tend to
                            repeat predefined

                        </p>


                        <div class="readmore_btn">

                            <a href="#">
                                Read More
                            </a>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>

<!-- ================= ABOUT SECTION END ================= -->



<!-- ================= FOOTER START ================= -->

<div class="footer_section layout_padding">

    <div class="container">


        <!-- Footer Logo -->
        <div class="row">

            <div class="col-md-12">

                <div class="footeer_logo">

                    <img src="{{ asset('images/logo.png') }}">

                </div>

            </div>

        </div>



        <div class="footer_section_2">

            <div class="row">


                <!-- Subscribe -->
                <div class="col">

                    <h4 class="footer_taital">
                        Subscribe Now
                    </h4>

                    <p class="footer_text">
                        There are many variations of passages
                        of Lorem Ipsum available,
                    </p>


                    <div class="form-group">

                        <textarea
                            class="update_mail"
                            placeholder="Enter Your Email"
                            rows="5"
                            id="comment"
                            name="Enter Your Email">
                        </textarea>


                        <div class="subscribe_bt">

                            <a href="#">
                                Subscribe
                            </a>

                        </div>

                    </div>

                </div>



                <!-- Information -->
                <div class="col">

                    <h4 class="footer_taital">
                        Information
                    </h4>

                    <p class="lorem_text">

                        There are many variations of passages
                        of Lorem Ipsum available, but the majority

                    </p>

                </div>



                <!-- Helpful Links -->
                <div class="col">

                    <h4 class="footer_taital">
                        Helpful Links
                    </h4>

                    <p class="lorem_text">

                        There are many variations of passages
                        of Lorem Ipsum available, but the majority

                    </p>

                </div>



                <!-- Investments -->
                <div class="col">

                    <h4 class="footer_taital">
                        Investments
                    </h4>

                    <p class="lorem_text">

                        There are many variations of passages
                        of Lorem Ipsum available, but the majority

                    </p>

                </div>



                <!-- Contact Us -->
                <div class="col">

                    <h4 class="footer_taital">
                        Contact Us
                    </h4>


                    <!-- Location -->
                    <div class="location_text">

                        <a href="#">

                            <i class="fa fa-map-marker"
                               aria-hidden="true"></i>

                            <span class="padding_left_15">
                                Location
                            </span>

                        </a>

                    </div>


                    <!-- Phone -->
                    <div class="location_text">

                        <a href="#">

                            <i class="fa fa-phone"
                               aria-hidden="true"></i>

                            <span class="padding_left_15">
                                (+71) 8522369417
                            </span>

                        </a>

                    </div>


                    <!-- Email -->
                    <div class="location_text">

                        <a href="#">

                            <i class="fa fa-envelope"
                               aria-hidden="true"></i>

                            <span class="padding_left_15">
                                demo@gmail.com
                            </span>

                        </a>

                    </div>



                    <!-- Social Icons -->
                    <div class="social_icon">

                        <ul>

                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"
                                       aria-hidden="true"></i>
                                </a>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"
                                       aria-hidden="true"></i>
                                </a>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"
                                       aria-hidden="true"></i>
                                </a>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"
                                       aria-hidden="true"></i>
                                </a>
                            </li>

                        </ul>

                    </div>


                </div>


            </div>

        </div>

    </div>

</div>

<!-- ================= FOOTER END ================= -->



<!-- ================= COPYRIGHT START ================= -->

<div class="copyright_section">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <p class="copyright_text">

                    2023 All Rights Reserved.
                    Design by

                    <a href="#">
                        Free Html Templates
                    </a>

                    Distributed By

                    <a href="#">
                        ThemeWagon
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

<!-- ================= COPYRIGHT END ================= -->



<!-- ================= JAVASCRIPT ================= -->

<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>

<script src="{{ asset('js/plugin.js') }}"></script>

<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
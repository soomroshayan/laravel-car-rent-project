<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Profile</title>

    <link rel="stylesheet"
          href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
          href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet"
          href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <style>

        .profile_image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #eeeeee;
        }

        .profile_row {
            padding: 15px 0;
            border-bottom: 1px solid #eeeeee;
        }

        .profile_label {
            font-weight: 700;
        }

    </style>

</head>


<body>


<!-- Header -->

<div class="header_section">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand"
               href="{{ url('/') }}">

                <img src="{{ asset('images/logo.png') }}">

            </a>


            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/') }}">

                            Home

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/about') }}">

                            About

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link"
                           href="{{ url('/cars') }}">

                            Vehicles

                        </a>

                    </li>


                    @if(Auth::check())

                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ url('/profile') }}">

                                Profile

                            </a>

                        </li>


                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ url('/my-bookings') }}">

                                My Bookings

                            </a>

                        </li>


                        <li class="nav-item">

                            <form action="{{ url('/logout') }}"
                                  method="POST"
                                  style="margin:0;">

                                @csrf

                                <button type="submit"
                                        class="nav-link"
                                        style="
                                        border:none;
                                        background:none;
                                        cursor:pointer;
                                        ">

                                    Logout

                                </button>

                            </form>

                        </li>

                    @endif

                </ul>

            </div>

        </nav>

    </div>

</div>



<!-- Profile Section -->

<div class="about_section layout_padding">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card shadow">

                    <div class="card-body">


                        <h1 class="text-center mb-4">

                            My Profile

                        </h1>


                        <!-- Success Message -->

                        @if(session('success'))

                            <div class="alert alert-success">

                                {{ session('success') }}

                            </div>

                        @endif


                        <!-- Profile Image -->

                        <div class="text-center mb-4">

                            @if($user->image)

                                <img
                                    src="{{ asset('images/' . $user->image) }}"
                                    class="profile_image"
                                    alt="Profile Image">

                            @else

                                <img
                                    src="{{ asset('images/img-1.png') }}"
                                    class="profile_image"
                                    alt="Profile Image">

                            @endif

                        </div>


                        <hr>


                        <!-- Name -->

                        <div class="row profile_row">

                            <div class="col-md-4 profile_label">

                                Name:

                            </div>

                            <div class="col-md-8">

                                {{ $user->name }}

                            </div>

                        </div>


                        <!-- Email -->

                        <div class="row profile_row">

                            <div class="col-md-4 profile_label">

                                Email:

                            </div>

                            <div class="col-md-8">

                                {{ $user->email }}

                            </div>

                        </div>


                        <!-- Password -->

                        <div class="row profile_row">

                            <div class="col-md-4 profile_label">

                                Password:

                            </div>

                            <div class="col-md-8">

                                {{ $user->password }}

                            </div>

                        </div>


                        <!-- Action / Role -->

                        <div class="row profile_row">

                            <div class="col-md-4 profile_label">

                                Status:

                            </div>

                            <div class="col-md-8">

                                @if($user->action == 1)

                                    Admin

                                @elseif($user->action == 2)

                                    User

                                @else

                                    Unknown

                                @endif

                            </div>

                        </div>


                        <!-- Buttons -->

                        <div class="text-center mt-4">


                            <a href="{{ url('/profile/edit') }}"
                               class="btn btn-warning">

                                <i class="fa fa-edit"></i>

                                Edit Profile

                            </a>


                            <a href="{{ url('/my-bookings') }}"
                               class="btn btn-primary ml-2">

                                My Bookings

                            </a>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Footer -->

<div class="footer_section layout_padding">

    <div class="container">

        <div class="row">

            <div class="col-md-12 text-center">

                <div class="footeer_logo">

                    <img src="{{ asset('images/logo.png') }}">

                </div>

            </div>

        </div>

    </div>

</div>



<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
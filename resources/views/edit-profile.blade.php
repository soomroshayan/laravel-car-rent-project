<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Profile</title>

    <link rel="stylesheet"
          href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
          href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet"
          href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <style>

        .edit_profile_page {
            padding: 80px 0;
        }

        .profile_image {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #eeeeee;
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

                </ul>

            </div>

        </nav>

    </div>

</div>



<!-- Edit Profile -->

<div class="edit_profile_page">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card shadow">

                    <div class="card-body p-4">


                        <h2 class="text-center mb-4">

                            Edit Profile

                        </h2>


                        <!-- Errors -->

                        @if($errors->any())

                            <div class="alert alert-danger">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <!-- Current Image -->

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


                        <!-- Form -->

                        <form action="{{ url('/profile/update') }}"
                              method="POST"
                              enctype="multipart/form-data">

                            @csrf


                            <!-- Name -->

                            <div class="form-group mb-3">

                                <label>
                                    Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name', $user->name) }}"
                                    required>

                            </div>


                            <!-- Email -->

                            <div class="form-group mb-3">

                                <label>
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email', $user->email) }}"
                                    required>

                            </div>


                            <!-- Password -->

                            <div class="form-group mb-3">

                                <label>
                                    New Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Leave blank to keep current password">

                            </div>


                            <!-- Image -->

                            <div class="form-group mb-4">

                                <label>
                                    Profile Image
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/jpeg,image/png">

                            </div>


                            <!-- Buttons -->

                            <div class="text-center">

                                <button
                                    type="submit"
                                    class="btn btn-primary">

                                    <i class="fa fa-save"></i>

                                    Update Profile

                                </button>


                                <a
                                    href="{{ url('/profile') }}"
                                    class="btn btn-secondary ml-2">

                                    Cancel

                                </a>

                            </div>


                        </form>

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
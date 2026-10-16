<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Bookings</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


    <style>

        body {
            background: #f5f5f5;
        }

        .booking_page {
            padding: 80px 0;
        }

        .booking_title {
            text-align: center;
            margin-bottom: 50px;
        }

        .booking_title h1 {
            font-weight: 700;
            font-size: 40px;
        }

        .booking_card {
            background: #ffffff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.12);
        }

        .booking_image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 8px;
        }

        .booking_car_name {
            font-size: 25px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .booking_info {
            margin-bottom: 8px;
            font-size: 15px;
        }

        .booking_info strong {
            font-weight: 700;
        }

        .status_badge {
            display: inline-block;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .booking_button {
            margin-top: 20px;
        }

        .empty_booking {
            background: #ffffff;
            padding: 50px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.10);
        }

    </style>

</head>


<body>


<div class="booking_page">

    <div class="container">


        <!-- Page Title -->

        <div class="booking_title">

            <h1>
                My Bookings
            </h1>

        </div>


        @forelse ($bookings as $booking)


            <div class="booking_card">

                <div class="row align-items-center">


                    <!-- Car Image -->

                    <div class="col-md-4 mb-4 mb-md-0">

                        @if ($booking->car && $booking->car->image)

                            <img
                                src="{{ asset('images/' . $booking->car->image) }}"
                                class="booking_image"
                                alt="{{ $booking->car->name }}">

                        @else

                            <img
                                src="{{ asset('images/img-1.png') }}"
                                class="booking_image"
                                alt="Car">

                        @endif

                    </div>



                    <!-- Booking Details -->

                    <div class="col-md-8">


                        @if ($booking->car)

                            <h2 class="booking_car_name">

                                {{ $booking->car->name }}

                            </h2>


                            <p class="booking_info">

                                <strong>Brand:</strong>

                                {{ $booking->car->brand }}

                            </p>


                            <p class="booking_info">

                                <strong>Model:</strong>

                                {{ $booking->car->model }}

                            </p>


                            <p class="booking_info">

                                <strong>Price Per Day:</strong>

                                ${{ $booking->car->price_per_day }}

                            </p>

                        @endif



                        <p class="booking_info">

                            <strong>Pickup Date:</strong>

                            {{ $booking->pickup_date }}

                        </p>


                        <p class="booking_info">

                            <strong>Return Date:</strong>

                            {{ $booking->return_date }}

                        </p>


                        <p class="booking_info">

                            <strong>Pickup Location:</strong>

                            {{ $booking->pickup_location }}

                        </p>


                        <p class="booking_info">

                            <strong>Return Location:</strong>

                            {{ $booking->return_location }}

                        </p>



                        <!-- Booking Status -->

                        <p class="booking_info">

                            <strong>Status:</strong>


                            @if ($booking->status == 1)

                                <span class="status_badge">
                                    Pending
                                </span>

                            @elseif ($booking->status == 2)

                                <span class="status_badge">
                                    Receiving
                                </span>

                            @elseif ($booking->status == 3)

                                <span class="status_badge">
                                    Processing
                                </span>

                            @elseif ($booking->status == 4)

                                <span class="status_badge">
                                    Completed
                                </span>

                            @elseif ($booking->status == 5)

                                <span class="status_badge">
                                    Cancelled
                                </span>

                            @else

                                <span class="status_badge">
                                    Unknown
                                </span>

                            @endif

                        </p>



                        <!-- Action -->

                        <p class="booking_info">

                            <strong>Booked By:</strong>


                            @if ($booking->action == 1)

                                User

                            @elseif ($booking->action == 2)

                                Admin

                            @else

                                Unknown

                            @endif

                        </p>



                        <!-- Back Home -->

                        <div class="booking_button">

                            <a
                                href="{{ url('/') }}"
                                class="btn btn-primary">

                                Back To Home

                            </a>

                        </div>


                    </div>

                </div>

            </div>


        @empty


            <div class="empty_booking">

                <h3>
                    No Bookings Found
                </h3>

                <p>
                    You have not booked any car yet.
                </p>

                <a
                    href="{{ url('/') }}"
                    class="btn btn-primary">

                    Browse Cars

                </a>

            </div>


        @endforelse


    </div>

</div>



<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
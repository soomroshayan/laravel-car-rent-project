<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verify OTP - Car Rental</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card p-4">

                <h2 class="text-center mb-4">
                    Verify Your Email
                </h2>

                <p class="text-center">
                    We have sent a 6-digit OTP to your email.
                </p>

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="/verify-otp" method="POST">

                    @csrf

                    <div class="form-group mb-3">

                        <label>Enter OTP</label>

                        <input
                            type="text"
                            name="otp"
                            class="form-control"
                            maxlength="6"
                            placeholder="Enter 6 digit OTP"
                            required>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100">

                        Verify OTP

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>
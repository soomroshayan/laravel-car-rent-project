<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password - Car Rental</title>

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
                    Forgot Password
                </h2>

                <p class="text-center">
                    Enter your registered email address.
                    We will send you an OTP.
                </p>

                @if($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="/forgot-password" method="POST">

                    @csrf

                    <div class="form-group mb-3">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="Enter your registered email"
                            required>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100">

                        Send OTP

                    </button>

                </form>

                <p class="text-center mt-3">

                    Remember your password?

                    <a href="/login">
                        Login
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>

</html>
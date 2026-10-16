<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Password - Car Rental</title>

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
                    Create New Password
                </h2>

                <p class="text-center">
                    Enter your new password below.
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

                <form action="/new-password" method="POST">

                    @csrf

                    <!-- New Password -->
                    <div class="form-group mb-3">

                        <label>New Password</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter new password"
                            required>

                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group mb-3">

                        <label>Confirm New Password</label>

                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Confirm new password"
                            required>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100">

                        Change Password

                    </button>

                </form>
                <div class="text-center mt-3">

    <a href="/forgot-password" class="mr-3">
        Back
    </a>

    <span>|</span>

    <a href="/">
        Home
    </a>

</div>

            </div>

        </div>

    </div>

</div>

</body>

</html>
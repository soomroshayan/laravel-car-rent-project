<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up - Car Rental</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card p-4">

                <h2 class="text-center mb-4">Create Account</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/signup" method="POST" enctype="multipart/form-data">

                    @csrf

                    <!-- Name -->
                    <div class="form-group mb-3">
                        <label>Name</label>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name') }}"
                            required>
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-3">
                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            required>
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-3">
                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            required>
                    </div>

                    <!-- Image -->
                    <div class="form-group mb-3">
                        <label>Profile Image</label>

                        <input
                            type="file"
                            name="image"
                            class="form-control"
                            accept="image/*"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Sign Up
                    </button>

                </form>

                <p class="text-center mt-3">
                    Already have an account?
                    <a href="/login">Login</a>
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>
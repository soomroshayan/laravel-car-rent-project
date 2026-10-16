<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Car Rental</title>

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
                    Login
                </h2>


                {{-- Success Message --}}
                @if(session('success'))

                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>

                @endif


                {{-- Error Messages --}}
                @if($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- Login Form --}}
                <form action="/login" method="POST">

                    @csrf


                    <!-- Email -->
                    <div class="form-group mb-3">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            required>

                    </div>


                    <!-- Password -->
                    <div class="form-group mb-3">

                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Enter your password"
                            required>

                    </div>


                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="btn btn-primary w-100">

                        Login

                    </button>

                </form>


                <!-- Forgot Password -->
                <div class="text-center mt-3">

                    <a href="/forgot-password">
                        Forgot Password?
                    </a>

                </div>


                <!-- Signup -->
                <p class="text-center mt-3">

                    Don't have an account?

                    <a href="/signup">
                        Sign Up
                    </a>

                </p>

            </div>

        </div>

    </div>

</div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $car->name }} - Car Details</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

    <div class="container py-5">

        <div class="row">

            <!-- Car Details -->
            <div class="col-md-6">

                <div class="gallery_box">

                    @if ($car->image)
                        <img
                            src="{{ asset('images/' . $car->image) }}"
                            alt="{{ $car->name }}"
                            class="img-fluid">
                    @else
                        <img
                            src="{{ asset('images/img-1.png') }}"
                            alt="{{ $car->name }}"
                            class="img-fluid">
                    @endif

                    <h2 class="mt-4">{{ $car->name }}</h2>

                    <p>
                        <strong>Brand:</strong>
                        {{ $car->brand }}
                    </p>

                    <p>
                        <strong>Model:</strong>
                        {{ $car->model }}
                    </p>

                    <p>
                        <strong>Year:</strong>
                        {{ $car->year }}
                    </p>

                    <p>
                        <strong>Price Per Day:</strong>
                        ${{ $car->price_per_day }}
                    </p>

                    <p>
                        <strong>Description:</strong>
                        {{ $car->description }}
                    </p>

                </div>

            </div>


            <!-- Booking Form -->
            <div class="col-md-6">

                <div class="card p-4">

                    <h2 class="mb-4">Book This Car</h2>

                    <form action="/book-car/{{ $car->id }}" method="POST">

                        @csrf

                        <div class="form-group mb-3">
                            <label>Name</label>

                           <input
    type="text"
    name="name"
    class="form-control"
    value="{{ Auth::user()->name }}"
    readonly>
                        </div>


                        <div class="form-group mb-3">
                            <label>Email</label>

                           <input
    type="email"
    name="email"
    class="form-control"
    value="{{ Auth::user()->email }}"
    readonly>
                        </div>


                        <div class="form-group mb-3">
                            <label>Phone</label>

                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                placeholder="Enter your phone number"
                                required>
                        </div>


                        <div class="form-group mb-3">
                            <label>Pickup Date</label>

                            <input
                                type="date"
                                name="pickup_date"
                                class="form-control"
                                required>
                        </div>


                        <div class="form-group mb-3">
                            <label>Return Date</label>

                            <input
                                type="date"
                                name="return_date"
                                class="form-control"
                                required>
                        </div>


                        <div class="form-group mb-3">
                            <label>Pickup Location</label>

                            <input
                                type="text"
                                name="pickup_location"
                                class="form-control"
                                placeholder="Enter pickup location"
                                required>
                        </div>


                        <div class="form-group mb-3">
                            <label>Return Location</label>

                            <input
                                type="text"
                                name="return_location"
                                class="form-control"
                                placeholder="Enter return location"
                                required>
                        </div>


                        <div class="form-group mb-3">
                            <label>Message</label>

                            <textarea
                                name="message"
                                class="form-control"
                                rows="4"
                                placeholder="Any special request?"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary w-100">
                            Book Car
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
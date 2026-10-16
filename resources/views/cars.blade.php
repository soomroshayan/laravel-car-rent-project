<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Cars</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

<div class="container py-5">

    <h1 class="text-center mb-5">
        Our Cars
    </h1>

    <div class="row">

        @forelse ($cars as $car)

            <div class="col-md-4 mb-4">

                <div class="card h-100">

                    @if($car->image)

                        <img
                            src="{{ asset('images/' . $car->image) }}"
                            class="card-img-top"
                            alt="{{ $car->name }}">

                    @else

                        <img
                            src="{{ asset('images/img-1.png') }}"
                            class="card-img-top"
                            alt="Car">

                    @endif


                    <div class="card-body">

                        <h4>
                            {{ $car->name }}
                        </h4>

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
                            {{ $car->description }}
                        </p>


                        <a
                            href="{{ url('/rent/' . $car->id) }}"
                            class="btn btn-primary">

                            Rent Now

                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12">

                <div class="alert alert-info text-center">

                    No cars available right now.

                </div>

            </div>

        @endforelse

    </div>

</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
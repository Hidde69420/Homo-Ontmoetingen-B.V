<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homo Ontmoetingen B.V</title>
</head>

<body>
    <!-- Draw the star as a symbol and remove it from view -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="star" viewBox="214.7 0 182.6 792">
            <!-- <path>s and whatever other shapes in here -->
        </symbol>
    </svg>

    <div class="navbar">
        <div class="col-3">
            <a href="/">Home</a>
        </div>
        <div class="col-3">
            <a href="onzehomos">Onze Homos</a>
        </div>
        <div class="col-3">
            <a href="blog">review's</a>
        </div>
        <div class="col-3">
            <a href="contact">Contact</a>
        </div>
    </div>
    <div class="content">

        @foreach ($reviews as $item)
            <div class="container">
                <div class="review">
                    <div class="row">
                        <div class="col-12">
                            <h1>{{ $item->name }}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="stars">
                        @for ($i = 0; $i < $item->rateing; $i++)
                            <div class="clip-star"></div>
                        @endfor
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12">
                            <p>
                            @php
                                echo($item->text);
                            @endphp
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="container">
            <div class="footer">
                <p>Een websiote door BierPloeg Webdesing B.V voor Homo Ontmoetingen B.V</p>
            </div>
        </div>
</body>

</html>

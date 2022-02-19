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
    <div class="navbar">
        <div class="col-3">
            <a href="/">Home</a>
        </div>
        <div class="col-3">
            <a href="onzehomos">Onze Homos</a>
        </div>
        <div class="col-3">
            <a href="review">review's</a>
        </div>
        <div class="col-3">
            <a href="contact">Contact</a>
        </div>
    </div>
    <div class="content">

        @foreach ($Gays as $item)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>{{ $item->name }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p>{{ $item->bio }}</p>
                    </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{ $item->img_path }}" alt="Hele mooie foto">
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

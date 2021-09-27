<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        
        .tail{
            background-color: black;
        }
       /* .carousel{
            height: 50vh;
        } */
    </style>
</head>
<body>
    <div class="top">
        @include('frontend.components.navbar')
    </div>
    <div class="body">
        @yield('content')
    </div>
    <div class="tail">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-4 text-white-50">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam amet facere consectetur possimus, et aut sequi sint tenetur magnam rerum porro quisquam quasi impedit earum commodi sit exercitationem nihil est culpa fuga eveniet praesentium autem cumque. Sint quas id pariatur?
                </div>
                <div class="col-md-4">
                    <ul class="text-white-50">
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="text-white-50">
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
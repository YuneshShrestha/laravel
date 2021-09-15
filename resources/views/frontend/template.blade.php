<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .top{
            height: 20vh ;
            background-color: black;
        }
        .body{
            height: 40vh ;
        }
        .tail{
            height: 20vh ;
            background-color: pink
        }
    </style>
</head>
<body>
    <div class="top">

    </div class="body">
    <div>
        @yield('content')
    </div>
    <div class="tail">

    </div>
</body>
</html>
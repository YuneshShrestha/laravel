<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
              <a class="navbar-brand text-white" href="/">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/service">Service</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled text-white">Disabled</a>
                  </li>
                </ul>
               
              </div>
            </div>
          </nav>
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
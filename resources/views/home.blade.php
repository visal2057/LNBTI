<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .con2{
            display:flex;
            flex-direction: column;
            justify-content: center;
            color: black;
            padding-top: 100px;
        }
        .social-icons {
            padding-top: 150px;
        }
    </style>
</head>
<body class="m-0">
    <div class="container-fluid m-0 p-0">
        <div class="row min-vh-100 g-0">
            <div class="col-md-6 bg-light p-0">
                <img src="{{ asset('images/front.png') }}" alt="Preview Image" class="img-fluid w-100 h-100">
            </div>
            <div class="col-md-6 bg-light text-white p-4">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid container">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav d-flex justify-content-center w-100 mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/home2') }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/aboutus') }}">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact') }}">CONTACT US</a>
                                </li>
                            </ul>
                        </div>
                        <div class="container text-center mt-5 con2">
                            <h1 class="display-4">Welcome</h1>
                        <p>Discover your next great read in our carefully curated collection. 
                           Whether you crave heart-pounding action, sweeping historical epics, captivating romance, or mind-bending sci-fi, we have stories that will transport you to new worlds.
                           Browse our shelves and let your literary adventure begin
                        </p>
                        </div>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-instagram text-dark fs-4"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-3 fs-4"></i></a>
                            <a href="#"><i class="bi bi-twitter text-dark fs-4"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
       
        #carouselExampleIndicators {
            position: relative;
            overflow: hidden;
            height: 400px;
        }
        
        .carousel-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: blur(10px) brightness(0.7);
            z-index: 0;
        }
        
        .carousel-inner {
            position: relative;
            z-index: 1;
            height: 100%;
        }
        
        .carousel-item > .center-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        .carousel-item img {
            max-height: 380px;
            width: auto;
            max-width: 800px;
            object-fit: contain;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px;
        }
        
        .card {
            width: 22rem;
        }
         
        .card-horizontal {
            display: flex;
            flex-direction: row;
            height: 100%;
        }

        .card-horizontal img {
            width: 150px;
            object-fit: cover;
        }
        
        
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }
        
        footer a {
            color: #ffffff;
            text-decoration: none;
        }
        
        footer a:hover {
            text-decoration: underline;
        }
        
       
        .section-header {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .section-header h5 {
            font-size: 2rem;
            font-weight: 300;
            position: relative;
            display: inline-block;
        }
        
        .section-header h5:after {
            content: "";
            position: absolute;
            width: 50px;
            height: 2px;
            background: #007bff;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand p-0 m-0" href="{{url('/home')}}"><img src="{{asset('images/Preview.png')}}" height="50px" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/home2')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('/action')}}">Action</a></li>
                            <li><a class="dropdown-item" href="{{url('/history')}}">History</a></li>
                            <li><a class="dropdown-item" href="{{url('/romantic')}}">Romantic</a></li>
                            <li><a class="dropdown-item" href="{{url('/sci-fi')}}">Sci-Fi</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="{{url('/cart')}}" class="btn btn-outline-secondary me-3">
                    <i class="bi bi-cart"></i>
                </a>      
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <a href="{{url('/login')}}" class="btn btn-outline-primary ms-3">Login</a>
            </div>
        </div>
    </nav>

   
    <div id="carouselExampleIndicators" class="carousel slide">
       
        <div class="carousel-backdrop"></div>
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="center-wrapper">
                    <img src="{{asset('images/back1.png')}}" class="d-block" alt="Book Cover 1">
                </div>
            </div>
            <div class="carousel-item">
                <div class="center-wrapper">
                    <img src="{{asset('images/back2.png')}}" class="d-block" alt="Book Cover 2">
                </div>
            </div>
            <div class="carousel-item">
                <div class="center-wrapper">
                    <img src="{{asset('images/back3.png')}}" class="d-block" alt="Book Cover 3">
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

  
    <div class="main">
        <div class="section-header">
            <h5>Popular</h5>
        </div>

        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/ac1.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">Silent Shadow</h5>
                            <p class="card-text">Elena Voss</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-2">4.5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/h8.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">The Samurai’s Heart</h5>
                            <p class="card-text">Hiroshi Tanaka</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <span class="ms-2">4.0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/h1.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">The Siege of Lions</h5>
                            <p class="card-text">Sebastian Graves</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="ms-2">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <div class="main">
        <div class="section-header">
            <h5>Trending</h5>
        </div>

        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/r9.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">The Royal Affair</h5>
                            <p class="card-text">Clara Kensington </p>
                            <span class="badge bg-danger">Bestseller</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/h6.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">Gladiator’s Oath</h5>
                            <p class="card-text">Marcus Aurelius Varro </p>
                            <span class="badge bg-success">New Release</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-horizontal">
                        <img src="{{asset('images/s7.png')}}" class="img-fluid" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">Ghost Fleet Alpha</h5>
                            <p class="card-text">Jax Sorenson</p>
                            <span class="badge bg-primary">Editor's Pick</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Book Nest</h5>
                    <p>123 Story Avenue<br>Bookville, BV 12345</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Hours</h5>
                    <p>Mon-Fri: 9am-8pm<br>Sat-Sun: 10am-6pm</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Connect</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Book Nest. All stories welcome.</p>
            </div>
        </div>
    </footer>


    <script>
      
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carouselExampleIndicators');
            const backdrop = carousel.querySelector('.carousel-backdrop');
            const carouselItems = carousel.querySelectorAll('.carousel-item');
            
            
            carousel.addEventListener('slid.bs.carousel', function() {
                const activeItem = carousel.querySelector('.carousel-item.active');
                const imgSrc = activeItem.querySelector('img').src;
                backdrop.style.backgroundImage = `url('${imgSrc}')`;
            });
            
           
            const firstImg = carousel.querySelector('.carousel-item.active img').src;
            backdrop.style.backgroundImage = `url('${firstImg}')`;
        });
    </script>
</body>
</html>
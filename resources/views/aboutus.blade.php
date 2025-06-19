<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Book Nest - Your Literary Haven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .hero-section {
            background: url('{{ asset('/') }}') no-repeat center center;
            background-size: cover;
            min-height: 400px;
        }
        .team-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 3px solid #f8f9fa;
        }
        .value-card {
            transition: transform 0.3s;
        }
        .value-card:hover {
            transform: translateY(-10px);
        }
        .testimonial-img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand p-0 m-0" href="{{ url('/home') }}"><img src="{{ asset('images/preview.png') }}" height="50px" width="50px"></a>
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
      <a href="#" class="btn btn-outline-secondary me-3">
        <i class="bi bi-cart"></i>
      </a>      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i></button>
      </form>
      <a href="{{url('/login')}}" class="btn btn-outline-primary ms-3">Login</a>
    </div>
  </div>
</nav>
 
    <section class="hero-section d-flex align-items-center text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-dark bg-opacity-75 p-5 rounded">
                    <h1 class="display-3 fw-bold">Our Story</h1>
                    <p class="lead">From a dream to your favorite reading nook since 2015</p>
                </div>
            </div>
        </div>
    </section>

    
    <div class="container py-5">
      
        <section class="row align-items-center py-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Why We Exist</h2>
                <p class="lead">In a world of algorithms, we believe in human-curated stories.</p>
                <p>Book Nest was born from a simple idea: what if a bookstore could feel like your most literate friend's personal library? Our team reads every book we stock, and we'll never recommend something we don't love.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/about.png') }}" alt="Book Nest interior" class="img-fluid rounded shadow">
            </div>
        </section>

       
        <section class="py-5 text-center">
            <h2 class="fw-bold mb-5">Meet Your Book Matchmakers</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/sarah.jpeg') }}" alt="Sarah" class="rounded-circle team-img mb-3 shadow">
                    <h4>Sarah</h4>
                    <p class="text-muted">Head Bookworm</p>
                    <p>"Fantasy worlds are my happy place. Ask me about underrated indie authors!"</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/david.jpg') }}" alt="David" class="rounded-circle team-img mb-3 shadow">
                    <h4>David</h4>
                    <p class="text-muted">Nonfiction Guru</p>
                    <p>"I'll find you that perfect biography or science read you didn't know you needed."</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/priya.jpeg') }}" alt="Priya" class="rounded-circle team-img mb-3 shadow">
                    <h4>Priya</h4>
                    <p class="text-muted">Children's Lit Expert</p>
                    <p>"Nothing beats seeing a child discover their first chapter book love."</p>
                </div>
            </div>
        </section>

       
        <section class="py-5 bg-light rounded">
            <h2 class="fw-bold text-center mb-5">Our Core Values</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-heart-fill text-danger fs-1 mb-3"></i>
                            <h4>Curated With Care</h4>
                            <p>No algorithms - just passionate humans selecting each title.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                            <h4>Community First</h4>
                            <p>We host free literacy programs and support local schools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card value-card h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-tree-fill text-success fs-1 mb-3"></i>
                            <h4>Sustainable Stories</h4>
                            <p>We use eco-friendly packaging and partner with green publishers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   
        <section class="py-5">
            <h2 class="fw-bold text-center mb-5">What Readers Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('images/jamie.jpeg')}}" alt="Jamie" class="rounded-circle testimonial-img me-3">
                                <div>
                                    <h5 class="mb-0">Jamie L.</h5>
                                    <small class="text-muted">Regular since 2018</small>
                                </div>
                            </div>
                            <p>"Found my all-time favorite book here—the staff recommendation changed my life!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('images/marcus.jpeg')}}" alt="Marcus" class="rounded-circle testimonial-img me-3">
                                <div>
                                    <h5 class="mb-0">Marcus T.</h5>
                                    <small class="text-muted">Book Club Member</small>
                                </div>
                            </div>
                            <p>"The Sci-Fi Saturdays group introduced me to my now-favorite authors. Such a welcoming space."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('images/elena.jpeg')}}" alt="Elena" class="rounded-circle testimonial-img me-3">
                                <div>
                                    <h5 class="mb-0">Elena K.</h5>
                                    <small class="text-muted">Local Teacher</small>
                                </div>
                            </div>
                            <p>"Their children's book recommendations are spot-on. My students love their school visits!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-dark text-white text-center rounded">
            <h2 class="fw-bold mb-5">By the Numbers</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 fw-bold">8,000+</h3>
                    <p>Books in stock</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 fw-bold">142</h3>
                    <p>Author events hosted</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 fw-bold">3</h3>
                    <p>Shop cats</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="display-4 fw-bold">∞</h3>
                    <p>Cups of tea consumed</p>
                </div>
            </div>
        </section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
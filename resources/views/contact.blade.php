<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Book Nest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .contact-hero {
            background: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url('{{ asset('images/back.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 300px;
        }
        .contact-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .form-control:focus {
            border-color: #6c757d;
            box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.25);
        }
        .btn-booknest {
            background-color: #5e3a1f;
            color: white;
        }
        .btn-booknest:hover {
            background-color: #4a2e18;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand p-0 m-0" href="{{url('/home')}}"><img src="{{asset('images/preview.png')}}" height="50px" width="50px"></a>
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
      <a href="../pages/login.html" class="btn btn-outline-primary ms-3">Login</a>
    </div>
  </div>
</nav>
    <section class="contact-hero d-flex align-items-center text-white">
        <div class="container text-center py-5">
            <h1 class="display-4 fw-bold">Get in Touch</h1>
            <p class="lead">We'd love to hear from you</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card contact-card h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Send us a message</h3>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" required>
                                    <option value="" selected disabled>Select a topic</option>
                                    <option value="order">Order Inquiry</option>
                                    <option value="event">Event Booking</option>
                                    <option value="suggestion">Book Suggestion</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-booknest btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card contact-card h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Contact Information</h3>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="bi bi-geo-alt-fill fs-3"></i>
                            </div>
                            <div>
                                <h5>Visit Us</h5>
                                <p class="mb-0">22/3 Parakum Mawatha<br>Maharagama, LC 12345</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="bi bi-telephone-fill fs-3"></i>
                            </div>
                            <div>
                                <h5>Call Us</h5>
                                <p class="mb-0">+94 (70) 123-4567<br>Mon-Fri, 9am-5pm</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="bi bi-envelope-fill fs-3"></i>
                            </div>
                            <div>
                                <h5>Email Us</h5>
                                <p class="mb-0">hello@booknest.com<br>orders@booknest.com</p>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-dark"><i class="bi bi-facebook fs-3"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram fs-3"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-twitter fs-3"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-goodreads fs-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card contact-card">
                    <div class="card-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215209132773!2d-73.9878449245377!3d40.74844097138959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1690833524256!5m2!1sen!2sus" 
                                width="100%" 
                                height="400" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="rounded"></iframe>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>
</body>
</html>
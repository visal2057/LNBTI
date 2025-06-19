<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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
    .card-horizontal .card-body {
  display: flex;
  flex-direction: column;
  justify-content: space-between; 
}
@media (max-width: 768px) {
            .card-horizontal {
                flex-direction: column;
            }
            .card-horizontal img {
                width: 100%;
                height: 200px;
            }
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
                    <button class="btn btn-outline-success" type="submit"> <i class="bi bi-search"></i></button>
                </form>
                <a href="{{url('/login')}}" class="btn btn-outline-primary ms-3">Login</a>
            </div>
        </div>
    </nav>
<div class="main">
    <div class="card shadow mb-4 w-100">
      <div class="card-body text-center">
        <h3 class="card-title">Romantic</h3>
      </div>
    </div>

    <div class="container">
      <div class="row g-4">
        
        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r3.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">The Kiss Quotient</h5>
              <p class="card-text">Helen Hoang</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r1.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beach Read</h5>
              <p class="card-text">Emily Henry</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r2.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">A Court of Thorns and Roses</h5>
              <p class="card-text">Sarah J. Maas</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r4.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">The Hating Game"</h5>
              <p class="card-text">Sally Thorne</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r5.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Outlander</h5>
              <p class="card-text"> Diana Gabaldon</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r6.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bridgerton: The Duke and I</h5>
              <p class="card-text">Julia Quinn</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r7.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">The Love Hypothesis</h5>
              <p class="card-text"> Ali Hazelwood</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r8.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">People We Meet on Vacation</h5>
              <p class="card-text">Emily Henry</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-horizontal">
            <img src="{{asset('images/r9.png')}}" class="img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">The Royal Affair</h5>
              <p class="card-text">Clara Kensington</p>
              <p class="card-text"><strong>Price: $12.99</strong></p>
              <div class="mb-2">
                <label for="quantity-silent-shadow" class="form-label">Quantity:</label>
                <input type="number" id="quantity-silent-shadow" name="quantity" value="1" min="1" class="form-control form-control-sm w-50 text-center">
              </div>
                <div class="d-flex justify-content-end gap-2">
                  <a href="#" class="btn btn-outline-primary btn-sm add-to-cart">
                    <i class="bi bi-cart"></i> Add to Cart
                  </a>
                  <a href="#" class="btn btn-success btn-sm direct-checkout">
                    <i class="bi bi-cash-coin"></i> Checkout
                  </a>
                </div>
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
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.card-horizontal');
                    const title = card.querySelector('.card-title').innerText;
                    const price = parseFloat(card.querySelector('strong').innerText.replace('Price: $', ''));
                    const quantity = parseInt(card.querySelector('input[type="number"]').value) || 1;
                    const image = card.querySelector('img').src;

                    let cart = JSON.parse(localStorage.getItem('cart')) || [];
                    
                    const existingItem = cart.find(item => item.title === title);
                    if (existingItem) {
                        existingItem.quantity += quantity;
                    } else {
                        cart.push({ title, price, quantity, image });
                    }

                    localStorage.setItem('cart', JSON.stringify(cart));
                    alert(`${title} added to cart!`);
                });
            });

            document.querySelectorAll('.direct-checkout').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.card-horizontal');
                    const title = card.querySelector('.card-title').innerText;
                    const price = parseFloat(card.querySelector('strong').innerText.replace('Price: $', ''));
                    const quantity = parseInt(card.querySelector('input[type="number"]').value) || 1;
                    const image = card.querySelector('img').src;

                    const cart = [{ title, price, quantity, image }];
                    localStorage.setItem('cart', JSON.stringify(cart));

                    window.location.href = "{{url('/checkout')}}";
                });
            });

            document.querySelector('.bi-cart').parentElement.addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = "{{url('/cart')}}";
            });

            document.querySelector('.btn-outline-primary.ms-3').addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = "{{url('/login')}}";
            });
        });
    </script>
</body>
</html>
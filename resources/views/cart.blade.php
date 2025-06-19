<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    html, body {
        height: 100%;
    }
    
    body {
        display: flex;
        flex-direction: column;
    }
    
    .container.mt-4 {
        flex: 1;
    }
    
    footer {
        margin-top: auto;
    }
    
    .cart-img {
      width: 100px;
      height: auto;
      object-fit: cover;
    }
    .cart-item {
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .qty-btn {
      width: 32px;
      height: 32px;
      padding: 0;
      font-size: 18px;
    }
    .quantity {
      width: 40px;
      text-align: center;
      display: inline-block;
    }
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand p-0 m-0" href="..'{{url('/home')}}"><img src="{{asset('images/Preview.png')}}" height="50px" width="50px"></a>
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
  <div class="container mt-4">
    <h2 class="mb-4">🛒 Your Cart</h2>
    <div id="cart-items"></div>
    <h4 class="mt-4 text-end">Total: $<span id="cart-total">0.00</span></h4>
    <div class="text-end mt-3">
      <a href="{{url('/checkout')}}" class="btn btn-success">Proceed to Checkout</a>
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
    function renderCart() {
      const cartContainer = document.getElementById("cart-items");
      const cart = JSON.parse(localStorage.getItem("cart")) || [];
      cartContainer.innerHTML = "";

      let total = 0;

      if (cart.length === 0) {
        cartContainer.innerHTML = "<p>Your cart is empty.</p>";
        document.getElementById("cart-total").innerText = "0.00";
        return;
      }

      cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        const itemDiv = document.createElement("div");
        itemDiv.classList.add("row", "cart-item", "align-items-center");
        itemDiv.innerHTML = `
          <div class="col-md-2">
            <img src="${item.image}" class="cart-img img-fluid" alt="${item.title}">
          </div>
          <div class="col-md-4">
            <h5>${item.title}</h5>
            <p class="mb-1">Price: $${item.price.toFixed(2)}</p>
            <p class="mb-1">
              Quantity:
              <button class="btn btn-secondary btn-sm qty-btn" onclick="updateQuantity(${index}, -1)">−</button>
              <span class="quantity">${item.quantity}</span>
              <button class="btn btn-secondary btn-sm qty-btn" onclick="updateQuantity(${index}, 1)">+</button>
            </p>
            <p class="mb-1">Subtotal: $${itemTotal.toFixed(2)}</p>
          </div>
          <div class="col-md-3 text-end">
            <button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Remove</button>
          </div>
        `;
        cartContainer.appendChild(itemDiv);
      });

      document.getElementById("cart-total").innerText = total.toFixed(2);
    }

    function updateQuantity(index, change) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart[index].quantity += change;
      if (cart[index].quantity < 1) {
        cart[index].quantity = 1;
      }
      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart();
    }

    function removeFromCart(index) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart();
    }

    document.addEventListener("DOMContentLoaded", renderCart);
  </script>
</body>
</html>
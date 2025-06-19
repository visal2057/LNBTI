<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
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
  <div class="container my-5">
    <h2 class="mb-4">Checkout</h2>
    <div class="row">
      
      <div class="col-md-6">
        <h4>Billing Information</h4>
        <form id="checkoutForm">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required />
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" required />
          </div>
          <div class="mb-3">
            <label for="payment" class="form-label">Payment Method</label>
            <select class="form-select" id="payment" required>
              <option value="">Choose...</option>
              <option>Credit Card</option>
              <option>Debit Card</option>
              <option>Cash on Delivery</option>
            </select>
          </div>
        </form>
      </div>

     
      <div class="col-md-6">
        <h4>Your Order</h4>
        <ul class="list-group mb-3" id="cartItems">
         
        </ul>
        <div class="d-flex justify-content-between mb-3">
          <strong>Total:</strong>
          <strong id="totalPrice">$0.00</strong>
        </div>
        <button class="btn btn-success w-100" onclick="placeOrder()">Place Order</button>
      </div>
    </div>
  </div>

  <script>
   
    const cartItems = JSON.parse(localStorage.getItem("cart")) || [];

    function renderCart() {
      const cartList = document.getElementById("cartItems");
      const totalElement = document.getElementById("totalPrice");
      cartList.innerHTML = "";
      let total = 0;

      if (cartItems.length === 0) {
        cartList.innerHTML = `<li class="list-group-item">Your cart is empty.</li>`;
        totalElement.textContent = "$0.00";
        return;
      }

      cartItems.forEach((item) => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        const listItem = document.createElement("li");
        listItem.className = "list-group-item d-flex justify-content-between align-items-center";
        listItem.innerHTML = `
          <div>
            <strong>${item.title}</strong><br>
            <small>Quantity: ${item.quantity}</small>
          </div>
          <span>$${itemTotal.toFixed(2)}</span>
        `;
        cartList.appendChild(listItem);
      });

      totalElement.textContent = `$${total.toFixed(2)}`;
    }

    function placeOrder() {
      alert("Order placed successfully!");
      localStorage.removeItem("cart");
      window.location.href = "thankyou.html"; 
    }

    renderCart();
  </script>
  <script src="../assets/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

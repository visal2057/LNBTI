<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Book Nest</title>
 
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #ffffff; 
      margin: 0;
    }

    .login-card {
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      border: 1px solid #ccc;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
      background-color: #fff;
      animation: fadeInUp 1s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 1rem;
      display: block;
    }

    .login-header {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .forgot-link {
      text-align: center;
      display: block;
      margin-top: 0.5rem;
      font-size: 0.9rem;
    }

    .btn-blue {
      background-color: #007bff;
      color: white;
      border: none;
    }

    .btn-blue:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <img
      src="{{asset('images/Preview.png')}}"
      alt="Logo"
      class="login-logo"
    />
    <div class="login-header">
      <h4>Welcome to Book Nest</h4>
    </div>
    <form>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          placeholder="Username"
          required
        />
      </div>
      <div class="mb-3">
        <input
          type="password"
          class="form-control"
          placeholder="Password"
          required
        />
      </div>
      <a href="#" class="forgot-link">Forgot your password?</a>
      <div class="d-grid mt-3">
        <button type="submit" class="btn btn-blue">Login</button>
      </div>
    </form>
  </div>

  
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>

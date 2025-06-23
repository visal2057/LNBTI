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
        
        
        .star {
            font-size: 24px;
            color: gray;
            cursor: pointer;
        }

        .star.selected,
        .star:hover,
        .star:hover ~ .star {
            color: gold;
        }
        
        .book-image {
            max-width: 150px;
            height: auto;
            margin-bottom: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .book-info {
            text-align: center;
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
     <div class="container mt-5">
        <div class="col-12 col-lg-8 mx-auto"> <!-- Single column container -->
            <!-- Book Info Section - Centered -->
            <div class="card mb-4">
                 <div class="card-header  text-dark bg-light">
                    <h5 class="mb-0 book-info">The Kiss Quotient</h5>
                </div>
                <div class="card-body book-info">
                    <img src="{{asset('images/r3.png')}}" class="book-image" alt="Book Image">
                    <p class="card-text">Brilliant econometrician Stella Lane understands algorithms better than attraction. Diagnosed with autism, she hires escort Michael Phan to practice intimacy—strictly business, with a detailed lesson plan. But when their no-strings arrangement ignites unexpected passion, Stella's perfectly logical heart discovers something data can't measure. Now she must decode the messy variables of love before her past sabotages their future.</p>
                </div>
            </div>

            <!-- Review Form Section -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Leave a Review for <strong>The Kiss Quotient</strong></h5>
                </div>
                <div class="card-body">
                    <!-- Rating Stars -->
                    <div class="mb-3">
                        <label class="form-label">Your Rating:</label>
                        <div id="star-rating">
                            <i class="bi bi-star-fill star" data-value="1"></i>
                            <i class="bi bi-star-fill star" data-value="2"></i>
                            <i class="bi bi-star-fill star" data-value="3"></i>
                            <i class="bi bi-star-fill star" data-value="4"></i>
                            <i class="bi bi-star-fill star" data-value="5"></i>
                        </div>
                    </div>

                    <!-- Review Text -->
                    <div class="mb-3">
                        <label for="review" class="form-label">Your Review:</label>
                        <textarea class="form-control" id="review" rows="3" placeholder="Write your thoughts..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button class="btn btn-success" onclick="submitReview()">Submit Review</button>
                </div>
            </div>

            <!-- Reviews Display Section -->
            <div class="card">
                <div class="card-body">
                    <h5>Reviews:</h5>
                    <ul class="list-group" id="reviews-list">
                        <!-- Example Static Review -->
                        <li class="list-group-item">
                            <strong>★★★★☆</strong> - Great book, really enjoyed it!
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <footer class="bg-dark text-white py-5 mt-5">
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
        const stars = document.querySelectorAll(".star");
        let selectedRating = 0;

        stars.forEach((star) => {
            star.addEventListener("click", () => {
                selectedRating = parseInt(star.getAttribute("data-value"));
                updateStarColors();
            });
        });

        function updateStarColors() {
            stars.forEach((star, index) => {
                star.classList.toggle("selected", index < selectedRating);
            });
        }

        function submitReview() {
            const reviewText = document.getElementById("review").value;

            if (selectedRating === 0 || reviewText.trim() === "") {
                alert("Please add both a rating and a review.");
                return;
            }

            // Show the review in the list (temporarily)
            const list = document.getElementById("reviews-list");
            const newReview = document.createElement("li");
            newReview.classList.add("list-group-item");

            const starsDisplay = "★".repeat(selectedRating) + "☆".repeat(5 - selectedRating);
            newReview.innerHTML = `<strong>${starsDisplay}</strong> - ${reviewText}`;

            list.appendChild(newReview);

            // Clear inputs
            document.getElementById("review").value = "";
            selectedRating = 0;
            updateStarColors();
        }
    </script>
</body>
</html>
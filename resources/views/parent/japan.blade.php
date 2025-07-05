<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explore Japan - Travaia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; }

    .hero {
      background: url('{{ asset("images/tokiyo.jpg") }}') center center/cover no-repeat;
      height: 80vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 1px 1px 3px black;
    }

    .top-destinations-section {
      background: url('{{ asset("images/topdest.jpg") }}') center center/cover no-repeat;
      padding: 5rem 0;
      color: white;
    }

    .top-destinations-section .card img {
      height: 250px;
      object-fit: cover;
    }

    .travel-packages {
      background: url('{{ asset("images/img2.jpg") }}') center center/cover no-repeat;
      padding: 5rem 0;
      color: white;
    }

    .travel-packages .card {
      background-color: rgba(255, 255, 255, 0.9);
      border: none;
    }

    .japan-intro {
      background: url('{{ asset("images/tokiyo.jpg") }}') center center/cover no-repeat;
      min-height: 500px;
      display: flex;
      align-items: center;
    }

    .japan-intro .container {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 2rem;
      border-radius: 1rem;
    }

    footer {
      background: #000;
      color: white;
      padding: 1rem 0;
    }

    .card-title {
      font-weight: bold;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#">Travaia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('/index') }}">Home</a></li>
        <li class="nav-item"><a href="{{ url('/cart/japan') }}" class="btn btn-primary">Japan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
        <li class="nav-item"><a href="{{ route('cart.country', ['country' => 'japan']) }}">View Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Success Message -->
@if(session('success'))
  <div class="alert alert-success text-center m-3">
    {{ session('success') }}
  </div>
@endif

<!-- Hero -->
<header class="hero text-center">
  <div>
    <h1 class="display-3">Discover Japan</h1>
    <p class="lead fst-italic">Land of the Rising Sun</p>
  </div>
</header>

<!-- Top Destinations -->
<section class="top-destinations-section text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">Top Destinations</h2>
    <p>Explore iconic places across Japan</p>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('images/pic1.jpg') }}" class="card-img-top" alt="Tokyo">
          <div class="card-body">
            <h5 class="card-title">Tokyo</h5>
            <p>A vibrant blend of traditional culture and futuristic tech.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('images/kyoto.jpg') }}" class="card-img-top" alt="Kyoto">
          <div class="card-body">
            <h5 class="card-title">Kyoto</h5>
            <p>Home to countless shrines, temples, and tea houses.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow">
          <img src="{{ asset('images/mount-fujji.jpg') }}" class="card-img-top" alt="Mount Fuji">
          <div class="card-body">
            <h5 class="card-title">Mount Fuji</h5>
            <p>Japan's tallest peak, ideal for hiking and photography.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Travel Packages -->
<section class="travel-packages text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">Travel Packages</h2>
    <p>Select your favorite package to explore Japan</p>
    <div class="row g-4 mt-4">

      <!-- Tokyo -->
      <div class="col-md-4">
        <div class="card h-100 shadow p-4">
          <h5 class="card-title">Tokyo Tour</h5>
          <p>3 Days | 2 Nights - $350</p>
          <form method="POST" action="{{ route('cart.add') }}">
            @csrf
            <input type="hidden" name="country" value="japan">
            <input type="hidden" name="package" value="Tokyo Tour">
            <input type="hidden" name="price" value="350">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>

      <!-- Kyoto -->
      <div class="col-md-4">
        <div class="card h-100 shadow p-4">
          <h5 class="card-title">Kyoto Cultural Trip</h5>
          <p>4 Days | 3 Nights - $450</p>
          <form method="POST" action="{{ route('cart.add') }}">
            @csrf
            <input type="hidden" name="country" value="japan">
            <input type="hidden" name="package" value="Kyoto Cultural Trip">
            <input type="hidden" name="price" value="450">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>

      <!-- Mount Fuji -->
      <div class="col-md-4">
        <div class="card h-100 shadow p-4">
          <h5 class="card-title">Mount Fuji Adventure</h5>
          <p>2 Days | 1 Night - $280</p>
          <form method="POST" action="{{ route('cart.add') }}">
            @csrf
            <input type="hidden" name="country" value="japan">
            <input type="hidden" name="package" value="Mount Fuji Adventure">
            <input type="hidden" name="price" value="280">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ url('/cart') }}" class="btn btn-success">Go to Cart</a>
    </div>
  </div>
</section>

<!-- Japan Intro -->
<section class="japan-intro text-white text-center">
  <div class="container">
    <h2 class="display-4 fw-bold">Welcome to Japan</h2>
    <p class="lead">From neon-lit cities to peaceful temples, Japan is a blend of past and future.</p>
  </div>
</section>

<!-- Map -->
<section class="bg-dark text-white py-5">
  <div class="container">
    <h3 class="text-center mb-4">Visit Japan</h3>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18..." allowfullscreen loading="lazy"></iframe>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <p class="mb-0">© 2025 Travaia. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

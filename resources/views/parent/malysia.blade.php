<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explore Malaysia - Travaia</title>

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; }

    .hero {
      background: url('{{ asset("images/malaysia-hero.jpeg") }}') center center/cover no-repeat;
      height: 80vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 1px 1px 3px black;
    }

    .top-destinations-section {
      background: url('{{ asset("images/malaysia-bg.jpeg") }}') center center/cover no-repeat;
      padding: 5rem 0;
      color: white;
    }

    .top-destinations-section .card img {
      height: 250px;
      object-fit: cover;
    }

    .travel-packages {
      background: url('{{ asset("images/malaysia-tour.jpeg") }}') center center/cover no-repeat;
      padding: 5rem 0;
      color: white;
    }

    .travel-packages .card {
      background-color: rgba(255, 255, 255, 0.9);
      border: none;
    }

    .malaysia-intro {
      background: url('{{ asset("images/malaysia-intro.jpeg") }}') center center/cover no-repeat;
      min-height: 500px;
      display: flex;
      align-items: center;
    }

    .malaysia-intro .container {
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
    <a class="navbar-brand fw-bold fs-3" href="{{ route('home') }}">Travaia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ route('malysia') }}">Malaysia</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('cart.country', ['country' => 'malysia']) }}">View Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<header class="hero text-center">
  <div>
    <h1 class="display-3">Discover Malaysia</h1>
    <p class="lead fst-italic">Truly Asia – Culture, Beaches & Nature</p>
  </div>
</header>

<!-- Top Destinations -->
<section class="top-destinations-section text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">Top Destinations</h2>
    <p>Explore Malaysia's most stunning and iconic locations</p>
    <div class="row g-4 mt-4">
      @php
        $destinations = [
          ['img' => 'kuala.jpeg', 'title' => 'Kuala Lumpur', 'desc' => 'Modern skyline dominated by the Petronas Towers and vibrant street life.'],
          ['img' => 'langkawi.jpeg', 'title' => 'Langkawi', 'desc' => 'Tropical paradise known for beaches, nature, and scenic cable cars.'],
          ['img' => 'penang.jpeg', 'title' => 'Penang', 'desc' => 'A cultural hub with heritage, street food, and colonial architecture.']
        ];
      @endphp
      @foreach($destinations as $place)
        <div class="col-md-4">
          <div class="card h-100 shadow">
            <img src="{{ asset('images/' . $place['img']) }}" class="card-img-top" alt="{{ $place['title'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $place['title'] }}</h5>
              <p>{{ $place['desc'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Travel Packages -->
<section class="travel-packages text-center">
  <div class="container">
    <h2 class="fw-bold mb-4">Travel Packages</h2>
    <p>Select the perfect package to enjoy Malaysia</p>
    <div class="row g-4 mt-4">
      @php
        $packages = [
          ['title' => 'KL City Explorer', 'price' => 350],
          ['title' => 'Langkawi Beach Retreat', 'price' => 420],
          ['title' => 'Penang Cultural Tour', 'price' => 300]
        ];
      @endphp
      @foreach($packages as $pkg)
      <div class="col-md-4">
        <div class="card h-100 shadow p-4">
          <h5 class="card-title">{{ $pkg['title'] }}</h5>
          <p>From ${{ $pkg['price'] }}</p>
          <form method="POST" action="{{ route('cart.add') }}">
            @csrf
            <input type="hidden" name="country" value="malysia">
            <input type="hidden" name="package" value="{{ $pkg['title'] }}">
            <input type="hidden" name="price" value="{{ $pkg['price'] }}">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Malaysia Intro -->
<section class="malaysia-intro text-white text-center">
  <div class="container">
    <h2 class="display-4 fw-bold">Welcome to Malaysia</h2>
    <p class="lead">Experience rich culture, lush rainforests, and idyllic islands.</p>
  </div>
</section>

<!-- Map -->
<section class="bg-dark text-white py-5">
  <div class="container">
    <h3 class="text-center mb-4">Visit Malaysia</h3>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.google.com/maps/embed?...malaysia-map-url..." allowfullscreen loading="lazy"></iframe>
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

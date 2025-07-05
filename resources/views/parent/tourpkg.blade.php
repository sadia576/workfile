<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tour Packages - Travaia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .package-card {
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }
    .package-card:hover {
      transform: scale(1.03);
    }
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }
    footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 1rem 0;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#">Travaia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('/index') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ url('/tourpkg') }}">Tour Packages</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="text-center bg-dark text-white py-5">
  <h1>Explore Our Tour Packages</h1>
  <p>Carefully curated trips to Turkey, Pakistan, Malaysia, and Japan</p>
</header>

<!-- Packages Section -->
<section class="container my-5">
  <div class="row g-4">

    <!-- Turkey -->
    <div class="col-md-6">
      <div class="card package-card">
        <img src="{{ asset('/images/cave.jpeg') }}" class="card-img-top" alt="Turkey Tour">
        <div class="card-body">
          <h5 class="card-title">Discover Turkey</h5>
          <p class="card-text">7 days in Istanbul, Cappadocia, and Antalya. Includes hotel, transport, and guide.</p>
          <p><strong>Price:</strong> $999</p>
          <a href="{{ url('/packages/turkia') }}" class="btn btn-danger">View Details</a>
        </div>
      </div>
    </div>

    <!-- Pakistan -->
    <div class="col-md-6">
      <div class="card package-card">
        <img src="{{ asset('/images/chamb house.jpeg') }}" class="card-img-top" alt="Pakistan Tour">
        <div class="card-body">
          <h5 class="card-title">Explore Pakistan</h5>
          <p class="card-text">10 days in Hunza, Skardu, and Lahore. Mountains, food, and culture!</p>
          <p><strong>Price:</strong> $850</p>
          <a href="{{ url('/packages/pakistan') }}" class="btn btn-danger">View Details</a>
        </div>
      </div>
    </div>

    <!-- Japan -->
    <div class="col-md-6">
      <div class="card package-card">
        <img src="{{ asset('/images/jpn reside.jpeg') }}" class="card-img-top" alt="Japan Tour">
        <div class="card-body">
          <h5 class="card-title">Journey to Japan</h5>
          <p class="card-text">Visit Tokyo, Kyoto, and Mt. Fuji in 8 days. Includes JR pass and hotels.</p>
          <p><strong>Price:</strong> $1300</p>
          <a href="{{ url('/packages/japan') }}" class="btn btn-danger">View Details</a>
        </div>
      </div>
    </div>

    <!-- Malaysia -->
<div class="col-md-6">
  <div class="card package-card">
    <img src="{{ asset('/images/malaysia-hero.jpeg') }}" class="card-img-top" alt="Malaysia Tour">
    <div class="card-body">
      <h5 class="card-title">Magical Malaysia</h5>
      <p class="card-text">Enjoy 6 days in Kuala Lumpur and Langkawi. City lights, islands, and cultural gems!</p>
      <p><strong>Price:</strong> $950</p>
      <a href="{{ url('/packages/malysia') }}" class="btn btn-danger">View Details</a>
    </div>
  </div>
</div>



</div> <!-- end row -->
</section>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Travaia. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


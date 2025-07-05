<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pakistan - Travaia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;500&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
    h2 { font-family: 'Playfair Display', serif; font-weight: 700; }
    .hero {
      background: url('{{ asset('images/sawaat.jpeg') }}') center/cover no-repeat;
      height: 90vh; color: white; position: relative;
    }
    .hero::before {
      content: ''; position: absolute; top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero > .container { position: relative; z-index: 2; }
    .carousel-inner img {
      object-fit: cover;
      height: 500px;
    }
    .fade-in {
      animation: fadeInUp 1.2s ease-in-out;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    section { padding-top: 4rem; padding-bottom: 4rem; }
    .card img {
      height: 240px;
      object-fit: cover;
      transition: transform 0.5s ease, box-shadow 0.3s ease;
    }
    .card:hover img {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    .carousel-caption { background: rgba(0, 0, 0, 0.5); border-radius: 10px; }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" href="{{ route('home') }}">Travaia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Destinations</a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{ route('japan') }}">Japan</a></li>
              <li><a class="dropdown-item active" href="{{ route('pakistan') }}">Pakistan</a></li>
              <li><a class="dropdown-item" href="{{ route('turkia') }}">Turkey</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
          <li class="nav-item"><a href="{{ route('cart.country', ['country' => 'pakistan']) }}">View Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero text-center d-flex flex-column justify-content-center align-items-center">
    <div class="container">
      <h1 class="display-3 fw-bold">Explore Pakistan</h1>
      <p class="lead fst-italic">Land of majestic mountains, culture, and history</p>
    </div>
  </section>

  <!-- HOTEL BOOKING -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Choose Your Stay</h2>
    <div class="row g-4">
      @php
        $hotels = [
          ['img' => 'seena.jpeg', 'title' => 'Hotel Serena, Skardu', 'price' => 15000, 'badge' => 'Luxury'],
          ['img' => 'pc malam jbba.jpeg', 'title' => 'Swat Valley Inn', 'price' => 8000, 'badge' => 'Standard'],
          ['img' => 'lhr hotl.jpeg', 'title' => 'Lahore Budget Hotel', 'price' => 4500, 'badge' => 'Budget']
        ];
      @endphp
      @foreach($hotels as $hotel)
        <div class="col-md-4">
          <div class="card shadow-lg position-relative">
            <span class="badge bg-{{ $hotel['badge'] === 'Luxury' ? 'warning text-dark' : ($hotel['badge'] === 'Standard' ? 'success' : 'info text-dark') }} position-absolute top-0 end-0 m-2">{{ $hotel['badge'] }}</span>
            <img src="{{ asset('images/' . $hotel['img']) }}" class="card-img-top" alt="{{ $hotel['title'] }}">
            <div class="card-body">
              <h5 class="card-title">{{ $hotel['title'] }}</h5>
              <p class="fw-bold">PKR {{ number_format($hotel['price']) }}/night</p>
              <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="country" value="pakistan">
                <input type="hidden" name="package" value="{{ $hotel['title'] }}">
                <input type="hidden" name="price" value="{{ $hotel['price'] }}">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

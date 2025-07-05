<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explore Turkey - Travaia</title>
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;500&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }
    .hero {
      background-image: url('{{ asset('/images/hero turk.jpeg') }}');
      height: 80vh;
      background-size: cover;
      background-position: center;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 1rem;
    }
    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      text-shadow: 3px 3px 10px rgba(0,0,0,0.7);
    }
    .hero p {
      font-size: 1.5rem;
      font-style: italic;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    }
    .top-destinations-section {
      background: url('{{ asset('images/turk intro.jpeg') }}') no-repeat center center/cover;
      padding: 4rem 0;
      color: white;
      text-align: center;
    }
    .top-destinations-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
    }
    .top-destinations-section p {
      margin-bottom: 3rem;
      font-size: 1.2rem;
      text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
    }
    .turkey-intro {
      background: url('{{ asset('/images/inntr.jpeg') }}') no-repeat center center/cover;
      min-height: 500px;
      color: #f5fafa;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 2rem;
    }
    .turkey-intro h2 {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      font-weight: 700;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    }
    .turkey-intro p {
      font-size: 1.2rem;
      max-width: 700px;
      text-shadow: 1px 1px 6px rgba(0,0,0,0.6);
    }
    .card {
      border: none;
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 8px 15px rgba(0,0,0,0.3);
      background: white;
      color: #333;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 25px rgba(0,0,0,0.4);
    }
    .card-img-top {
      height: 220px;
      object-fit: cover;
      border-bottom: 3px solid #e63946;
    }
    footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 1rem 0;
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
          <li class="nav-item"><a class="nav-link active" href="{{ url('/turkia') }}">Turkey</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
          <li class="nav-item"><a href="{{ route('cart.country', ['country' => 'turkia']) }}">View Cart</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero">
    <div>
      <h1>Discover Turkey</h1>
      <p>Land of History and Beauty</p>
    </div>
  </header>

  <!-- Top Destinations -->
  <section class="top-destinations-section">
    <div class="container">
      <h2>Top Destinations</h2>
      <p>Explore the iconic beauty of Turkey</p>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('images/hero turk.jpeg') }}" class="card-img-top" alt="Istanbul skyline at sunset">
            <div class="card-body">
              <h5 class="card-title">Istanbul</h5>
              <p class="card-text">Where East meets West in a magnificent cultural blend.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('images/cappadokia.jpeg') }}" class="card-img-top" alt="Hot air balloons in Cappadocia">
            <div class="card-body">
              <h5 class="card-title">Cappadocia</h5>
              <p class="card-text">Surreal rock formations and unforgettable balloon rides.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('images/anatolia.jpeg') }}" class="card-img-top" alt="Antalya beaches and cityscape">
            <div class="card-body">
              <h5 class="card-title">Antalya</h5>
              <p class="card-text">Sun-soaked beaches and ancient Roman ruins.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Turkey Intro -->
  <section class="turkey-intro">
    <div>
      <h2>Welcome to Turkey</h2>
      <p>
        Turkey bridges Europe and Asia, offering ancient wonders, vibrant cities, and breathtaking coastlines.
        From Istanbul’s Grand Bazaar to Cappadocia’s fairy chimneys, it's a journey through culture and nature.
      </p>
    </div>
  </section>

  <!-- Hotels Section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Recommended Hotels</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('/images/istmbulhotel.jpeg') }}" class="card-img-top" alt="Istanbul Grand Hotel">
          <div class="card-body">
            <h5 class="card-title">Istanbul Grand Hotel</h5>
            <p class="card-text">5-star comfort in the heart of Istanbul. Starting from $120/night.</p>
            <form method="POST" action="{{ route('cart.add') }}">
              @csrf
              <input type="hidden" name="country" value="turkia">
              <input type="hidden" name="package" value="Istanbul Grand Hotel">
              <input type="hidden" name="price" value="120">
              <button type="submit" class="btn btn-danger">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('images/mysticcappahotel.jpeg') }}" class="card-img-top" alt="Cappadocia Cave Hotel">
          <div class="card-body">
            <h5 class="card-title">Cappadocia Cave Hotel</h5>
            <p class="card-text">Sleep in a cave! Unique experience for $90/night.</p>
            <form method="POST" action="{{ route('cart.add') }}">
              @csrf
              <input type="hidden" name="country" value="turkia">
              <input type="hidden" name="package" value="Cappadocia Cave Hotel">
              <input type="hidden" name="price" value="90">
              <button type="submit" class="btn btn-danger">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('images/anatolhotel.jpeg') }}" class="card-img-top" alt="Anatoliya Luxury Hotel">
          <div class="card-body">
            <h5 class="card-title">Anatoliya Luxury Hotel</h5>
            <p class="card-text">Elegant luxury and warm hospitality for $90/night.</p>
            <form method="POST" action="{{ route('cart.add') }}">
              @csrf
              <input type="hidden" name="country" value="turkia">
              <input type="hidden" name="package" value="Anatoliya Luxury Hotel">
              <input type="hidden" name="price" value="90">
              <button type="submit" class="btn btn-danger">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cart Summary -->
  <div class="text-center mt-4">
    <a href="/cart/turkia" class="btn btn-warning btn-lg">Go to Cart</a>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Travaia. All Rights Reserved.</p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

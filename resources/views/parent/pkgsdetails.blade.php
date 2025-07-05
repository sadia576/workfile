<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ ucfirst($place) }} Tour Package - Travaia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .package-card {
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      transition: transform 0.3s;
    }
    .package-card:hover {
      transform: scale(1.03);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h2 class="text-center mb-4">Tour Package Details: {{ ucfirst($place) }}</h2>
    <div class="row g-4">

      @if($place == 'pakistan')
        {{-- Pakistan Packages --}}
        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('images/skardo.jpeg') }}" class="card-img-top" alt="Skardu">
            <div class="card-body">
              <h5 class="card-title">Skardu</h5>
              <p>3 days in Skardu. Visit lakes, valleys, and Deosai plains.</p>
              <p><strong>Price:</strong> $300</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('images/hunza.jpeg') }}" class="card-img-top" alt="Hunza">
            <div class="card-body">
              <h5 class="card-title">Hunza Valley</h5>
              <p>4 days in Hunza. Explore Karimabad, Passu cones, and Altit Fort.</p>
              <p><strong>Price:</strong> $350</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('images/lhr hotl.jpeg') }}" class="card-img-top" alt="Lahore">
            <div class="card-body">
              <h5 class="card-title">Lahore</h5>
              <p>3 days in Lahore. History tour, food streets, and culture.</p>
              <p><strong>Price:</strong> $200</p>
            </div>
          </div>
        </div>

      @elseif($place == 'turkia')
        {{-- Turkey Packages --}}
        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('/images/istmbulhotel.jpeg') }}" class="card-img-top" alt="Istanbul">
            <div class="card-body">
              <h5 class="card-title">Istanbul</h5>
              <p>3 days. Visit Hagia Sophia, Blue Mosque, and Bosphorus cruise.</p>
              <p><strong>Price:</strong> $400</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('/images/mysticcappahotel.jpeg') }}" class="card-img-top" alt="Cappadocia">
            <div class="card-body">
              <h5 class="card-title">Cappadocia</h5>
              <p>2 days. Hot air balloon ride, fairy chimneys, and caves.</p>
              <p><strong>Price:</strong> $300</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('/images/anatolhotel.jpeg') }}" class="card-img-top" alt="Antalya">
            <div class="card-body">
              <h5 class="card-title">Antalya</h5>
              <p>2 days. Beaches, waterfalls, and old town Kaleici.</p>
              <p><strong>Price:</strong> $299</p>
            </div>
          </div>
        </div>

      @elseif($place == 'japan')
        {{-- Japan Packages --}}
        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('images/tokiyo.jpg') }}" class="card-img-top" alt="Tokyo">
            <div class="card-body">
              <h5 class="card-title">Tokyo</h5>
              <p>3 days. Explore Shibuya, temples, and anime districts.</p>
              <p><strong>Price:</strong> $450</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('images/kyoto.jpg') }}" class="card-img-top" alt="Kyoto">
            <div class="card-body">
              <h5 class="card-title">Kyoto</h5>
              <p>2 days. Visit ancient shrines, bamboo forests, and geisha culture.</p>
              <p><strong>Price:</strong> $350</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card package-card">
            <img src="{{ asset('/images/mount-fujji.jpg') }}" class="card-img-top" alt="Mt. Fuji">
            <div class="card-body">
              <h5 class="card-title">Mt. Fuji</h5>
              <p>3 days. Hiking, lakes, and scenic views of Japan's iconic peak.</p>
              <p><strong>Price:</strong> $500</p>
            </div>
          </div>
        </div>

      @elseif($place == 'malysia')
        {{-- Malaysia Packages --}}
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Kuala Lumpur City Tour</h5>
              <p class="card-text">3 Days, 2 Nights — Includes city highlights, Petronas Towers, and shopping tour.</p>
              <p class="text-primary fw-bold">PKR 85,000</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Langkawi Beach Escape</h5>
              <p class="card-text">4 Days, 3 Nights — Beach stay, island hopping, cable car, and Sky Bridge.</p>
              <p class="text-primary fw-bold">PKR 105,000</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Malaysia Full Adventure</h5>
              <p class="card-text">7 Days, 6 Nights — Kuala Lumpur, Langkawi, Genting Highlands with all transfers.</p>
              <p class="text-primary fw-bold">PKR 160,000</p>
            </div>
          </div>
        </div>

      @else
        <div class="col-12 text-center">
          <h3>Package Not Found</h3>
          <p>No package found for: <strong>{{ $place }}</strong></p>
        </div>
      @endif

    </div>

    <div class="text-center mt-4">
      <a href="{{ route('tourpkg') }}" class="btn btn-danger">Back to All Packages</a>
    </div>
  </div>
</body>
</html>

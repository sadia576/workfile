<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Travaia - Tour Guide</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;500&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <style>
    body {
      background-image: url('<?php echo e(asset('images/pic1.jpg')); ?>');
      background-size: cover;
      background-position: center;
      position: relative;
      font-family: 'Poppins', sans-serif;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    .content {
      position: relative;
      z-index: 1;
    }

    .navbar-nav .nav-link:hover {
      color: #f0b90b !important;
      transform: scale(1.1);
      transition: 0.3s ease;
    }

    .dropdown-preview .preview {
      display: none;
      font-size: 0.9rem;
      color: #ccc;
      padding-left: 20px;
    }

    .dropdown-preview:hover .preview {
      display: block;
      animation: fadeIn 0.4s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-5px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .btn-cta {
      font-size: 1.2rem;
      padding: 12px 25px;
      border-radius: 30px;
    }
  </style>
</head>

<body>
  <div class="overlay"></div>
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
      <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="#">Travaia</a>-
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/index')); ?>">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Destinations</a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li class="dropdown-preview"><a class="dropdown-item" href="<?php echo e(route('japan')); ?>">Visit Japan</a><div class="preview">Land of the Rising Sun 🌸</div></li>
                <li class="dropdown-preview"><a class="dropdown-item" href="<?php echo e(route('pakistan')); ?>">Pakistan</a><div class="preview">Land of Peaks and Valleys 🏔️</div></li>
                <li class="dropdown-preview"><a class="dropdown-item" href="<?php echo e(route('turkia')); ?>">Turkey</a><div class="preview">Where East Meets West 🕌</div></li>
                
                <li class="dropdown-preview"><a class="dropdown-item" href="<?php echo e(route('malysia')); ?>">Malaysia</a><div class="preview">Truly Asia 🌴</div></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('about')); ?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact</a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo e(route('cart')); ?>">Cart</a></li>
           <li class="nav-item"><a class="nav-link" href="<?php echo e(route('tourpkg')); ?>">packages</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center mt-5 pt-5">
      <h1 class="display-1 fw-bold" style="font-family: 'Playfair Display', serif; color: #e0dcde; text-shadow: 2px 2px 8px rgba(0,0,0,0.6);">
        Travaia
      </h1>
      <p class="fs-4 fst-italic text-light" style="text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);">
        "Empowering Every Explorer"
      </p>
      <a href="<?php echo e(route('login')); ?>" class="btn btn-warning btn-cta mt-3 shadow">Start Your Journey</a>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\workfile\resources\views/parent/index.blade.php ENDPATH**/ ?>
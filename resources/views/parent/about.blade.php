<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Travaia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .section-title {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 15px;
        }
        .highlight {
            color: #f0b90b;
        }
        .card {
            border: 1px solid #dee2e6;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-5">About <span class="highlight">Travaia</span></h1>

    <div class="row text-center">

        <!-- Card 1: Who We Are -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="section-title">🌍 Who We Are</h3>
                    <p>
                        At <strong>Travaia</strong>, we are a passionate team of travelers, storytellers, and digital explorers. Founded with the vision to make global travel easy and meaningful, we connect you to unforgettable destinations with handpicked experiences.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: What We Serve -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="section-title">🛫 What We Serve</h3>
                    <ul class="text-start">
                        <li>Curated tour packages for every type of traveler</li>
                        <li>Local guides and cultural immersion experiences</li>
                        <li>Flexible booking with real-time availability</li>
                        <li>24/7 customer support throughout your journey</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card 3: Why Choose Us -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="section-title">💡 Why Choose Us</h3>
                    <p>
                        We believe travel should be <strong>authentic</strong>, <strong>affordable</strong>, and <strong>accessible</strong>. Here’s why travelers love Travaia:
                    </p>
                    <ul class="text-start">
                        <li>🧭 Expertly crafted itineraries</li>
                        <li>💰 Transparent pricing—no hidden fees</li>
                        <li>🌐 Multilingual support and guides</li>
                        <li>⭐ 5-star rated by hundreds of happy travelers</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="{{ route('tourpkg') }}" class="btn btn-warning btn-lg">Explore Our Tour Packages</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

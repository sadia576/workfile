<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Travaia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
        }
        .contact-header {
            background: url('/images/contact-bg.jpg') center/cover no-repeat;
            padding: 100px 0;
            color: white;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            background-blend-mode: darken;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <section class="contact-header">
        <div class="container">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">We'd love to hear from you!</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="container my-5">
        <div class="row g-4">
            <div class="col-md-5 contact-info">
                <h3>Our Info</h3>
                <p><strong>Address:</strong> Travaia Office, Lahore, Pakistan</p>
                <p><strong>Email:</strong> contact@travaia.com</p>
                <p><strong>Phone:</strong> +92 300 1234567</p>
                <p><strong>Hours:</strong> Mon - Sat, 9AM - 6PM</p>
            </div>

            <div class="col-md-7">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject *</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="container mb-5">
        <h3>Find Us</h3>
        <div class="ratio ratio-16x9">
            <iframe src="https://maps.google.com/maps?q=lahore&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen></iframe>
        </div>
    </section>

</body>
</html>

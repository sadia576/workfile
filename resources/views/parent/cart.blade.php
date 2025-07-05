<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Travaia | Your Cart</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #f5f7fa, #c3dfe0);
      background-image: url('{{ asset("images/turkia.jpg") }}');
      background-size: cover;
      background-position: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .cart-container {
      background-color: #fff;
      padding: 50px 40px;
      max-width: 700px;
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .cart-header {
      font-size: 2rem;
      font-weight: bold;
      color: #1d3557;
      margin-bottom: 10px;
    }

    .cart-subtext {
      color: #6c757d;
      margin-bottom: 30px;
    }

    .cart-icon {
      font-size: 60px;
      color: #457b9d;
      margin-bottom: 20px;
    }

    .btn-custom {
      border-radius: 30px;
      padding: 12px 30px;
      font-weight: 500;
      font-size: 1rem;
    }

    .btn-danger {
      background-color: #e63946;
      border: none;
    }

    .btn-secondary {
      background-color: #457b9d;
      border: none;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .cart-items {
      font-size: 1rem;
      color: #555;
      margin-top: 15px;
      text-align: left;
    }

    .cart-item {
      padding: 8px 0;
      border-bottom: 1px solid #ddd;
    }

    .brand-label {
      position: absolute;
      top: 25px;
      left: 30px;
      font-size: 1.1rem;
      color: #a0a0a0;
    }
  </style>
</head>
<body>

  <div class="cart-container position-relative">
    <div class="brand-label">Travaia</div>
    <i class="fas fa-suitcase-rolling cart-icon"></i>
    <h2 class="cart-header">Your Travel Cart</h2>
    <p class="cart-subtext">Here’s the summary of your selected tours</p>

    @php
      $cart = session('cart', []);
      $total = array_sum(array_column($cart, 'price'));
    @endphp

    <div id="cart-total" class="mb-4" style="font-size: 2rem; color: #2a2a2a;">
      Total: ${{ $total }}
    </div>

    <div class="cart-items">
      @forelse($cart as $item)
        <div class="cart-item">
          <strong>{{ $item['package'] }}</strong> ({{ ucfirst($item['country']) }}) - ${{ $item['price'] }}
        </div>
      @empty
        <p class="text-muted">Your cart is empty.</p>
      @endforelse
    </div>

    <div class="mt-4 d-flex flex-wrap gap-2 justify-content-center">
      <a href="{{ url('/index') }}" class="btn btn-secondary btn-custom">Continue Exploring</a>

      @if(count($cart) > 0)
        <form method="POST" action="{{ route('cart.clear') }}">
          @csrf
          <button type="submit" class="btn btn-danger btn-custom">Clear Cart</button>
        </form>
      @endif
    </div>
  </div>

</body>
</html>

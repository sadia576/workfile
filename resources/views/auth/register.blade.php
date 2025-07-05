<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - Travaia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 bg-white p-4 shadow rounded">
        <h2 class="text-center mb-4">Create an Account</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Sign Up</button>
          <div class="text-center mt-2">
            <a href="{{ route('login') }}">Already have an account?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

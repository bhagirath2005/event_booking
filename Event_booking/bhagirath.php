<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* light blue background */
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,255,0.1);
    }
    .btn-blue {
      background-color: #007BFF;
      color: white;
    }
    .btn-blue:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h3 class="text-center text-primary mb-4">Admin Login</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label text-primary">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label text-primary">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
      </div>
      <div class="d-grid mb-2">
        <button type="submit" name="submit" class="btn btn-blue">Login</button>
      </div>

    </form>
  </div>

</body>
</html>

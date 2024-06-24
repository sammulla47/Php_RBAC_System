<!DOCTYPE html>
<html>
<head>
    <title>Php System</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body{
        font-family: "Poppins", sans-serif;
            background: #6665ee;
    }
</style>
</head>
<body class="bg-ligth">
<header>    
 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <h1 class="text-white fs-3 text-center w-100 mb-0">Php System</h1>
  </div>
 </nav>
</header>
<section  style="min-height: calc(100vh - 90px);">
  <div class="container py-md-5">
    
    <div class="row justify-content-center">
      <div class="col-md-4 bg-white rounded-5 shadow p-4">
        <form action="singup_handle.php" method="post">
            <h2 class="mb-4 text-center">Sign Up</h2>
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control border-light rounded-3" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control border-light rounded-3" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control border-light rounded-3" required>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <input type="text" id="role" name="role" class="form-control border-light rounded-3" required>
          </div>
          <div class="mb-3">
            <label for="authcode" class="form-label">AuthCode:</label>
            <input type="text" id="authcode" name="authcode" class="form-control border-light rounded-3" required>
          </div>
          <button type="submit" class="btn bg-black text-white w-100">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</section>
    <footer class="bg-black text-center py-2">
        <div class="container">
            <p class="mb-0 text-white">&copy; 2024 Php System. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
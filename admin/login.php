<?php
session_start();

// Redirect jika sudah login
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: index.php");
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kredensial statis untuk demonstrasi tanpa database
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        echo "<script>
            alert('Login berhasil!');
            window.location.href = 'index.php';
        </script>";
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Portal Berita</title>
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css" />
    <script src="bootstrap-5.3.8-dist/js/iconify-icon.min.js"></script>
    <script src="bootstrap-5.3.8-dist/js/icons.js"></script>
    <style>
      body {
        font-family: 'Inter', sans-serif;
        background: white;
      }
    </style>
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg border-0 rounded-4" style="width: 100%; max-width: 400px; background: rgba(255, 255, 255, 0.98);">
      <div class="text-center mb-4">
        <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white rounded-circle mb-3 shadow-sm animate-pulse" style="width: 60px; height: 60px;">
          <iconify-icon icon="mdi:lock-outline" width="32" height="32"></iconify-icon>
        </div>
        <h3 class="fw-bold text-dark m-0">Sign In</h3>
        <p class="text-muted small mb-0">Akses Panel Admin Portal Berita</p>
      </div>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger alert-dismissible fade show rounded-3 border-0 py-2 px-3 mb-3 d-flex align-items-center gap-2" role="alert" style="font-size: 0.85rem;">
          <iconify-icon icon="mdi:alert-circle-outline" width="18" height="18"></iconify-icon>
          <div><?php echo $error; ?></div>
          <button type="button" class="btn-close shadow-none ms-auto" data-bs-dismiss="alert" aria-label="Close" style="padding: 0.5rem;"></button>
        </div>
      <?php endif; ?>

      <div class="alert alert-info py-2 px-3 mb-3 rounded-3 border-0 d-flex align-items-center gap-2" style="font-size: 0.85rem;">
        <iconify-icon icon="mdi:information-outline" width="18" height="18" class="text-primary"></iconify-icon>
        <span><strong>Kredensial:</strong> admin / admin123</span>
      </div>

      <form action="" method="POST">
        <div class="form-floating mb-3">
          <input
            type="text"
            name="username"
            class="form-control rounded-3"
            id="floatingUsername"
            placeholder="Username"
            required
          />
          <label for="floatingUsername">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input
            type="password"
            name="password"
            class="form-control rounded-3"
            id="floatingPassword"
            placeholder="Password"
            required
          />
          <label for="floatingPassword">Password</label>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" />
            <label class="form-check-label text-muted small" for="rememberMe">Ingat saya</label>
          </div>
          <a href="#" class="text-primary text-decoration-none small">Lupa password?</a>
        </div>

        <button type="submit" class="btn btn-primary bg-gradient btn-lg w-100 rounded-3 fw-semibold shadow-sm py-2">
          Sign In
        </button>
      </form>
      
      <div class="text-center mt-4">
        <p class="text-muted small mb-0">Belum punya akun? <a href="register.php" class="text-primary text-decoration-none fw-semibold">Daftar sekarang</a></p>
      </div>
    </div>
    
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
  </body>
</html>

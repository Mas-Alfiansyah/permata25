<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css" />
    <script src="bootstrap-5.3.8-dist/js/iconify-icon.min.js"></script>
    <script src="bootstrap-5.3.8-dist/js/icons.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php">
          <iconify-icon icon="mdi:newspaper" width="24" height="24"></iconify-icon>
          Portal Berita
        </a>
        <button
          class="navbar-toggler border-0 shadow-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
            <li class="nav-item">
              <a class="nav-link active px-3 rounded-pill bg-white bg-opacity-25" aria-current="page" href="index.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:view-dashboard" width="20" height="20"></iconify-icon> Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill" href="berita/berita.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:newspaper-variant-outline" width="20" height="20"></iconify-icon> Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill" href="kategori/kategori.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:shape" width="20" height="20"></iconify-icon> Kategori</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill text-danger-hover" href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:logout" width="20" height="20"></iconify-icon> Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container my-5">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-secondary m-0">Dashboard Overview</h2>
        <span class="text-muted fw-medium" id="currentDate"></span>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-md-4">
          <div class="card bg-primary bg-gradient text-white shadow-sm rounded-4 border-0 h-100 transition-hover">
            <div class="card-body py-4 px-4 d-flex justify-content-between align-items-center">
              <div>
                <p class="fs-5 mb-1 opacity-75">Total Berita</p>
                <h1 class="display-5 fw-bold mb-0">120</h1>
              </div>
              <iconify-icon icon="mdi:newspaper-variant-outline" style="font-size: 4rem; opacity: 0.5;"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-success bg-gradient text-white shadow-sm rounded-4 border-0 h-100 transition-hover">
            <div class="card-body py-4 px-4 d-flex justify-content-between align-items-center">
              <div>
                <p class="fs-5 mb-1 opacity-75">Total Kategori</p>
                <h1 class="display-5 fw-bold mb-0">6</h1>
              </div>
              <iconify-icon icon="mdi:shape" style="font-size: 4rem; opacity: 0.5;"></iconify-icon>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card bg-warning bg-gradient text-white shadow-sm rounded-4 border-0 h-100 transition-hover">
            <div class="card-body py-4 px-4 d-flex justify-content-between align-items-center">
              <div>
                <p class="fs-5 mb-1 opacity-75 text-dark">Total User</p>
                <h1 class="display-5 fw-bold mb-0 text-dark">890</h1>
              </div>
              <iconify-icon icon="mdi:account-group" style="font-size: 4rem; opacity: 0.3;" class="text-dark"></iconify-icon>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-secondary m-0">Berita Terbaru</h3>
        <a href="berita/berita.php" class="text-decoration-none text-primary fw-semibold">Lihat Semua &rarr;</a>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden">
            <img src="https://i0.wp.com/blog.tempoinstitute.com/wp-content/uploads/2025/11/Tempo-Institute-22.jpg?fit=1024%2C683&ssl=1" class="card-img-top" alt="Berita" style="height: 200px; object-fit: cover;">
            <div class="card-body p-4">
              <span class="badge bg-primary-subtle text-primary mb-2 rounded-pill px-3">Hobi</span>
              <h5 class="card-title fw-bold">Kicau Mania Mendunia</h5>
              <p class="card-text text-muted">Kicau mania mendunia dengan berbagai macam burung unik dari seluruh nusantara yang menarik perhatian.</p>
            </div>
            <div class="card-footer bg-white border-0 p-4 pt-0">
              <a href="berita/detail-berita.php" class="btn btn-outline-primary rounded-pill w-100 fw-medium">Selengkapnya</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=800&auto=format&fit=crop" class="card-img-top" alt="Berita" style="height: 200px; object-fit: cover;">
            <div class="card-body p-4">
              <span class="badge bg-success-subtle text-success mb-2 rounded-pill px-3">Teknologi</span>
              <h5 class="card-title fw-bold">Inovasi AI Terbaru</h5>
              <p class="card-text text-muted">Perkembangan kecerdasan buatan semakin pesat di tahun ini, membawa banyak perubahan di berbagai sektor.</p>
            </div>
            <div class="card-footer bg-white border-0 p-4 pt-0">
              <a href="berita/detail-berita.php" class="btn btn-outline-primary rounded-pill w-100 fw-medium">Selengkapnya</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 shadow-sm rounded-4 border-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=800&auto=format&fit=crop" class="card-img-top" alt="Berita" style="height: 200px; object-fit: cover;">
            <div class="card-body p-4">
              <span class="badge bg-warning-subtle text-warning mb-2 rounded-pill px-3">Bisnis</span>
              <h5 class="card-title fw-bold">Peluang Usaha 2026</h5>
              <p class="card-text text-muted">Melihat peluang usaha yang menjanjikan di tahun 2026 dengan modal yang minim namun profit maksimal.</p>
            </div>
            <div class="card-footer bg-white border-0 p-4 pt-0">
              <a href="berita/detail-berita.php" class="btn btn-outline-primary rounded-pill w-100 fw-medium">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </main>




    <!-- footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">

                <!-- Logo / About -->
                <div class="col-md-4 mb-3">
                    <h5>Portal Berita</h5>
                    <p class="small">
                        Menyajikan berita terbaru dan terpercaya setiap hari.
                    </p>
                </div>

                <!-- Menu -->
                <div class="col-md-4 mb-3">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Nasional</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Teknologi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Olahraga</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-md-4 mb-3">
                    <h5>Kontak</h5>
                    <p class="small mb-1">Email: info@portalberita.com</p>
                    <p class="small mb-1">Telp: +62 812-3456-7890</p>
                    <p class="small">Indonesia</p>
                </div>

            </div>

            <hr class="border-secondary">

            <div class="text-center small">
                © 2026 Portal Berita. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- end footer -->
     
    
    <!-- <script>
      // Menampilkan tanggal hari ini
      document.getElementById('currentDate').textContent = new Date().toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    </script> -->
    <script src="bootstrap-5.3.8-dist/js/bootstrap.js"></script>
  </body>
</html>

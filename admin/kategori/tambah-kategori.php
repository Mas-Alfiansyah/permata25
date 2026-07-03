<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: ../login.php");
    exit;
}
include '../../config/connect.php';

if(isset($_POST['simpan'])){
  $slug = $_POST['nama_kategori'];
  $nama_kategori = $_POST['nama_kategori'];
  $deskripsi = $_POST['deskripsi'];

  $query = mysqli_query($conn, "INSERT INTO kategori (slug, nama_kategori, deskripsi) VALUES('$slug', '$nama_kategori', '$deskripsi')");

  if($query){
    echo "<script>
            alert('Data berhasil disimpan');
            window.location.href = 'index.php';
        </script>";
  }else{
    echo "<script>
            alert('Data gagal disimpan');
            window.location.href = 'tambah-kategori.php';
        </script>";
  }
}

// $query = mysqli_query($conn, "INSERT INTO `kategori`(`id`, `slug`, `nama_kategori`, `deskripsi`, `tanggal_buat`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Kategori - Portal Berita</title>
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/css/bootstrap.css" />
    <script src="../bootstrap-5.3.8-dist/js/iconify-icon.min.js"></script>
    <script src="../bootstrap-5.3.8-dist/js/icons.js"></script>
  </head>
  <body class="bg-light">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="../index.php">
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
              <a class="nav-link px-3 rounded-pill" href="../index.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:view-dashboard" width="20" height="20"></iconify-icon> Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill" href="../berita/berita.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:newspaper-variant-outline" width="20" height="20"></iconify-icon> Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active px-3 rounded-pill bg-white bg-opacity-25" aria-current="page" href="kategori.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:shape" width="20" height="20"></iconify-icon> Kategori</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container my-5">
      <div class="mb-4 d-flex align-items-center gap-3">
        <a href="kategori.php" class="btn btn-outline-secondary rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
          <iconify-icon icon="mdi:arrow-left" width="20" height="20"></iconify-icon>
        </a>
        <div>
          <h2 class="fw-bold text-secondary m-0">Tambah Kategori</h2>
          <p class="text-muted mb-0">Tambahkan kategori berita baru.</p>
        </div>
      </div>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger rounded-4 border-0 shadow-sm p-3 mb-4 d-flex align-items-center gap-2" style="max-width: 600px;">
          <iconify-icon icon="mdi:alert-circle" width="24" height="24" class="text-danger"></iconify-icon>
          <div><?php echo $error; ?></div>
        </div>
      <?php endif; ?>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden" style="max-width: 600px;">
        <div class="card-body p-4">
          <form action="" method="POST">
            <div class="mb-4">
              <label for="namaKategori" class="form-label fw-medium text-dark">Nama Kategori</label>
              <input name="nama_kategori" type="text" class="form-control form-control-lg rounded-3" id="namaKategori" placeholder="Contoh: Otomotif">
            </div>

            <div class="mb-5">
              <label for="deskripsiKategori" class="form-label fw-medium text-dark">Deskripsi Kategori</label>
              <textarea name="deskripsi" class="form-control rounded-3" id="deskripsiKategori" rows="4" placeholder="Deskripsi singkat (opsional)..."></textarea>
            </div>

            <div class="d-flex gap-2">
              <button name="simpan" type="submit" class="btn btn-primary btn-lg rounded-pill px-5 fw-medium d-flex align-items-center gap-2">
                <iconify-icon icon="mdi:content-save" width="20" height="20"></iconify-icon> Simpan
              </button>
              <a href="kategori.php" class="btn btn-light btn-lg rounded-pill px-4 fw-medium text-secondary">
                Batal
              </a>
            </div>
          </form>
        </div>
      </div>
    </main>

    <script src="../bootstrap-5.3.8-dist/js/bootstrap.js"></script>
  </body>
</html>

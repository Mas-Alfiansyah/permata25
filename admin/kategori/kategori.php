<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: ../login.php");
    exit;
}
include '../../config/connect.php';

$query = mysqli_query($conn, "SELECT * FROM kategori");

$daftar_kategori = [];

while($data = mysqli_fetch_assoc($query)){
  $daftar_kategori[] = $data;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Kategori - Portal Berita</title>
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
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill text-danger-hover" href="../logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:logout" width="20" height="20"></iconify-icon> Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="container my-5">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h2 class="fw-bold text-secondary m-0">Manajemen Kategori</h2>
          <p class="text-muted mb-0">Kelola data kategori berita di sini.</p>
        </div>
        <a href="tambah-kategori.php" class="btn btn-primary shadow-sm rounded-pill d-flex align-items-center gap-2 fw-medium">
          <iconify-icon icon="mdi:plus" width="20" height="20"></iconify-icon> Tambah Kategori
        </a>
      </div>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th scope="col" class="ps-4 py-3" style="width: 10%;">No</th>
                  <th scope="col" class="py-3" style="width: 40%;">Nama Kategori</th>
                  <th scope="col" class="py-3" style="width: 30%;">Total Berita</th>
                  <th scope="col" class="pe-4 py-3 text-end" style="width: 20%;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($daftar_kategori as $kategori){
                ?>
                <tr>
                  <td class="ps-4 py-3 text-muted">1</td>
                  <td class="py-3 fw-medium"><?php echo $kategori['nama_kategori'] ?></td>
                  <td class="py-3 text-muted"><?php echo $kategori['deskripsi'] ?></td>
                  <td class="pe-4 py-3 text-end">
                    <a href="edit-kategori.php" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center me-1" title="Edit">
                      <iconify-icon icon="mdi:pencil" width="18" height="18"></iconify-icon>
                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center" title="Hapus">
                      <iconify-icon icon="mdi:delete" width="18" height="18"></iconify-icon>
                    </button>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <script src="../bootstrap-5.3.8-dist/js/bootstrap.js"></script>
  </body>
</html>
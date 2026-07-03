<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Berita - Portal Berita</title>
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
              <a class="nav-link active px-3 rounded-pill bg-white bg-opacity-25" aria-current="page" href="berita.php">
                <span class="d-flex align-items-center gap-1"><iconify-icon icon="mdi:newspaper-variant-outline" width="20" height="20"></iconify-icon> Berita</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3 rounded-pill" href="../kategori/kategori.php">
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
          <h2 class="fw-bold text-secondary m-0">Manajemen Berita</h2>
          <p class="text-muted mb-0">Kelola data berita portal Anda di sini.</p>
        </div>
        <a href="tambah-berita.php" class="btn btn-primary shadow-sm rounded-pill d-flex align-items-center gap-2 fw-medium">
          <iconify-icon icon="mdi:plus" width="20" height="20"></iconify-icon> Tambah Berita
        </a>
      </div>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th scope="col" class="ps-4 py-3">No</th>
                  <th scope="col" class="py-3">Judul Berita</th>
                  <th scope="col" class="py-3">Kategori</th>
                  <th scope="col" class="py-3">Tanggal Posting</th>
                  <th scope="col" class="py-3">Status</th>
                  <th scope="col" class="pe-4 py-3 text-end">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4 py-3 text-muted">1</td>
                  <td class="py-3 fw-medium">Kicau Mania Mendunia</td>
                  <td class="py-3"><span class="badge bg-primary-subtle text-primary rounded-pill">Hobi</span></td>
                  <td class="py-3 text-muted">15 Mei 2026</td>
                  <td class="py-3"><span class="badge bg-success rounded-pill">Published</span></td>
                  <td class="pe-4 py-3 text-end">
                    <a href="edit-berita.php" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center me-1" title="Edit">
                      <iconify-icon icon="mdi:pencil" width="18" height="18"></iconify-icon>
                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center" title="Hapus">
                      <iconify-icon icon="mdi:delete" width="18" height="18"></iconify-icon>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 py-3 text-muted">2</td>
                  <td class="py-3 fw-medium">Inovasi AI Terbaru</td>
                  <td class="py-3"><span class="badge bg-success-subtle text-success rounded-pill">Teknologi</span></td>
                  <td class="py-3 text-muted">14 Mei 2026</td>
                  <td class="py-3"><span class="badge bg-secondary rounded-pill">Draft</span></td>
                  <td class="pe-4 py-3 text-end">
                    <a href="edit-berita.php" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center me-1" title="Edit">
                      <iconify-icon icon="mdi:pencil" width="18" height="18"></iconify-icon>
                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center" title="Hapus">
                      <iconify-icon icon="mdi:delete" width="18" height="18"></iconify-icon>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 py-3 text-muted">3</td>
                  <td class="py-3 fw-medium">Peluang Usaha 2026</td>
                  <td class="py-3"><span class="badge bg-warning-subtle text-warning rounded-pill">Bisnis</span></td>
                  <td class="py-3 text-muted">12 Mei 2026</td>
                  <td class="py-3"><span class="badge bg-success rounded-pill">Published</span></td>
                  <td class="pe-4 py-3 text-end">
                    <a href="edit-berita.php" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center me-1" title="Edit">
                      <iconify-icon icon="mdi:pencil" width="18" height="18"></iconify-icon>
                    </a>
                    <button class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center" title="Hapus">
                      <iconify-icon icon="mdi:delete" width="18" height="18"></iconify-icon>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer bg-white p-3 border-0 d-flex justify-content-between align-items-center">
          <span class="text-muted small">Menampilkan 1 hingga 3 dari 120 entri</span>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item disabled"><a class="page-link rounded-start-pill" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link rounded-end-pill" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </main>

    <script src="../bootstrap-5.3.8-dist/js/bootstrap.js"></script>
  </body>
</html>
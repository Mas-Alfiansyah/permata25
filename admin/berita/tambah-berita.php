<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Berita - Portal Berita</title>
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
          </ul>
        </div>
      </div>
    </nav>

    <main class="container my-5">
      <div class="mb-4 d-flex align-items-center gap-3">
        <a href="berita.php" class="btn btn-outline-secondary rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
          <iconify-icon icon="mdi:arrow-left" width="20" height="20"></iconify-icon>
        </a>
        <div>
          <h2 class="fw-bold text-secondary m-0">Tambah Berita</h2>
          <p class="text-muted mb-0">Buat berita baru untuk portal Anda.</p>
        </div>
      </div>

      <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-4">
          <form>
            <div class="mb-4">
              <label for="judulBerita" class="form-label fw-medium text-dark">Judul Berita</label>
              <input type="text" class="form-control form-control-lg rounded-3" id="judulBerita" placeholder="Masukkan judul berita">
            </div>
            
            <div class="row g-4 mb-4">
              <div class="col-md-6">
                <label for="kategoriBerita" class="form-label fw-medium text-dark">Kategori</label>
                <select class="form-select form-select-lg rounded-3" id="kategoriBerita">
                  <option selected>Pilih Kategori...</option>
                  <option value="1">Teknologi</option>
                  <option value="2">Bisnis</option>
                  <option value="3">Hobi</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="statusBerita" class="form-label fw-medium text-dark">Status</label>
                <select class="form-select form-select-lg rounded-3" id="statusBerita">
                  <option value="draft" selected>Draft</option>
                  <option value="published">Published</option>
                </select>
              </div>
            </div>

            <div class="mb-4">
              <label for="gambarBerita" class="form-label fw-medium text-dark">Upload Gambar Thumbnail</label>
              <input class="form-control form-control-lg rounded-3" type="file" id="gambarBerita">
            </div>

            <div class="mb-5">
              <label for="isiBerita" class="form-label fw-medium text-dark">Isi Berita</label>
              <textarea class="form-control rounded-3" id="isiBerita" rows="8" placeholder="Tulis konten berita di sini..."></textarea>
            </div>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 fw-medium d-flex align-items-center gap-2">
                <iconify-icon icon="mdi:content-save" width="20" height="20"></iconify-icon> Simpan Berita
              </button>
              <a href="berita.php" class="btn btn-light btn-lg rounded-pill px-4 fw-medium text-secondary">
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

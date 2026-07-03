<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Berita - Portal Berita</title>
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
              <a class="nav-link px-3 rounded-pill" href="berita.php">
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

    <!-- MAIN ARTICLE -->
    <main class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-white px-4 py-2 rounded-pill shadow-sm d-inline-flex">
              <li class="breadcrumb-item"><a href="../index.php" class="text-decoration-none d-flex align-items-center gap-1"><iconify-icon icon="mdi:home"></iconify-icon> Home</a></li>
              <li class="breadcrumb-item"><a href="berita.php" class="text-decoration-none">Berita</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
          </nav>

          <!-- Article Header -->
          <div class="bg-white rounded-4 shadow-sm overflow-hidden mb-5">
            <img src="https://i0.wp.com/blog.tempoinstitute.com/wp-content/uploads/2025/11/Tempo-Institute-22.jpg?fit=1024%2C683&ssl=1" class="img-fluid w-100" alt="Cover Berita" style="max-height: 450px; object-fit: cover;">
            
            <div class="p-4 p-md-5">
              <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 fs-6 fw-medium">Hobi</span>
                <span class="text-muted d-flex align-items-center gap-1"><iconify-icon icon="mdi:calendar-blank"></iconify-icon> 15 Mei 2026</span>
                <span class="text-muted d-flex align-items-center gap-1"><iconify-icon icon="mdi:account-circle-outline"></iconify-icon> Oleh Admin</span>
                <span class="text-muted d-flex align-items-center gap-1"><iconify-icon icon="mdi:eye-outline"></iconify-icon> 1.2K tayangan</span>
              </div>
              
              <h1 class="display-5 fw-bold mb-4 text-dark">Kicau Mania Mendunia, Pesona Burung Nusantara yang Tak Lekang Waktu</h1>
              
              <div class="d-flex align-items-center gap-2 border-top border-bottom py-3 mb-4">
                <p class="m-0 fw-medium text-secondary">Bagikan:</p>
                <button class="btn btn-sm btn-outline-primary rounded-circle p-2 d-inline-flex align-items-center" title="Bagikan ke Facebook">
                  <iconify-icon icon="mdi:facebook" width="18" height="18"></iconify-icon>
                </button>
                <button class="btn btn-sm btn-outline-info rounded-circle p-2 d-inline-flex align-items-center" title="Bagikan ke Twitter">
                  <iconify-icon icon="mdi:twitter" width="18" height="18"></iconify-icon>
                </button>
                <button class="btn btn-sm btn-outline-success rounded-circle p-2 d-inline-flex align-items-center" title="Bagikan ke WhatsApp">
                  <iconify-icon icon="mdi:whatsapp" width="18" height="18"></iconify-icon>
                </button>
                <button class="btn btn-sm btn-outline-secondary rounded-circle p-2 d-inline-flex align-items-center ms-auto" title="Simpan Artikel">
                  <iconify-icon icon="mdi:bookmark-outline" width="18" height="18"></iconify-icon>
                </button>
              </div>

              <!-- Article Content -->
              <article class="fs-5 text-secondary" style="line-height: 1.8;">
                <p>
                  <span class="display-4 float-start me-3 lh-1 fw-bold text-primary">D</span>i tengah kesibukan masyarakat modern, tren hobi memelihara burung berkicau atau yang sering disebut sebagai <strong>Kicau Mania</strong> justru semakin menunjukkan pesonanya. Tak hanya menjadi sarana relaksasi, hobi ini telah berkembang menjadi sebuah komunitas raksasa yang aktif dan solid di berbagai penjuru Nusantara.
                </p>
                <p>
                  Kicau mania mendunia dengan berbagai macam burung unik dari seluruh pelosok negeri. Burung-burung seperti Murai Batu, Kenari, Lovebird, hingga Cucak Rowo kini bukan sekadar peliharaan rumahan, melainkan menjadi "atlet" yang berkompetisi di arena kontes bergengsi yang memperebutkan hadiah hingga ratusan juta rupiah.
                </p>
                
                <h4 class="fw-bold mt-5 mb-3 text-dark">Mengapa Semakin Digemari?</h4>
                <p>
                  Menurut sejumlah pakar komunitas, daya tarik utama memelihara burung berkicau terletak pada proses interaksinya. Berbeda dengan memelihara hewan hias biasa, seekor burung kicau membutuhkan <em>bonding</em>, pelatihan mental, pola makan terukur, dan perawatan ekstra untuk bisa berkicau dengan merdu.
                </p>
                
                <!-- <div class="bg-light p-4 rounded-4 border-start border-4 border-primary my-4">
                  <figure class="m-0">
                    <blockquote class="blockquote fs-5 text-dark fw-medium fst-italic">
                      "Memelihara burung itu seperti merawat sebuah harmoni. Saat mereka bernyanyi merdu di pagi hari, ada rasa damai yang tidak bisa dibeli dengan uang."
                    </blockquote>
                    <figcaption class="blockquote-footer mt-2 mb-0 text-muted">
                      Hendra, <cite title="Source Title">Ketua Komunitas Kicau Mania Indonesia</cite>
                    </figcaption>
                  </figure>
                </div> -->
                
                <p>
                  Industri pendukung hobi ini pun turut melesat. Mulai dari produksi sangkar berukir mewah, pakan khusus, suplemen vitamin, hingga bermunculannya <em>event organizer</em> khusus untuk menggelar kontes tingkat nasional bahkan internasional.
                </p>
                <p>
                  Ke depannya, Kicau Mania diprediksi tidak akan lekang oleh zaman. Bahkan ada inisiatif untuk mulai mengangkat sisi pelestarian (konservasi) bagi jenis burung langka, sehingga para pecinta burung tidak hanya berperan sebagai penikmat kicau, melainkan juga pahlawan konservasi alam Indonesia.
                </p>
              </article>
            </div>
          </div>

          <!-- Author Box -->
          <div class="card border-0 shadow-sm rounded-4 mb-5 bg-white">
            <div class="card-body p-4 d-flex flex-column flex-md-row align-items-center gap-4 text-center text-md-start">
              <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center text-primary flex-shrink-0" style="width: 80px; height: 80px;">
                <iconify-icon icon="mdi:account-tie" width="48" height="48"></iconify-icon>
              </div>
              <div>
                <h5 class="fw-bold mb-1">Ditulis oleh Admin Portal Berita</h5>
                <p class="text-muted mb-0">Jurnalis senior yang memiliki spesialisasi di bidang hobi, gaya hidup, dan pengembangan komunitas. Aktif membagikan artikel inspiratif setiap minggunya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="../bootstrap-5.3.8-dist/js/bootstrap.js"></script>
  </body>
</html>

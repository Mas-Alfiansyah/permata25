<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link rel="stylesheet" href="admin/bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">📰 Portal Berita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Beranda</a></li>
                    <?php include 'menu.php'; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        $slug           = $_GET['slug'];

        // pilih semua kolom dari tabel kategori dimana kolom slug = $slug
        $sql            = "SELECT * FROM kategori WHERE slug = '$slug'";
        $hasil          = $conn->query($sql);
        $data_kategori  = $hasil->fetch_assoc();


        // pilih semua kolom dari table berita dimana kategori_id = $kategori_id;
        // "SELECT * FROM berita WHERE kategori_id = 1"

        $kategori_id    = $data_kategori['id'];
        $sql_berita     = "SELECT * FROM berita WHERE kategori_id = '$kategori_id'";
        $hasil_berita   = $conn->query($sql_berita);

        $data_berita = [];
        while($baris = $hasil_berita->fetch_assoc()) {
            $data_berita[] = $baris;
        }

        

        // echo "<pre>";
        // print_r($data_berita);
    ?>


    <!-- Daftar Berita Terbaru Kategori Teknologi -->
    <div class="container py-5">
        <h2 class="mb-4">Berita terbaru kategori <?php echo $data_kategori['nama_kategori'] ?> </h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-9 col-lg-9">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=800&auto=format&fit=crop" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Teknologi AI Berkembang Pesat</h5>
                        <p class="card-text">Perkembangan teknologi artificial intelligence semakin pesat dan mengubah industri secara global.</p>
                        <small class="text-muted">12 Januari 2024</small>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="berita.php?id=1" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="row g-4">
                    <!-- Card 2 -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card h-100 shadow-sm">
                            <img src="https://i0.wp.com/blog.tempoinstitute.com/wp-content/uploads/2025/11/Tempo-Institute-22.jpg?fit=1024%2C683&ssl=1" class="card-img-top" alt="Berita 2">
                            <div class="card-body">
                                <h5 class="card-title">Ekonomi Indonesia Tumbuh</h5>
                                <p class="card-text">Pertumbuhan ekonomi Indonesia mencapai 5.2% pada kuartal ketiga tahun ini.</p>
                                <small class="text-muted">10 Januari 2024</small>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <a href="berita.php?id=2" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
        
                    <!-- Card 3 -->
                    <div class="col-md-12 col-lg-12">
                        <div class="card h-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=800&auto=format&fit=crop" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                <h5 class="card-title">Olahraga: Piala Dunia 2026</h5>
                                <p class="card-text">Persiapan Piala Dunia 2026 telah memasuki fase penting dengan pembangunan stadion modern.</p>
                                <small class="text-muted">8 Januari 2024</small>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <a href="berita.php?id=3" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Daftar Berita Kategori Teknologi-->
    <div class="container py-5">
        <h2 class="mb-4">Kategori</h2>
        <div class="row g-4">

            <?php foreach($data_berita as $berita){ ?>

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=800&auto=format&fit=crop" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $berita['judul'] ?></h5>
                        <p class="card-text"><?php echo $berita['isi_berita'] ?></p>
                        <small class="text-muted"><?php echo $berita['tanggal_buat'] ?></small>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="berita.php?slug=<?php echo $berita['slug']; ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>


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
                        <li><a href="index.php" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a class="text-white text-decoration-none" href="kategori.php?kategori=teknologi">Teknologi</a></li>
                        <li><a class="text-white text-decoration-none" href="kategori.php?kategori=bisnis">Bisnis</a></li>
                        <li><a class="text-white text-decoration-none" href="kategori.php?kategori=hoby">hoby</a></li>
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
    <script>
        const params = new URLSearchParams(window.location.search);
        const kategori = params.get('kategori') || 'kategori';

        document.querySelectorAll('.kateogri').forEach(el => {
            el.textContent = kategori;
        });
    </script>
    <script src="admin/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
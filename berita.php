<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <link rel="stylesheet" href="admin/bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body> 
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">📰 Portal Berita</a>
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

    <!-- Detail Berita -->
    <div class="container py-5">
        <div class="row">
            <?php 
            $slug           = $_GET['slug'];

            $sql            = "SELECT * FROM berita WHERE slug = '$slug'";
            $hasil          = $conn->query($sql);
            $data_berita    = $hasil->fetch_assoc();

            ?>
            <div class="col-md-12 col-lg-12">
                <a href="index.php" class="btn btn-secondary mb-4">&larr; Kembali ke Beranda</a>
                <h1 id="judul" class="mb-3"><?php echo $data_berita['judul'] ?></h1>
                <div class="text-muted mb-4">
                    <small>Oleh <strong>Admin</strong> | <span id="tanggal">Tanggal</span></small>
                </div>
            </div>
            
            <div class="col-lg-8">
                <article>
                    <img id="gambar" src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=800&auto=format&fit=crop" class="img-fluid rounded mb-4" alt="Gambar Berita">
                    <div id="isi" class="lh-lg">
                        <p><?php echo $data_berita['isi_berita'] ?></p>
                    </div>
                </article>

                <hr class="my-5">
                
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Bagikan Berita Ini</h5>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary btn-sm">Facebook</button>
                            <button type="button" class="btn btn-outline-info btn-sm">Twitter</button>
                            <button type="button" class="btn btn-outline-success btn-sm">WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Berita Lainnya</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="berita.php" class="list-group-item list-group-item-action">Teknologi AI Berkembang Pesat</a>
                            <a href="berita.php" class="list-group-item list-group-item-action">Ekonomi Indonesia Tumbuh</a>
                            <a href="berita.php" class="list-group-item list-group-item-action">Olahraga: Piala Dunia 2026</a>
                        </div>
                    </div>
                </div>
            </div>
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
    


    <script src="admin/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        // Data berita sederhana
        const beritaData = {
            1: {
                judul: "Teknologi AI Berkembang Pesat",
                tanggal: "12 Januari 2024",
                gambar: "https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=800&auto=format&fit=crop",
                isi: `<p>Perkembangan teknologi artificial intelligence (AI) terus berkembang dengan pesat di seluruh dunia. Berbagai perusahaan teknologi besar sedang berinvestasi besar-besaran dalam pengembangan AI.</p>
                      <p>AI telah merevolusi berbagai industri termasuk kesehatan, pendidikan, manufaktur, dan banyak lagi. Kemampuan AI untuk memproses data besar dan membuat prediksi akurat membuat teknologi ini sangat berharga.</p>
                      <p>Namun, perkembangan AI juga membawa tantangan etika dan keamanan yang perlu diperhatikan dengan serius oleh semua pihak yang terlibat.</p>`
            },
            2: {
                judul: "Ekonomi Indonesia Tumbuh",
                tanggal: "10 Januari 2024",
                gambar: "https://i0.wp.com/blog.tempoinstitute.com/wp-content/uploads/2025/11/Tempo-Institute-22.jpg?fit=1024%2C683&ssl=1",
                isi: `<p>Pertumbuhan ekonomi Indonesia mencapai 5.2% pada kuartal ketiga tahun ini, menunjukkan tren positif dalam perekonomian nasional.</p>
                      <p>Pertumbuhan ini didorong oleh meningkatnya konsumsi domestik, investasi, dan ekspor. Sektor manufaktur dan layanan terus menunjukkan kinerja yang kuat.</p>
                      <p>Pemerintah terus melakukan berbagai kebijakan untuk mendukung pertumbuhan ekonomi yang berkelanjutan dan inklusif bagi seluruh masyarakat Indonesia.</p>`
            },
            3: {
                judul: "Olahraga: Piala Dunia 2026",
                tanggal: "8 Januari 2024",
                gambar: "https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=800&auto=format&fit=crop",
                isi: `<p>Persiapan Piala Dunia 2026 telah memasuki fase penting dengan pembangunan stadion modern di berbagai lokasi.</p>
                      <p>Tim nasional berbagai negara telah memulai latihan intensif untuk menyiapkan diri menghadapi turnamen terbesar sepak bola dunia ini.</p>
                      <p>Piala Dunia 2026 diharapkan akan menjadi ajang yang meriah dan menampilkan persaingan sepak bola terbaik dari seluruh penjuru dunia.</p>`
            }
        };

        // Ambil ID berita dari URL
        const params = new URLSearchParams(window.location.search);
        const beritaId = params.get('id') || 1;
        const berita = beritaData[beritaId];

        // Tampilkan berita
        if (berita) {
            document.getElementById('judul').textContent = berita.judul;
            document.getElementById('tanggal').textContent = berita.tanggal;
            document.getElementById('gambar').src = berita.gambar;
            document.getElementById('isi').innerHTML = berita.isi;
            document.title = berita.judul + " - Portal Berita";
        }
    </script> -->
</body>
</html>
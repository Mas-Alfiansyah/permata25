<?php

include 'config/connect.php';

$sql = "SELECT * FROM kategori";
$hasil = $conn->query($sql);

$daftar_kategori = [];
while($kolom = $hasil->fetch_assoc()){
    $daftar_kategori[] = $kolom;
} 
// echo "<pre>";
// print_r($daftar_kategori);
// die();

foreach($daftar_kategori as $kategori){ ?>
    <li class="nav-item">
        <a class="nav-link text-white" href="kategori.php?slug=<?= $kategori['slug'] ?>">
            <?php echo $kategori['nama_kategori'] ?>
        </a>
    </li>
<?php } ?>


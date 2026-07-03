<?php

//variabel, tipe data
$nama = "Alfiansyah";
$umur = 20;

// echo $nama;
// echo "<br>";
// echo $umur;

//array
$daftar_nama = ["Zaky", "Rika", "Ipan", "Shely", "Alvin"];
$nama = [
    [
        "nama" => "Zaky",
        "umur" => 24,
        "alamat" => "toket"
    ],
    [
        "nama" => "Kowi",
        "umur" => 16,
        "alamat" => "sampang"
    ],
    [
        "nama" => "Kiki",
        "umur" => 60,
        "alamat" => "Gro'om"
    ],
];

if($nama[1]["umur"] >= 17){
    echo "Anda boleh buat SIM";
}else{
    echo "Anda tidak boleh membuat SIM";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($nama as $nm){ ?>
            <p class="container"><?php echo $nm["nama"] ?></p>
            <p class="container"><?php echo $nm["umur"] ?></p>
            <p class="container"><?php echo $nm["alamat"] ?></p>
       <?php } ?>


</body>
</html>

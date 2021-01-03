<?php
session_start();
include 'koneksi.php';

$keyword = $_GET["keyword"];

$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'
    OR deskripsi_produk LIKE '%$keyword%'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DSLR</title>
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="stylesheet" href="style/DSLR.css" />
    <link rel="stylesheet" href="style/dropdown.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <style>
        .alert {
            padding: 50px;
            font-size: 50px;
            background-color: black;
            color: white;
        }

        strong {
            color: red;
        }
    </style>
    <script src="https://use.fontawesome.com/99cdecee55.js"></script>
</head>

<body>
    <?php include('template/navbar.php') ?>
    <section class="carousel">
        <img src="assets/banner/banner DSLR !.png" alt="">
    </section>
    <section class="best">
        <!-- <img src="assets/background/TOP 5.png" alt=""> -->
        <?php if (empty($semuadata)) : ?>
            <div class="alert">Produk <strong><?= $keyword; ?></strong> Tidak ditemukan</div>
        <?php else : ?>
            <div class="alert">Hasil Pencarian <strong><?= $keyword; ?></strong></div>
        <?php endif ?>
        <div class="card">
            <?php foreach ($semuadata as $key => $value) : ?>
                <div class="card-item">
                    <div class="ractangle">
                        <div class="display">
                            <h2><?= $value['nama_produk']; ?></h2>
                        </div>
                        <a href="detail.php?id=<?= $value['id_produk'] ?>">MORE</a>
                    </div>
                    <img src="foto_produk/<?= $value['foto_produk']; ?>" alt="" />
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <?php include('template/footer.php') ?>
    <?php include('template/javascript.php') ?>
    <?php include('template/jsdropdown.php') ?>
</body>

</html>
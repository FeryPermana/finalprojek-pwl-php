<?php
session_start();
include 'koneksi.php';
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
  <script src="https://use.fontawesome.com/99cdecee55.js"></script>
</head>

<body>
  <?php include('template/navbar.php') ?>
  <section class="carousel">
    <img src="assets/banner/banner DSLR !.png" alt="">
  </section>
  <section class="best">
    <h1 style="font-size: 80px; color:black; text-align:center">Produk</h1>
    <div class="card">
      <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
      <?php while ($produk = $ambil->fetch_assoc()) { ?>
        <div class="card-item">
          <div class="ractangle">
            <div class="display">
              <h2><?= $produk['nama_produk']; ?></h2>
            </div>
            <a href="detail.php?id=<?= $produk['id_produk'] ?>">MORE</a>
          </div>
          <img src="foto_produk/<?= $produk['foto_produk']; ?>" alt="" />
        </div>
      <?php } ?>
    </div>
  </section>
  <?php include('template/footer.php') ?>
  <?php include('template/javascript.php') ?>
  <?php include('template/jsdropdown.php') ?>
</body>

</html>
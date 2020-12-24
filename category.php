<?php
session_start();
include './koneksi.php';
$ambil = $koneksi->query("SELECT * FROM pemesanan JOIN pelanggan
                        ON pemesanan.id_pelanggan=pelanggan.id_pelanggan
                        WHERE pemesanan.id_pemesanan='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DSLR</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navbar.css">
  <link rel="stylesheet" href="style/dropdown.css">
  <link rel="stylesheet" href="style/category.css">
  <link rel="stylesheet" href="style/footer.css">
</head>

<body>
  <?php include('template/navbar.php') ?>
  <section class="carousel">
    <img src="assets/banner/banner DSLR !.png" alt="" class="show">
  </section>
  <section class="best">
    <img src="assets/background/TOP 5.png" alt="">
    <div class="card">
      <!-- JOIN jenis_produk ON produk.id_jenis_produk=jenis_produk.id_jenis_produk Where produk.id_jenis_produk='$_GET[id]' -->
      <?php $ambil = $koneksi->query("SELECT * FROM produk JOIN jenis_produk ON produk.id_jenis_produk=jenis_produk.id_jenis_produk Where produk.id_jenis_produk='$_GET[id]'"); ?>
      <?php while ($produk = $ambil->fetch_assoc()) { ?>
        <div class="card-item">
          <div class="ractangle">
            <div class="display">
              <h2><?= $produk['nama_produk']; ?></h2>
            </div>
            <a href="detail.php?id=<?= $produk['id_produk'] ?>">MORE</a>
          </div>
          <img src="foto_produk/<?= $produk['foto_produk']; ?>" alt="" height="40%" />
        </div>
      <?php } ?>
    </div>
  </section>


  <!-- <section class="product">
    <div class="card2">
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
  </section> -->

  <!-- <section class="add">
    <div class="card-oval">
      <div class="banner2">
        <h1>Lagi trending nih!</h1>
        <h3>kuy dicek duls...</h3>
      </div>
      <div class="card-oval-item">
        <div class="left">
          <img srcassets/camera/drone.png" alt="">
        </div>
        <div class="right">
          <h3>DJI Pro MK2</h3>
          <br>
          <h5>available (2)</h5>
        </div>
      </div>
      <div class="card-oval-item">
        <div class="left">
          <img srcassets/camera/drone.png" alt="">
        </div>
        <div class="right">
          <h3>DJI Pro MK2</h3>
          <br>
          <h5>available (2)</h5>
        </div>
      </div>
      <div class="card-oval-item">
        <div class="left">
          <img srcassets/camera/drone.png" alt="">
        </div>
        <div class="right">
          <h3>DJI Pro MK2</h3>
          <br>
          <h5>available (2)</h5>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="product">
    <div class="card2">

      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
      <div class="card-item2">
        <div class="ractangle">
          <div class="display">
            <h3>Sony Alpha A7 III</h3>
          </div>
          <a href="">MORE</a>
        </div>
        <img src="assets/camera/Z-SONY-A7M3-BEAUTY_preview_rev_1 1.png" alt="" />
      </div>
  </section> -->
  <footer>
    <h3>2016-2020 &copy; LateSleeps</h3>
  </footer>
  <?php include('template/dropdown.php') ?>
</body>

</html>
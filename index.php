<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="style/navbar.css" />
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/footer.css" />
  <link rel="stylesheet" href="style/dropdown.css" />
  <script src="https://use.fontawesome.com/99cdecee55.js"></script>
</head>

<body>
  <?php include('template/navbar.php') ?>
  <main>
    <section class="jumbotron">
      <div class="blue">
        <img src="assets/background/frame.png" alt="" srcset="" class="frame" />
        <img src="assets/background/camera display.png" alt="" srcset="" class="display" />
        <img src="assets/background/style.png" alt="" class="style" />
      </div>
      <div class="typo">
        <img src="assets/logo 2.png" alt="" />
        <p>
          Rental camera Yogyakarta jasa pelayanan sewa Camera termurah dan
          Terpercaya,siap melayani anda 24 jam demi kepuasan pelanggan.
        </p>
        <br /><br /><br />
        <button><a href="produk.php" class="selengkapnya" style="color: white;">Lihat Selengkapnya > ></a> </button>
      </div>
    </section>
    <!-- fiture -->
    <section class="fiture">
      <div><img src="assets/fiture/money.png" alt="" /></div>
      <div>
        <h1>Harga Murah</h1>
        <br /><br />
        <p>
          Harga termurah dan berkualitas hanya ada di kami Rental Camera
          Yogyakarta.
        </p>
      </div>

      <div><img src="assets/fiture/time.png" alt="" /></div>
      <div>
        <h1>Buka 24 Jam</h1>
        <br /><br />
        <p>
          Customer kami siap melayani anda 24 jam yang membutuhkan sewa camera
          di sekitar Yogyakarta
        </p>
      </div>

      <div><img src="assets/fiture/shield.png" alt="" /></div>
      <div>
        <h1>Harga Murah</h1>
        <br /><br />
        <p>
          Harga termurah dan berkualitas hanya ada di kami Rental Camera
          Yogyakarta.
        </p>
      </div>
    </section>
    <br /><br />

    <section class="review">
      <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/f0wf1WPu7JU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="creator">
        <div class="name">
          <div class="name_creator">Creator</div>
          <img src="assets/background/Sukonto Legowo, F.png" alt="" />
          <ul>
            <li>- Profecional video Creator</li>
            <li>- Youtuber</li>
            <li>- Conetent Creator</li>
          </ul>
          <div class="sosmet">
            <img src="assets/background/060-instagram.png" alt="" />
            <img src="assets/background/027-twitter.png" alt="" />
            <img src="assets/background/038-youtube.png" alt="" />
            <img src="assets/background/049-facebook.png" alt="" />
          </div>
        </div>
        <div class="gear"></div>
      </div>
    </section>

    <section class="top">
      <div class="title">
        <div class="left">
          <img src="assets/background/Hot Deals.png" alt="" />
        </div>
        <div class="right">
          <img src="assets/background/style2.png" alt="" />
        </div>
      </div>
      <class class="selers">
        <?php $ambil = $koneksi->query("SELECT * FROM produk LIMIT 4"); ?>
        <?php while ($produk = $ambil->fetch_assoc()) { ?>
          <div class="card">
            <div class="ractangle">
              <div class="display">
                <h2><?= $produk['nama_produk']; ?></h2>
              </div>
              <a href="detail.php?id=<?= $produk['id_produk'] ?>">MORE</a>
            </div>
            <img src="foto_produk/<?= $produk['foto_produk']; ?>" alt="" />
          </div>
        <?php } ?>
      </class>

      </div>
      <div class="downer">
        <div class="left">
          <img src="assets/background/style3.png" alt="" />
        </div>
        <div class="right">
        </div>
      </div>
    </section>

  </main>
  <?php include('template/footer.php') ?>
  <?php include('template/javascript.php') ?>
  <?php include('template/jsdropdown.php') ?>
</body>

</html>
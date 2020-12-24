<?php
session_start();
include './koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="style/navbar.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/dropdown.css">
  <link rel="stylesheet" href="style/footer.css">
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
        <p class="index-text">
          Rental camera Yogyakarta jasa pelayanan sewa Camera termurah dan
          Terpercaya,siap melayani anda 24 jam demi kepuasan pelanggan.
        </p>
        <br /><br /><br />
        <button>Lihat Selengkapnya > ></button>
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
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($produk = $ambil->fetch_assoc()) { ?>
          <div class="card">
            <div class="ractangle">
              <div class="display">
                <h2><?= $produk['nama_produk']; ?></h2>
              </div>
              <a href="detail.php?id=<?= $produk['id_produk'] ?>">MORE</a>
            </div>
            <img src="foto_produk/<?= $produk['foto_produk']; ?>" height="50%" />
          </div>
        <?php } ?>
      </class>
      </div>
      <div class="downer">
        <div class="left">
          <img src="../assets/background/style3.png" alt="" />
        </div>
        <div class="right">
        </div>
      </div>
    </section>

  </main>
  <section class="description">
    <div class="container">
      <img src="../assets/logo 3.png" alt="">
    </div>
    <div class="container"></div>
    <div class="container"></div>
    <div class="container">
      <p>Rental camera Yogyakarta jasa pelayanan sewa Camera termurah dan Terpercaya,siap melayani anda 24 jam demi kepuasan pelanggan.</p>
    </div>
    <div class="container">
      <h3>BUSINES HOURS</h3>
      <br>
      <p>Layanan kami buka selama 24 jam dalam Seminggu. </p>
      <br>
      <br>
      <p>Pembayaran:</p>
      <table>
        <tr>
          <td><img src="../assets/fiture/Bank Central Asia BCA_preview_rev_1 1.png" alt="" class="payman1"></td>
          <td><img src="../assets/fiture/logo-bank-mandiri-coreldraw 1.png" alt="" class="payman2"></td>
        </tr>
      </table>
      <br>
      <br>
      <br>
      <h3 class="my-footer">2016-2020 &copy; LateSleeps</h3>
    </div>
    <div class="container">
      <h3>HUBUNGI KAMI</h3>
      <br>
      <table>
        <tr>
          <td>Alamat </td>
          <td>: Jl.Diponegoro, No.56, Sleman, Jogja</td>
        </tr>
        <tr>
          <td>No HP/WA</td>
          <td>: 085726564257</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>: ewacamera2@gmail.com</td>
        </tr>
      </table>
    </div>
  </section>
  <footer>
    <h3>2016-2020 &copy; LateSleeps</h3>
  </footer>
  <?php include('template/dropdown.php') ?>
</body>

</html>
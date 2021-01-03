<?php include 'koneksi.php' ?>
<?php
// mendapatkan id produk
$id_produk = $_GET["id"];

// query ambil data

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

// echo '<pre>';
// print_r($detail);
// echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail</title>
  <link rel="stylesheet" href="style/navbar.css" />
  <link rel="stylesheet" href="style/detail.css" />
  <link rel="stylesheet" href="style/dropdown.css" />
  <link rel="stylesheet" href="style/footerd.css" />
  <script src="https://use.fontawesome.com/99cdecee55.js"></script>
</head>

<body>
  <?php include('template/navbar.php') ?>
  <main>
    <div class="page">Detail</div>
    <section class="detail">
      <div></div>
      <div class="product">
        <div class="ractangle1">
          <img src="foto_produk/<?= $detail["foto_produk"]; ?>" alt="" />
        </div>
      </div>
      <div class="description">
        <div class="ractangle2">
          <div class="name"><?= $detail["nama_produk"]; ?></div>
          <br />
          <div class="star">
            <img src="assets/background/stars.png" alt="" />
          </div>
          <br />
          <p>
          <p><?= $detail["deskripsi_produk"]; ?></p>
          </p>
          <br />
          <button class="price">Price</button>
          <h2>Rp. <?= number_format($detail["harga_produk"]); ?></h2>
          <h5>Stok: <?= $detail['stock_produk']; ?></h5>
          <form method="post">
            <div class="form-group">
              <div class="input-group">
                <?php
                if (empty($detail['stock_produk'])) {
                  echo "<script>
                                    alert('Stock kosong');
                                    location='index.php';
                                    </script>";
                }
                ?>
                <input type="number" placeholder="Masukan jumlah barang">
                <button class="add">Pesan</button>
              </div>
            </div>
          </form>
        </div>
        <br />
      </div>
      <div class="div">
        <img src="assets/background/style2.png" alt="" class="style" />
      </div>
    </section>
  </main>
  <?php include('template/footerd.php') ?>
  <?php include('template/javascript.php') ?>
  <?php include('template/jsdropdown.php') ?>
</body>

</html>
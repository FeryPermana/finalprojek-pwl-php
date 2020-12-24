<?php session_start(); ?>
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
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/dropdown.css">
    <link rel="stylesheet" href="style/detail.css">
    <link rel="stylesheet" href="style/footer.css">
</head>

<body>
    <?php include('template/navbar.php') ?>
    <main>
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
                    <br />
                    <p>
                        <br> <?= $detail["deskripsi_produk"]; ?><br>
                    </p>
                    <br /><br />
                    <br />
                    <br />
                    <h2> Rp. <?= number_format($detail["harga_produk"]); ?></h2><br>
                    <label>Masukan jumlah hari : </label>
                    <input type="number">
                </div>
                <br />
                <button class="pesan">Pesan</button>
                <button class="add">Tambahkan</button>
            </div>
            <div class="div">
                <img src="assets/background/style2.png" alt="" class="style" />
            </div>
        </section>
    </main>
    <footer>
        <h3>2016-2020 &copy; LateSleeps</h3>
    </footer>
    <?php include('template/dropdown.php') ?>
</body>

</html>
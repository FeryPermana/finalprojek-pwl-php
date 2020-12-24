<?php
if (!isset($_SESSION['admin'])) {
    echo "<script>
            alert('Eitsss anda harus login ya wkwkwk');
        </script>";
    echo "<script>
        location='login.php';
    </script>";
    exit();
}
?>
<h2>Tambah Produk</h2>
<?php
$nomor = 1;
$ambil = $koneksi->query("SELECT * FROM jenis_produk");
?>
<div class="card-body shadow rounded">
    <form method="post">
        <div class="form-group">
            <label>Nama Jenis Produk</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <button class="btn btn-primary" name="tambah">tambah</button>
    </form>
</div>
<?php
if (isset($_POST['tambah'])) {
    $koneksi->query("INSERT INTO jenis_produk
    (nama_jenis_produk)
    VALUES('$_POST[nama]')");

    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php?halaman=jenisproduk';
        </script>";
}
?>
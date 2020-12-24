<h2>Edit produk</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM jenis_produk WHERE jenis_produk.id_jenis_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

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
<div class="card-body shadow rounded">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Jenis Produk</label>
            <input type="text" class="form-control" name="nama" value="<?= $pecah['nama_jenis_produk'] ?>">
        </div>
        <button class="btn btn-primary" name="update">Update</button>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $koneksi->query("UPDATE jenis_produk SET nama_jenis_produk='$_POST[nama]'
            WHERE id_jenis_produk='$_GET[id]'");
    echo "<script>
        alert('data jenis produk berhasil diubah');
        document.location.href = 'index.php?halaman=jenisproduk';
    </script>";
}

?>
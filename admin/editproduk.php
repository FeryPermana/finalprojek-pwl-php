<h2>Edit produk</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE produk.id_produk='$_GET[id]'");
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

<?php
$datajenisbarang = array();
$ambil = $koneksi->query("SELECT * FROM jenis_produk");
while ($tiap = $ambil->fetch_assoc()) {
    $datajenisbarang[] = $tiap;
}

?>
<div class="card-body shadow rounded">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="nama" value="<?= $pecah['nama_produk'] ?>">
        </div>
        <div class="form-group">
            <select name="nama_jenis_produk">
                <option>Pilih Jenis Barang</option>
                <?php foreach ($datajenisbarang as $key => $value) : ?>
                    <option value="<?= $value["id_jenis_produk"] ?>" <?php if ($pecah["id_jenis_produk"] == $value["id_jenis_produk"]) {
                                                                            echo "selected";
                                                                        } ?>>
                        <?= $value["nama_jenis_produk"]; ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="harga" value="<?= $pecah['harga_produk'] ?>">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock" value="<?= $pecah['stock_produk'] ?>">
        </div>
        <div class="form-gorup">
            <img src="../foto_produk/<?= $pecah['foto_produk'] ?>" width="200">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="10" class="form-control"><?= $pecah['deskripsi_produk'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Ganti Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button class="btn btn-primary" name="update">Update</button>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    // jika foto dirubah


    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");
        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',
            stock_produk='$_POST[stock]',
            foto_produk='$namafoto',
            deskripsi_produk='$_POST[deskripsi]',
            id_jenis_produk='$_POST[nama_jenis_produk]'
            WHERE id_produk='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',
            stock_produk='$_POST[stock]',
            deskripsi_produk='$_POST[deskripsi]',
            id_jenis_produk='$_POST[nama_jenis_produk]'
            WHERE id_produk='$_GET[id]'");
    }
    echo "<script>
            alert('data produk berhasil diubah');
            document.location.href = 'index.php?halaman=produk';
            </script>";
}
?>
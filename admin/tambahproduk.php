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
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <select name="nama_jenis_produk">
                <option>Pilih Jenis Barang</option>
                <?php foreach ($datajenisbarang as $key => $value) : ?>
                    <option value="<?= $value["id_jenis_produk"] ?>"><?= $value["nama_jenis_produk"]; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="10" class="ckeditor form-control" id="ckedtor"></textarea>
        </div>
        <div class=" form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
    </form>
</div>
<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_produk/" . $nama);
    $koneksi->query("INSERT INTO produk
    (nama_produk,id_jenis_produk,harga_produk,stock_produk,foto_produk,deskripsi_produk)
    VALUES('$_POST[nama]','$_POST[nama_jenis_produk]','$_POST[harga]','$_POST[stock]','$nama','$_POST[deskripsi]')");

    echo '<script>
            document.location.href = "index.php?halaman=produk";
        </script>';
}
?>
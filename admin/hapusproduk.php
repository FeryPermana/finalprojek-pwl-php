<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
if (file_exists("../foto_produk/$fotoproduk")) {
    unlink("../foto_produk/$fotoproduk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php?halaman=produk';
        </script>";
if (!isset($_SESSION['admin'])) {
    echo "<script>
                    alert('Eitsss anda harus login ya wkwkwk');
                </script>";
    echo "<script>
                location='login.php';
            </script>";
    exit();
}

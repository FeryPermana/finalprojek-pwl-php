<?php
$ambil = $koneksi->query("SELECT * FROM jenis_produk WHERE id_jenis_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM jenis_produk WHERE id_jenis_produk='$_GET[id]'");

echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php?halaman=jenisproduk';
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

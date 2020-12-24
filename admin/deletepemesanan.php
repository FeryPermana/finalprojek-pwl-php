<?php
$ambil = $koneksi->query("SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id]'");

echo "<script>
            alert('Pemesanan berhasil dibatalkan');
            document.location.href = 'index.php?halaman=pemesanan';
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

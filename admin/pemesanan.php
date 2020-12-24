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
include '../koneksi.php';
?>
<h2>Data Pemesanan</h2>

<div class="card-body shadow rounded">
    <table class="table table-bordered">
        <thead class="text-white bg-primary">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Pemesanan</th>
                <th>Jumlah Hari</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $ambil = $koneksi->query("SELECT * FROM pemesanan JOIN pelanggan 
                                    ON pemesanan.id_pelanggan=
                                    pelanggan.id_pelanggan");
            ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $pecah['nama_pelanggan']; ?></td>
                    <td><?= $pecah['tanggal_pemesanan']; ?></td>
                    <td><?= $pecah['jumlah_hari']; ?> Hari</td>
                    <td>Rp. <?= number_format($pecah['total_pemesanan']); ?></td>
                    <td>
                        <a href="index.php?halaman=detail&id=<?= $pecah['id_pemesanan'] ?>" class="btn btn-info">Detail</a>
                        <a href="index.php?halaman=deletepemesanan&id=<?= $pecah['id_pemesanan'] ?>" class="btn btn-danger">Batalkan</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
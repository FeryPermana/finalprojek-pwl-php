<h2>Detail Pembelian</h2>
<?php include '../koneksi.php';
?>
<!-- mengambil id_pemesanan  -->
<?php
$ambil = $koneksi->query("SELECT * FROM pemesanan JOIN pelanggan
                        ON pemesanan.id_pelanggan=pelanggan.id_pelanggan
                        WHERE pemesanan.id_pemesanan='$_GET[id]'");
$detail = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($detail);
// echo "</pre>";
// validasi session login admin 
// if (!isset($_SESSION['admin'])) {
//     echo "<script>
//             alert('Eitsss anda harus login ya wkwkwk');
//         </script>";
//     echo "<script>
//         location='login.php';
//     </script>";
//     exit();
// }
?>

<div class="row mb-5">
    <div class="col-md-4 alert alert-info">
        <h3>Penyewaan</h3>
        <strong>No Penyewaan: <?= $detail['id_pemesanan']; ?></strong><br>
        Tanggal: <?= $detail['tanggal_pemesanan']; ?> <br>
        Total : Rp <?= number_format($detail['total_pemesanan']) ?>
    </div>
    <div class="col-md-4 alert alert-warning">
        <h3>Pelanggan</h3>
        <strong><?= $detail['nama_pelanggan']; ?></strong> <br>
        <p>
            No Telepon: <?= $detail['telepon_pelanggan']; ?> <br>
            Email: <?= $detail['email_pelanggan']; ?>
        </p>
    </div>
    <div class="col-md-4 alert alert-dark">
        <h3>Jumlah Hari</h3>
        <strong><?= $detail['jumlah_hari']; ?> Hari</strong>
    </div>
</div>
<div class="card-body shadow rounded">
    <table class="table table-bordered">
        <thead class="text-white bg-primary">
            <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Gambar</th>
                <th>harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $ambil = $koneksi->query("SELECT * FROM pemesanan_produk WHERE id_pemesanan='$_GET[id]'");
            ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $pecah['nama']; ?></td>
                    <td>Rp. <?= number_format($pecah['harga']) ?></td>
                    <td><?= $pecah['jumlah']; ?></td>
                    <td>
                        Rp. <?= number_format($pecah['subharga']); ?>
                    </td>
                    <td>
                        Rp. <?= number_format($pecah['subharga'] * $pecah['jumlah']) ?>
                    </td>
                </tr>
            <?php }  ?>
        </tbody>
</div>
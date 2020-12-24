<?php
$semuadata = array();
$tanggal_mulai = "-";
$tanggal_selesai = "-";
if (isset($_POST["kirim"])) {
    $tanggal_mulai = $_POST["tanggalMulai"];
    $tanggal_selesai = $_POST["tanggalSelesai"];
    $ambil = $koneksi->query("SELECT * FROM pemesanan pm LEFT JOIN pelanggan pl ON
            pm.id_pelanggan=pl.id_pelanggan WHERE tanggal_pemesanan BETWEEN '$tanggal_mulai' AND '$tanggal_selesai'");
    while ($pecah = $ambil->fetch_assoc()) {
        $semuadata[] = $pecah;
    }
    // echo "<pre>";
    // print_r($semuadata);
    // echo "</pre>";
}
?>
<h2>Laporan Penyewaan dari <?php echo $tanggal_mulai; ?> hingga <?php echo $tanggal_selesai; ?></h2>
<form method="post">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggalMulai">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" name="tanggalSelesai">
            </div>
        </div>
        <div class="col-md-2">
            <label>&nbsp;</label><br>
            <button class="btn btn-primary" name="kirim">Lihat</button>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <thead class="bg-primary text-white">
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <?php $total = 0; ?>
    <tbody>
        <?php foreach ($semuadata as $key => $value) : ?>
            <?php
            $total += $value['total_pemesanan'];
            ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value["nama_pelanggan"]; ?></td>
                <td><?= $value["tanggal_pemesanan"]; ?></td>
                <td>Rp. <?= number_format($value["total_pemesanan"]) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="3">Total</th>
            <th>Rp. <?= number_format($total); ?></th>
        </tr>
    </tfoot>
</table>
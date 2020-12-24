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
<h2>Data Produk</h2>
<a href="index.php?halaman=tambahjenis" class="btn btn-primary mb-3">Tambah Data</a>
<div class="card-body shadow rounded">
    <table class="table table-bordered">
        <thead class="text-white bg-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $ambil = $koneksi->query("SELECT * FROM jenis_produk");
            ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $pecah['nama_jenis_produk']; ?></td>
                    <td>
                        <a href="index.php?halaman=hapusjenis&id=<?= $pecah['id_jenis_produk'] ?>" class="btn btn-danger">Hapus</a>
                        <a href="index.php?halaman=editjenis&id=<?= $pecah['id_jenis_produk'] ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
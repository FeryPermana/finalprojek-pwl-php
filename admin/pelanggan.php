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
<h2>Data Pelanggan</h2>

<div class="card-body shadow rounded">
    <table class="table table-bordered">
        <thead class="text-white bg-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ambil = $koneksi->query("SELECT * FROM pelanggan");
            $nomor = 1;
            ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $pecah['nama_pelanggan']; ?></td>
                    <td><?= $pecah['email_pelanggan']; ?></td>
                    <td><?= $pecah['telepon_pelanggan']; ?></td>
                    <td>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
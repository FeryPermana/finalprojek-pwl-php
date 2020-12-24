<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
    echo "<script>
            alert('Eitsss anda harus login ya wkwkwk');
        </script>";
    echo "<script>
        location='login.php';
    </script>";
    header('location:login.php');
    exit();
}
?>

<?php
include('template/header.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('template/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('template/topbar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == "produk") {
                            include 'produk.php';
                        } elseif ($_GET['halaman'] == "pemesanan") {
                            include 'pemesanan.php';
                        } elseif ($_GET['halaman'] == "deletepemesanan") {
                            include 'deletepemesanan.php';
                        } elseif ($_GET['halaman'] == "pelanggan") {
                            include 'pelanggan.php';
                        } elseif ($_GET['halaman'] == "detail") {
                            include 'detail.php';
                        } elseif ($_GET['halaman'] == "tambahproduk") {
                            include 'tambahproduk.php';
                        } elseif ($_GET['halaman'] == "hapusproduk") {
                            include 'hapusproduk.php';
                        } elseif ($_GET['halaman'] == "editproduk") {
                            include 'editproduk.php';
                        } elseif ($_GET['halaman'] == "logout") {
                            include 'logout.php';
                        } elseif ($_GET['halaman'] == "jenisproduk") {
                            include 'jenisproduk.php';
                        } elseif ($_GET['halaman'] == "tambahjenis") {
                            include 'tambahjenisproduk.php';
                        } elseif ($_GET['halaman'] == "editjenis") {
                            include 'editjenisproduk.php';
                        } elseif ($_GET['halaman'] == "hapusjenis") {
                            include 'hapusjenisproduk.php';
                        } elseif ($_GET['halaman'] == "laporan_penyewaan") {
                            include 'laporan.php';
                        }
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('template/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include('template/bottom.php') ?>
</body>

</html>
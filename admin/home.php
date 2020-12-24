<h2 class="text-dark">Selamat datang administrator <b> <?= $_SESSION['admin']['username']; ?> </b></h2>
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
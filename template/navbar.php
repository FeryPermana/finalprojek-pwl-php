<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<nav class="wrapper">
    <div class="logo">
        <img src="../assets/logo.png" alt="" />
    </div>
    <div class="nav">
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <?php
            $datajenisbarang = array();
            $ambil = $koneksi->query("SELECT * FROM jenis_produk");
            while ($tiap = $ambil->fetch_assoc()) {
                $datajenisbarang[] = $tiap;
            }
            ?>
            <li class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Category
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <?php foreach ($datajenisbarang as $key => $value) : ?>
                        <a href="category.php?category&id=<?= $value["id_jenis_produk"] ?>"><?= $value["nama_jenis_produk"]; ?></a>
                    <?php endforeach ?>
                </div>
            </li>
            <li><a href="#">About</a></li>
            <li class="login"><a href="./index.php">Login</a></li>
            <li class="register"><a href="./index.php">Register</a></li>
        </ul>
    </div>
    <div class="icon">
        <form>
            <input class="search" type="text" placeholder="Cari..." required>
            <input class="button" type="button" value="Cari">
        </form>
        <!-- <img src="./assets/nav/trolley-cart.png" alt="" /> -->
    </div>
</nav>
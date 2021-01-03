<nav>
    <div class="menu">
        <img src="../assets/logo.png" alt="" />
        <ul>
            <li>
                <href href="#"></href>
            </li>
            <li><a href="index.php" class="menu-item">Home</a></li>
            <li><a href="produk.php" class="menu-item">Produk</a></li>
            <?php
            $datajenisbarang = array();
            $ambil = $koneksi->query("SELECT * FROM jenis_produk");
            while ($tiap = $ambil->fetch_assoc()) {
                $datajenisbarang[] = $tiap;
            }
            ?>
            <li class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Kategory</button>
                <div id="myDropdown" class="dropdown-content">
                    <?php foreach ($datajenisbarang as $key => $value) : ?>
                        <a href="kategory.php?kategory&id=<?= $value["id_jenis_produk"] ?>"><?= $value["nama_jenis_produk"]; ?></a>
                    <?php endforeach ?>
                </div>
            </li>

            <li><a href="about.php" class="menu-item">About</a></li>
            <li>
                <a href="#" id="search"><i class="fa fa-search"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-basket"></i></a>
            </li>
            <?php if (isset($_SESSION["pelanggan"])) : ?>
                <li>
                    <a href="logout.php" class="menu-item">Logout</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="login.php" class="menu-item">Login</a>
                </li>
            <?php endif ?>
        </ul>
        <div class="search-form">
            <form action="">
                <input type="text" placeholder="Search K Arta" />
            </form>
        </div>
        <a href="" class="close"><i class="fa fa-times"></i></a>
    </div>
</nav>
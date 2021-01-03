-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 13.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokonative`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'adminlengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` int(11) NOT NULL,
  `nama_jenis_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `nama_jenis_produk`) VALUES
(2, 'Tripod'),
(6, 'Lensa'),
(7, 'Flash'),
(8, 'Michrophone Kamera'),
(11, 'Kamera Mirolless'),
(12, 'Kamera DSLR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(11) NOT NULL,
  `nama_jenis_kamera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL,
  `password_pelanggan` varchar(255) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `alamat`, `telepon_pelanggan`) VALUES
(4, 'permana@gmail.com', 'permana', 'permana', 'bqoFBQIOWFNOIQWNDINOIFNWQOIDQWNIQNIWDWDW', 2147483647),
(5, 'baru@gmail.com', 'baru', 'baru', 'fwqdwd', 810923213),
(6, 'userbaru@gmail.com', 'userbaru', 'userbaru', 'universitas amikom yogyakarta', 2147483647),
(7, 'fery@gmail.com', 'fery', 'fery', 'wedomartani,Ngemplak, Sleman', 897612782),
(8, 'pelanggan@gmail.com', 'pelanggan', 'pelanggan', 'buiwbfluibeiuwf', 89823323),
(9, 'asiyap@gmail.com', '$2y$10$qwCWoD6lfMC..B3Xa8JYTeeN.hfVPGo/Sq8D6ap6J0gR5SrirhlqK', 'asiayap', 'dimana aja', 2147483647),
(10, 'woyy@gmail.com', '$2y$10$zu0DbmPe866/EG3xcBGJ1Op39hn3/9flr6v9VsZhs0WnDxsDE5je.', 'woyy', 'QOWFQWDFQWd', 2147483647),
(11, 'bejo@gmail.com', '$2y$10$C62glxrJDGw/wTIYxCmNo.ESuAqYlEnvdDI2ZDxNPCSpjJ7jirErO', 'bejo', 'sleman yogyakarta diiuashoidJSD', 712637162);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_pemesanan` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `tanggal_pemesanan`, `total_pemesanan`, `jumlah_hari`) VALUES
(111, 5, '2020-12-17', 250, 1),
(112, 5, '2020-12-17', 500, 2),
(113, 4, '2020-12-17', 409440000, 12),
(115, 7, '2020-12-20', 137283000, 12),
(116, 8, '2020-12-23', 40000000, 2),
(117, 8, '2020-12-23', 2147483647, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `subharga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pemesanan`, `id_produk`, `jumlah`, `nama`, `harga`, `subharga`) VALUES
(77, 79, 51, 1, 'micropone', 10000000, '10000000'),
(78, 80, 51, 1, 'micropone', 10000000, '10000000'),
(79, 81, 25, 2, 'FUJIFILM X-A10', 250, '500'),
(80, 81, 51, 1, 'micropone', 10000000, '10000000'),
(81, 82, 51, 2, 'micropone', 10000000, '20000000'),
(82, 82, 52, 1, 'Lensa Kit', 120000, '120000'),
(83, 83, 51, 1, 'micropone', 10000000, '10000000'),
(84, 84, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(85, 84, 51, 12, 'micropone', 10000000, '120000000'),
(86, 85, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(87, 86, 25, 2, 'FUJIFILM X-A10', 250, '500'),
(88, 86, 51, 1, 'micropone', 10000000, '10000000'),
(89, 86, 52, 7, 'Lensa Kit', 120000, '840000'),
(90, 105, 25, 3, 'FUJIFILM X-A10', 250, '750'),
(91, 105, 55, 1, 'Canon EOS 120i120D', 24000000, '24000000'),
(92, 106, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(93, 107, 52, 7, 'Lensa Kit', 120000, '840000'),
(94, 108, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(95, 109, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(96, 110, 51, 12, 'micropone', 10000000, '120000000'),
(97, 111, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(98, 112, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(99, 113, 51, 1, 'micropone', 10000000, '10000000'),
(100, 113, 52, 1, 'Lensa Kit', 120000, '120000'),
(101, 113, 55, 1, 'Canon EOS 120i120D', 24000000, '24000000'),
(102, 114, 51, 2, 'micropone', 10000000, '20000000'),
(103, 114, 25, 2, 'FUJIFILM X-A10', 250, '500'),
(104, 114, 56, 1, 'lensa keren eddan', 240000000, '240000000'),
(105, 115, 25, 1, 'FUJIFILM X-A10', 250, '250'),
(106, 115, 51, 1, 'micropone', 10000000, '10000000'),
(107, 115, 52, 12, 'Lensa Kit', 120000, '1440000'),
(108, 116, 53, 1, 'Canon EOS 70D', 10000000, '10000000'),
(109, 116, 51, 1, 'micropone', 10000000, '10000000'),
(110, 117, 51, 20, 'micropone', 10000000, '200000000'),
(111, 117, 25, 2, 'FUJIFILM X-A10', 250, '500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `foto_produk` varchar(225) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stock_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_jenis_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stock_produk`) VALUES
(25, 12, 'Canon EOS 6D Mark IV', 2500000, 'Canon EOS 6D Mark IV.png', 'INCLUDED:\r\n-Unit\r\n-SDHC Sandisk Ultra 32GB x2\r\n-Baterai x2\r\n-Charger\r\n-Bag\r\n', 10),
(51, 12, 'canon-1300d-1', 10000000, 'canon-1300d-1.png', 'Sewa Kamera Canon EOS 1300D Kit EF-S 18-55mm IS II Garansi Distributor dilengkapi dengan Sensor 18 MegaPixel ukuran APS-C dan image prosesor DIGIC 4 + fitur kinerja tinggi. Canon EOS 1300D memiliki fitur auto shooting yang melimpah dan memungkinkan Anda untuk mengambil foto yang indah terlepas dari subjek dan genre. Wi-Fi dan NFC di Canon EOS 1300D ini memungkinkan transfer file yang mudah ke perangkat lain. Semua lebih nyaman untuk berbagi foto-foto indah di media sosial.', 12),
(52, 12, 'canon-eos-1200d-1', 1200000, 'canon-eos-1200d-1.png', 'Sewa kamera di Jogja Canon EOS 1200D Kit EF-S18-55 IS II adalah Kamera DSLR dengan seri 4 Digit terbaru dari Canon. Kamera DSLR Canon EOS 1200D ini dilengkapi juga dengan spesifikasi dan fitur yang mudah digunakan bagi Fotografer Pemula.', 22),
(53, 12, 'canon-eos-3000d', 12000000, 'canon-eos-3000d-731-sewa canon 3000d jogja.png', 'EOS 3000D dilengkapi dengan banyak fungsi pemotretan penting yang sudah melekat pada kamera EOS. Autofocusing (AF) cepat dapat dengan mudah diperoleh dengan AF 9 titik yang memiliki titik AF tipe silang di bagian tengah. Anda dapat menangkap gambar subjek bergerak yang serba tajam, bahkan di bawah kondisi rendah cahaya dengan kisaran luas ISO speed, ISO 100 – 6400 (dapat diperluas hingga ISO 12800). Sensor CMOS ukuran APS-C 18 megapiksel dan prosesor gambar DIGIC, juga memastikan bahwa kamera ini mampu menangkap gambar dengan noise sangat sedikit, warna-warni yang direproduksi dengan baik, serta gradasi warna yang kaya.', 12),
(54, 12, 'DSLR Canon EOS 5D Mark II', 24000000, 'DSLR Canon EOS 5D Mark II.jpg', 'Pembaruan Canon menuju full-frame yang sangat populer yaitu EOS 5D ada di sini, dan lebih baik dari sebelumnya. EOS 5D Mark II memiliki sensor CMOS full-frame 21,1 megapixel yang menakjubkan dengan DIGIC 4 Image Processor, Range ISO 100-6400 yang luas (dapat dikembangkan menjadi ISO L: 50, H1: 12800 dan H2: 25600), ditambah teknologi EOS seperti Auto Lighting Optimizer dan Koreksi Iluminasi Periferal. Ini mendukung penembakan Live View, video Live View HD, dan banyak lagi. Ini bisa menghasilkan 3,9 fps, memiliki 9 titik AF ditambah 6 poin assist AF, cakupan baru jendela bidik 98%, LCD Clear View 3,0 inci (920.000 titik / VGA) dan kamera yang kokoh. Sukacita untuk pemotret full-frame !\r\n', 12),
(55, 12, 'DSLR Canon EOS 700D', 24000000, 'DSLR Canon EOS 700D.jpg', 'EOS 700D menawarkan kinerja yang padat dan penuh, merupakan salah satu DSLR yang terbaik pada entry level dengan kualitas gambar yang tinggi, berbagai fungsi Live View AF dan video.  Layar yang bisa dilipat dan diputar serta dengan kemampuan layar sentuh kapasitif serta desain Mode Dialed 360 derajat yang baru dan Creative Filter juga pasti akan memperluas inspirasi dan ekspresi kreatif.\r\n\r\n9-point semua cross-type AF\r\nKecepatan pemotretan terus menerus (sekitar 5 fps)\r\nVari-angle Clear View LCD II monitor', 14),
(56, 12, 'Kamera DSLR Canon EOS 1000D', 240000000, '20471000D2.png', 'Canon EOS 1000D atau dikenal juga dengan sebutan Digital Rebel XS, adalah kamera digital SLR dengan resolusi 10.1 megapixel menggunakan sensor CMOS. Kamera Canon EOS 1000D memiliki body yang terbuat dari plastic khusus dimana plastic tersebut telah dilengkapi dengan karet pada bagian tertentu.\r\n\r\nJika kita lihat casing dari body camera EOS 1000D ini, casingnya terbuat dari stainless steel. Ada dua warna yang ditawarkan untuk kamera Canon EOS 1000D ini, yaitu warna silver dan warna hitam. Kamera digital Canon EOS 1000D adalah nama yang digunakan pada pemasaran di wilayah Eropa, sedangkan pada wilayah Jepang dikenal sebagai Digital Rebel XS atau Canon EOS Kiss Digital F.', 11),
(61, 11, '19EOS-M3-Kit putih', 500000, '19EOS-M3-Kitputih.jpg', 'Dominasi kamera mirrorless dari brand lain memaksa Canon harus berjuang keras agar kamera mirrorless miliknya bisa laris di pasaran. Meski bukan yang terbaik di kelasnya, Canon EOS M3 tetap berhasil memukau kami dengan hasil foto dan kinerjanya yang memang patut diacungi jempol.\r\n\r\nPembaruan teknologi autofokus yang kini lebih cepat, kendali ala kamera DSLR dan pengoperasiannya yang amat mudah bisa menjadi faktor yang membuatnya layak dipertimbangkan. Pun demikian dengan dukungan adapter tambahan dan bisa menggunakan seluruh jajaran lensa Canon, menjadikannya sangat kami rekomendasikan untuk para pengguna DSLR Canon yang ingin beralih ke kamera mirrorless atau menjadikan kamera mirrorless sebagai kamera kedua.\r\n\r\nYang Canggih\r\n+ Hasil foto amat baik\r\n+ Kinerja autofokus cepat\r\n+ Kendali noise di ISO tinggi cukup baik\r\n+ Hand grip nyaman digenggam\r\n+ Layar sentuh responsif\r\n+ Mudah digunakan\r\n\r\nYang Kurang\r\n– Suara shutter relatif kencang\r\n– Saat terhubung ke smartphone lewat WiFi, masih terasa lag saat memotret di mode remote\r\n– Lensa EF-M masih sedikit\r\n– Continuos Shoot lambat', 90);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indeks untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

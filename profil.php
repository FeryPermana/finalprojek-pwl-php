<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil</title>
  <link rel="stylesheet" href="style/navbar.css" />
  <link rel="stylesheet" href="style/profile.css" />
  <link rel="stylesheet" href="style/dropdown.css" />
  <link rel="stylesheet" href="style/footerd.css" />
  <script src="https://use.fontawesome.com/99cdecee55.js"></script>

<body>
  <?php include('template/navbar.php') ?>
  <main>
    <div class="container">
      <div class="bar1">
        <h2>Profil Saya</h2>
        <p>
          Kelola informasi profil Anda untuk mengontrol, melindungi dan
          mengamankan akun
        </p>
        <br />
        <div class="line"></div>
      </div>
      <div class="bar2">
        <div class="form">
          <form action="">
            <table>
              <tr>
                <td><label for="Username">Username</label></td>
                <td><label for="Username">Latesleeps</label></td>
              </tr>
              <br />
              <tr>
                <td><label for="Name">Nama</label></td>
                <td><input type="text" placeholder="Nama" /></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td><label for="email">mr.Deadpool19.wtf</label></td>
              </tr>
              <tr>
                <td><label for="Notlp">Nomor Telephone</label></td>
                <td><input type="number" placeholder="+62" /></td>
              </tr>
              <tr>
                <td><label for="gender">Jenis Kelamin</label></td>
                <td><input type="radio" />Laki-Laki</td>
                <td><input type="radio" />Perempuan</td>
              </tr>
              <tr>
                <td>
                  <label for="TTL">Tanggal Lahir</label>
                </td>
                <td>
                  <select name="" id="" aria-placeholder="tanggal">
                    tanggal
                  </select>
                </td>
                <td>
                  <select name="" id="" aria-placeholder="tanggal">
                    tanggal
                  </select>
                </td>
                <td>
                  <select name="" id="" aria-placeholder="tanggal">
                    tanggal
                  </select>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <button>Simpan</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <div class="picture">
          <img src="assets/dummy/ferry.jpeg" alt="" />
          <br />
          <button>Pilih Gambar</button>
          <br />
          <br />
          <p>Ukuran gambar: maks. 1 MB Format gambar: .JPEG, .PNG</p>
        </div>
      </div>
    </div>
  </main>
  <?php include('template/footerd.php') ?>
  <?php include('template/javascript.php') ?>
  <?php include('template/jsdropdown.php') ?>
</body>

</html>
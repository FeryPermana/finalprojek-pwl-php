<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style/login.css" />
  <link rel="stylesheet" href="style/footer.css" />
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <script src="https://use.fontawesome.com/99cdecee55.js"></script>
</head>

<body>
  <main>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form method="post">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input type="text" placeholder="Name" name="nama" required />
          <input type="email" placeholder="Email" name="email" required />
          <input type="password" placeholder="Password" name="password" required />
          <input type="text" placeholder="Alamat" name="alamat" required />
          <input type="number" placeholder="Nomor HP" name="telepon" required />
          <button name="daftar">Sign Up</button>
        </form>
        <?php
        // jika ada tombol dafta di tekan
        if (isset($_POST["daftar"])) {
          // mengambil isian nama,email, password,alamat, telepon
          $nama = $_POST["nama"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $alamat = $_POST["alamat"];
          $telepon = $_POST["telepon"];


          // cek apakah email sudah digunakan
          $ambil = $koneksi->query("SELECT * FROM pelanggan
                                        WHERE email_pelanggan='$email'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok == 1) {
            echo "<script>
                                    alert('pendaftaran gagal, email sudah digunakan');
                                    location='daftar.php';
                                </script>";
          } else {
            // query insert pelanggan
            $password = mysqli_real_escape_string($koneksi, $password);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $koneksi->query("INSERT INTO pelanggan
                                            (email_pelanggan,password_pelanggan,nama_peLanggan,telepon_pelanggan,alamat)
                                            VALUES('$email', '$password', '$nama','$telepon','$alamat') ");

            echo "<script>
                                        alert('pendaftaran berhasil silahkan login');
                                        location='login.php';
                                        </script>";
          }
        }
        ?>
      </div>
      <div class="form-container sign-in-container">
        <form method="post">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <a href="#">Forgot your password?</a>
          <button name="login">Sign In</button>
        </form>
        <?php
        if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];

          // lakukan query mengecek akun di tabel pelanggan database
          $ambil = $koneksi->query("SELECT * FROM pelanggan
                            WHERE email_pelanggan='$email'");
          // menghitung akun yg terambil
          $akuncocok = $ambil->num_rows;

          // jika 1 akun yang cocok, maka diloginkan
          if ($akuncocok === 1) {
            // anda sudah login
            // mendapatkan akun dalam bentuk array
            $akun = $ambil->fetch_assoc();
            if (password_verify($password, $akun["password_pelanggan"])) {
              // login di session pelanggan
              $_SESSION["pelanggan"] = $akun;
              echo "<script>alert('Anda berhasil login');</script>";
              echo "<script>location='produk.php'</script>";
            } else {
              // anda gagal login
              echo "<script>alert('Anda gagal login, periksa akun anda');</script>";
              echo "<script>location='login.php'</script>";
            }
          }
        }
        ?>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_jcikwtux.json" background="transparent" speed="1" style="width: 230px; height: 230px" loop autoplay></lottie-player>
            <p>Alreadry have account? just sign with button bellow</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_BhWJsn.json" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></lottie-player>
            <p>Enter your personal details please</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('template/footer.php') ?>
  <script src="js/login.js"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>
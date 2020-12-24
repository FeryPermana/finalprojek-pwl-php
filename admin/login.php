<?php
session_start();
include '../koneksi.php';
?>
<?php include('template/header.php') ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>

                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="user" placeholder="Masukan username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" placeholder="masukan password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button href="index.html" class="btn btn-primary btn-user btn-block" name="login">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <?php
                                    if (isset($_POST['login'])) {
                                        $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]'
                                        AND password = '$_POST[password]'");
                                        $yangsama = $ambil->num_rows;
                                        if ($yangsama == 1) {
                                            $_SESSION['admin'] = $ambil->fetch_assoc();
                                            echo '<div class="alert alert-info">Login Berhasil</div>';
                                            echo '<meta http-equiv="refresh" content="1;url=index.php">';
                                        } else {
                                            echo '<div class="alert alert-danger">Login Gagal</div>';
                                            echo '<meta http-equiv="refresh" content="4;url=login.php">';
                                        }
                                    }


                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php include('template/bottom.php') ?>

</body>

</html>
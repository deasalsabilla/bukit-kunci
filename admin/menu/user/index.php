<?php

require '../../assets/conn/koneksi.php';
require 'function.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_user");
$data = mysqli_fetch_array($sql);

?>
<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Wisata Desa Bangowan</title>
    <link rel="stylesheet" href="../../assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="shortcut icon" href="icon/logodesa.ico">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <!-- start navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Desa<span class="text-warning">Bangowan</span></a>
            </div>
        </nav>
        <!-- end navbar-->


        <!-- start side bar -->
        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="../../images/user/user.png" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white"><?php echo $_SESSION['username'] ?></p>
                    <small class="text-white text-uppercase"><?php echo $_SESSION['level'] ?></small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="../../index.php">
                        Home
                    </a>
                    <hr class="soft my-1 bg-dark">

                    <a class="nav-link px-3" href="../../menu/kelolawisata/index.php">
                        <i class="" aria-hidden="true"></i>Berita
                    </a>
                    <?php if ($_SESSION['level'] == "admin") : ?>
                        <a class="nav-link px-3" href="../../menu/kelolawisata/index.php">
                            <i class="" aria-hidden="true"></i>Kelola Wisata
                        </a>

                        <a class="nav-link px-3" href="../../menu/kelolafoto/index.php">
                            <i class="" aria-hidden="true"></i>Kelola Foto
                        </a>

                        <a class="nav-link px-3" href="../../menu/user/index.php">
                            <i class="" aria-hidden="true"></i>User
                        </a>
                    <?php endif; ?>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="../../logout.php">
                        <i class="" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const btnSlider = document.getElementById("btn-slider");
                const slider = document.getElementById("sliders");

                btnSlider.addEventListener("click", function(e) {
                    e.stopPropagation(); // Prevent click event from propagating to document
                    slider.classList.toggle("active");
                });

                document.addEventListener("click", function(e) {
                    const targetElement = e.target;
                    if (targetElement !== slider && !slider.contains(targetElement)) {
                        slider.classList.remove("active");
                    }
                });
            });
        </script>
        <!-- end side bar -->

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>User</h2>
                            <button type="button" class="btn btn-block btn-primary" onclick="hiden()"> Tambah User</button>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div id="tambahuser" style="display: none;">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah User</h3>
                            </div>
                            <!-- /.card-header -->

                            <?php

                            $username = $_POST['username'];
                            $nama = $_POST['nama'];
                            $level = $_POST['level'];

                            if (isset($_POST['simpan'])) {
                                if (tambahuser($_POST) > 0) {
                                    echo "<script>
                                            alert('User Baru Berhasil ditambahkan');
                                        </script>";
                                    header("Location: index.php");
                                } else {
                                    echo mysqli_error($koneksi);
                                }
                            }

                            ?>
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Status User</label>
                                        <select name="level" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="admin" <?php if ($level == "admin") echo "selected" ?>>Admin</option>
                                            <option value="adminberita" <?php if ($level == "adminberita") echo "selected" ?>>Admin Berita</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="simpan" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data?')">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <script>
                    function hiden() {
                        var x = document.getElementById("tambahuser");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar User</h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr align="center">

                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Status User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
                                        while ($row = mysqli_fetch_array($query)) {
                                            $status = $row['level'];
                                            $badge_class = '';
                                            $badge_text = '';
                                            if ($status == 'admin') {
                                                $badge_class = 'bg-primary';
                                                $badge_text = 'Admin';
                                            } elseif ($status == 'adminberita') {
                                                $badge_class = 'bg-danger';
                                                $badge_text = 'Admin Berita';
                                            }
                                        ?>
                                            <tr align="center">
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['password'] ?></td>
                                                <?php echo '<td><span class="badge ' . $badge_class . '">' . $badge_text . '</span></td>'; ?>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="/dist/js/jquery.js"></script>
    <script src="/assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="/dist/js/index.js"></script>

</body>

</html>
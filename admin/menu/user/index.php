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
                <!-- <ul class="nav ms-auto"> 
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-bell fa-lg py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-envelope fa-lg dropdown-icons bg-primary text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Safna Prasetiono</p>
                                        <span class="content-text">p.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-file fa-lg dropdown-icons bg-warning text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">file informations</p>
                                        <span class="content-text">your file has exceeded the limit.</span>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item py-2" href="#">
                                <div class="d-flex overflow-hidden">
                                    <i class="fa fa-hdd-o fa-lg dropdown-icons bg-danger text-white p-2 me-2" aria-hidden="true"></i>
                                    <div class="d-block content">
                                        <p class="lh-1 mb-0">Storage</p>
                                        <span class="content-text">Your storage is full, delete some files.</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="../../images/user/user.png" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom mb-2">
                                <img src="../../images/user/user.png" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1"></p>
                                    <small><</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="">
                                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                            </a>
                        </div>
                    </li>
                </ul> -->
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

                    <!-- <a class="nav-link px-3" href="../../menu/profile/index.php">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a> -->
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

                        <!-- <a class="nav-link px-3" href="../../menu/reservasi/index.php">
                            <i class="" aria-hidden="true"></i>Reservasi
                        </a> -->

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

        <!-- end side bar -->

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>User</h2>
                            <button type="button" class="btn btn-block btn-primary" onclick="hiden()"> Tambah User</button>
                            <!--<button type="button" class="btn btn-block btn-primary" onclick="edit()">Edit User</button>-->
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
                                            alert('User baru berhasil ditambahkan');
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
                                    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
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

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
                <!--
                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-plane float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Planning</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Planning</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-money fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">Rp.123</h5>
                                    <p class="card-text">anggaran</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Anggaran</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Planning</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Your Schedule</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">122</h5>
                                    <p class="card-text">Jumlah pengunjung</p>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <small class="text-start fw-bold">Pengunjung</small>
                            </div>
                        </div>
                    </div>
                </div>
            

                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartOne"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartTwo"></canvas>
                        </div>
                    </div>
                </div>
                -->

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
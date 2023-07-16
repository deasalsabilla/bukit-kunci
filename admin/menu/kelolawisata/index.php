<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Bukit kunci</title>
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
                                    <p class="fw-bold m-0 lh-1">YourName</p>
                                    <small>YourAccount@gmail.com</small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="#">
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
                    <p class="fw-bold mb-0 lh-1 text-white"><?php echo $_SESSION['username']; ?></p>
                    <small class="text-white text-uppercase"><?php echo $_SESSION['level']; ?></small>
                </div>
            </div>
            <div class="slider-body px-1">
                <nav class="nav flex-column">
                    <a class="nav-link px-3 active" href="../../index.php">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <hr class="soft my-1 bg-dark">

                    <!-- <a class="nav-link px-3" href="../../menu/profile/index.php">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a> -->
                    <a class="nav-link px-3" href="../../menu/berita/index.php">
                        <i class="" aria-hidden="true"></i>Berita
                    </a>
                    <?php if($_SESSION['level'] == "admin"): ?>
                    <a class="nav-link px-3" href="../../menu/kelolawisata/index.php">
                        <i class="" aria-hidden="true"></i>Kelola Wisata
                    </a>

                    <a class="nav-link px-3" href="../../menu/kelolafoto/index.php">
                        <i class="" aria-hidden="true"></i>Kelola Foto
                    </a>

                    <!-- <a class="nav-link px-3" href="../../menu/laporan/index.php">
                        <i class="" aria-hidden="true"></i>Laporan
                    </a> -->

                    <a class="nav-link px-3" href="../../menu/user/index.php">
                        <i class="" aria-hidden="true"></i>User
                    </a>
                    <?php endif;?>
                    <hr class="soft my-1 bg-white">
                    <a class="nav-link px-3" href="../../logout.php">
                        <i class="" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <!-- end side bar -->

        <?php
        include "../../assets/conn/koneksi.php";
        error_reporting(error_reporting() & ~E_NOTICE);

        if (isset($_POST['proses'])) {
            $nama = $_POST['nama'];
            $lokasi = $_POST['lokasi'];
            $deskripsi = $_POST['deskripsi'];
            $status = $_POST['status_wisata'];

            $sql1 = "INSERT INTO tb_wisata (nama, lokasi, deskripsi, status_wisata) VALUES ('$nama', '$lokasi', '$deskripsi', '$status')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                echo "<script> alert('Data Berhasil Di simpan')</script>";
            } else {
                echo "<script> alert('Data Tidak Berhasil Di simpan')</script>";
            }
        }
        ?>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Kelola Wisata</h2>
                            <button type="button" class="btn btn-block btn-primary" onclick="hiden()"> Tambah Wisata</button>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div id="tambahuser" style="display: none;">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Wisata</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lokasi</label>
                                        <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Lokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_wisata">Status</label>
                                        <select class="form-control" name="status_wisata">
                                            <option value="">--Pilih--</option>
                                            <option value="aktif" <?php if ($status == "aktif") echo "selected" ?>>aktif</option>
                                            <option value="nonaktif" <?php if ($status == "nonaktif") echo "selected" ?>>non-aktif</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="proses" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menambah data?')">Submit</button>
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
                                <h3 class="card-title">Daftar Wisata</h3>

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
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Wisata</th>
                                            <th>Lokasi Wisata</th>
                                            <th>Deskripsi</th>
                                            <th>Status Wisata</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_wisata");
                                        while ($hasil = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $hasil['nama'] ?></td>
                                                <td><?php echo $hasil['lokasi'] ?></td>
                                                <td><?php echo $hasil['deskripsi'] ?></td>
                                                <td><?php echo $hasil['status_wisata'] ?></td>
                                                <td>
                                                <button class="btn btn-warning"><a href="edit.php?id=<?php echo $hasil['id']; ?>" style="color: black; text-decoration:none;">Edit</a></button>

                                                    <button class="btn btn-danger"><a href="delete.php?id=<?php echo $hasil['id']; ?>" style="color: white; text-decoration:none;" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a></button>
                                                </td>
                                            </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Wisata Desa Bangowan</title>
    <link rel="stylesheet" href="../../assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="shortcut icon" href="logodesa.ico">
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
                        Home
                    </a>
                    <hr class="soft my-1 bg-dark">

                    <!-- <a class="nav-link px-3" href="../../menu/profile/index.php">
                        <i class="" aria-hidden="true"></i>Profile
                    </a> -->
                    <a class="nav-link px-3" href="../../menu/berita/index.php">
                        <i class="fa fa-" aria-hidden="true"></i>Berita
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

        <?php
        include "../../assets/conn/koneksi.php";

        if (isset($_POST['submit'])) {
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];
            $imgfile = $_FILES['postimage']['name'];
            $tmp_file = $_FILES['postimage']['tmp_name'];
            $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
            $active = 1;

            $dir = "img/";
            // allowed extensions
            $allowed_extensions = array(".jpg", ".jpeg", ".png", ".gif");

            // Validation for allowed extensions .in_array() function searches an array for a specific value.
            if (!in_array($extension, $allowed_extensions)) {
                echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
            } else {

                //rename the image file
                $imgnewfile = md5($imgfile) . $extension;
                // Code for move image into directory

                move_uploaded_file($tmp_file, $dir . $imgnewfile);

                $query = mysqli_query($koneksi, "insert into tb_berita(judul,deskripsi,gambar) values('$judul','$deskripsi','$imgnewfile')");
                if ($query) {
                    echo "<script>alert('Data Berhasil di tambahkan');</script>";
                } else {
                    echo "<script>alert('Data Tidak Berhasil di tambahkan');</script>";
                }
            }
        }
        ?>

        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Tambah Berita</h2>
                            <button type="button" class="btn btn-block btn-primary" onclick="hiden1()"> Tambah</button>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div id="tambahfoto2" style="display: none;">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Berita</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="nama">Judul berita</label>
                                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Nama Foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="caption">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi" rows="4"></textarea>
                                    </div>
                                    <div>
                                        <label for="postimage">Upload Gambar</label>
                                        <input type="file" class="form-control" name="postimage">
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <script>
                    function hiden1() {
                        var x = document.getElementById("tambahfoto2");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>

                <div class="card-header">
                    <h4 class="card-title">Berita</h4>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Tanggal Posting</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_berita");
                            while ($hasil = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $hasil['judul'] ?></td>
                                    <td><?php echo $hasil['deskripsi'] ?></td>
                                    <td><img src="img/<?php echo $hasil['gambar'] ?>" width="125px" height="125px"></td>
                                    <td><?php echo $hasil['date'] ?></td>
                                    <td>
                                        <button class="btn btn-warning"><a href="edit.php?id=<?php echo $hasil['id']; ?>" style="color: black; text-decoration:none;">Edit</a></button>
                                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><a href="delete.php?id=<?php echo $hasil['id']; ?>" style="color: white; text-decoration:none;">Hapus</a></button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Foto - Wisata Desa Bangowan</title>
    <link rel="stylesheet" href="../../assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
    <link rel="shortcut icon" href="icon/logodesa.ico">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .custom-desc {
            white-space: normal;
        }
    </style>
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

                    <a class="nav-link px-3" href="../../menu/berita/index.php">
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

        <!-- end side bar -->

        <?php
        include "../../assets/conn/koneksi.php";

        $sql = mysqli_query($koneksi, "select * from tb_img");
        $data = mysqli_fetch_array($sql);

        $auto = mysqli_query($koneksi, "select max(id) as max_code from tb_img");
        $hasil = mysqli_fetch_array($auto);
        $code = $hasil['max_code'];
        $urutan = (int)substr($code, 1, 3);
        $urutan++;
        $huruf = "G";
        $id = $huruf . sprintf("%03s", $urutan);

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $deskripsi = $_POST['caption'];
            $wisata = $_POST['wisata'];
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

                $query = mysqli_query($koneksi, "insert into tb_img(id,postimage,nama,caption,wisata,isActive) values('$id','$imgnewfile','$nama','$deskripsi','$wisata','$active')");
                if ($query) {
                    echo "<script>alert('Data Berhasil ditambahkan');</script>";
                } else {
                    echo "<script>alert('Data Gagal ditambahkan');</script>";
                }
            }
        }
        ?>
        <div class="main-pages">
            <div class="container-fluid">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>Tambah Foto</h2>
                            <button type="button" class="btn btn-block btn-primary" onclick="hiden1()"> Tambah
                                Foto</button>
                            <p></p>
                        </div>
                    </div>
                </div>


                <div class="row g-3 mb-3">
                    <div id="tambahfoto2" style="display: none;">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Foto</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="nama">Nama Foto</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="caption">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="caption" placeholder="Masukkan Deskripsi" rows="4"></textarea>
                                    </div>
                                    <div>
                                        <label for="postimage">Upload Gambar</label>
                                        <input type="file" class="form-control" name="postimage">
                                    </div>
                                    <?php

                                    $sql = "SELECT nama, nm_kecil FROM tb_wisata"; // Ganti 'nama_tabel' dengan nama tabel Anda
                                    $result = mysqli_query($koneksi, $sql);;

                                    // Langkah 3: Bangun elemen <select> dengan opsi yang diambil dari database
                                    echo '<div class="form-group">';
                                    echo '<label for="wisata">Wisata</label>';
                                    echo '<select class="form-control" name="wisata">';
                                    echo '<option value="">--Pilih--</option>';

                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $value = $row['nm_kecil'];
                                            $label = $row['nama'];

                                            // Periksa apakah opsi saat ini harus ditandai sebagai "selected"
                                            $selected = ($wisata == $value) ? "selected" : "";

                                            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                                        }
                                    }

                                    echo '</select>';
                                    echo '</div>';

                                    ?>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data?')">Submit</button>
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
                    <h4 class="card-title">Galeri Foto</h4>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Wisata</th>
                                <th>Tanggal Posting</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM tb_img");
                            while ($hasil = mysqli_fetch_array($data)) {
                                $wisata2 = $hasil['wisata'];
                                $badge_class = '';
                                $badge_text = '';
                                if ($wisata2 == 'kebunsawo') {
                                    $badge_class = 'bg-primary';
                                    $badge_text = 'Kebun Sawo';
                                } elseif ($wisata2 == 'wayangthengul') {
                                    $badge_class = 'bg-success';
                                    $badge_text = 'Wayang Thengul';
                                } elseif ($wisata2 == 'bukitkunci') {
                                    $badge_class = 'bg-warning';
                                    $badge_text = 'Bukit Kunci';
                                }
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><img src="img/<?php echo $hasil['postimage'] ?>" width="125px" height="125px"></td>
                                    <td class="custom-desc"><?php echo $hasil['nama'] ?></td>
                                    <td class="custom-desc"><?php echo $hasil['caption'] ?></td>
                                    <?php echo '<td><span class="badge ' . $badge_class . '">' . $badge_text . '</span></td>'; ?>
                                    <td><?php echo $hasil['postDate'] ?></td>
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
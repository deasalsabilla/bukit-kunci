<?php
include "../../assets/conn/koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_wisata WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../dist/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Edit</title>
</head>

<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Ubah Data Wisata
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="<?php echo $data['lokasi'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3"><?php echo $data['deskripsi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status_wisata">Status Wisata</label>
                        <select class="form-control" name="status_wisata" id="status_wisata" aria-label="Default select example">
                            <option value="">--Pilih--</option>
                            <option value="aktif" <?php if ($data['status_wisata'] == "aktif") echo "selected" ?>>Aktif</option>
                            <option value="nonaktif" <?php if ($data['status_wisata'] == "nonaktif") echo "selected" ?>>Non-aktif</option>
                        </select>
                    </div> <br>
                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan" onclick="return confirm('Apakah Anda yakin ingin mengubah data?')">Simpan</button>
                    <button type="reset" class="btn btn-danger"><a href=""></a> Batal</button>
                    <button class="btn btn-secondary"><a href="index.php" style="color:#ffff; text-decoration:none;">Kembali</a></button>
                </form>
            </div>

            <?php
            error_reporting(error_reporting() & ~E_NOTICE);
            include "../../assets/conn/koneksi.php";

            $nama       = $_POST['nama'];
            $lokasi     = $_POST['lokasi'];
            $deskripsi  = $_POST['deskripsi'];
            $status     = $_POST['status_wisata'];
            // Ubah input menjadi huruf kecil dan hapus spasi, lalu simpan ke dalam kolom "def"
            $nm_kecil = strtolower(str_replace(' ', '', $nama));

            if (isset($_POST['simpan'])) {
                $hasil = mysqli_query($koneksi, "UPDATE tb_wisata SET nama = '$nama', lokasi = '$lokasi' , deskripsi = '$deskripsi', status_wisata ='$status', nm_kecil = '$nm_kecil' WHERE id= '$id'") or die(mysqli_error(($koneksi)));

                if ($hasil) {
                    echo "<script> alert('Data Berhasil Di ubah')</script>";
                    header("refresh:0,index.php");
                } else {
                    echo "<script> alert('Data  tidak Berhasil Di ubah')</script>";
                    header("refresh:0,index.php");
                }
            }
            ?>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
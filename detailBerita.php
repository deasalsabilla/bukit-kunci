<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Berita - Desa Wisata Bangowan</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
  <link rel="shortcut icon" href="icon/icondesa.ico">
  <style>
    /* CSS */
    .featured-image {
      width: 100%;
      height: 500px;
      /* Sesuaikan tinggi gambar sesuai kebutuhan */
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Page Loader -->

  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="img/logodesa.jpg" alt="Image" class="fas img-fluid" style="width: 75px;">
        Desa Wisata Bangowan
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-link-1 active" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-2 " aria-current="page" href="profil.html">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-3" href="fasilitas.html">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-4" href="reservasi.html">Reservasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php
  include "admin/assets/conn/koneksi.php";

  // Periksa apakah parameter 'id' tersedia di URL
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Escape string untuk mencegah SQL injection
    $beritaId = mysqli_real_escape_string($koneksi, $_GET['id']);

    // Query untuk mendapatkan detail berita berdasarkan ID
    $query = "SELECT * FROM tb_berita WHERE id = '$beritaId'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah data berita ditemukan
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $tanggal_posting = date("d-m-Y", strtotime($row['date']));
    } else {
      // Tampilkan pesan jika data berita tidak ditemukan
      echo "Berita tidak ditemukan.";
      exit;
    }
  } else {
    // Tampilkan pesan jika parameter 'id' tidak tersedia di URL
    echo "ID berita tidak valid.";
    exit;
  }
  ?>

  <div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
      <h2 class="col-12 tm-text-primary text-uppercase"><?php echo $row['judul']; ?></h2>
    </div>

    <div class="row tm-mb-90">
      <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
        <img src="admin/menu/berita/img/<?php echo $row['gambar']; ?>" alt="Image" class="img-fluid featured-image">
      </div>
      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
        <div class="tm-bg-gray tm-video-details">
          <div class="mb-4">
            <h3 class="tm-text-gray-dark mb-3"><?php echo $tanggal_posting; ?></h3>
            <p><?php echo $row['deskripsi']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <h2 class="col-12 tm-text-primary">
      Berita Lainnya
    </h2>
  </div>
  <div class="row mb-3 tm-gallery">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
      <figure class="effect-ming tm-video-item">
        <img src="img/img-01.jpg" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
          <h2>Hangers</h2>
          <a href="#">View more</a>
        </figcaption>
      </figure>
      <div class="d-flex justify-content-between tm-text-gray">
        <span class="tm-text-gray-light">16 Oct 2020</span>
        <span>12,460 views</span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
      <figure class="effect-ming tm-video-item">
        <img src="img/img-02.jpg" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
          <h2>Perfumes</h2>
          <a href="#">View more</a>
        </figcaption>
      </figure>
      <div class="d-flex justify-content-between tm-text-gray">
        <span class="tm-text-gray-light">12 Oct 2020</span>
        <span>11,402 views</span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
      <figure class="effect-ming tm-video-item">
        <img src="img/img-03.jpg" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
          <h2>Clocks</h2>
          <a href="#">View more</a>
        </figcaption>
      </figure>
      <div class="d-flex justify-content-between tm-text-gray">
        <span class="tm-text-gray-light">8 Oct 2020</span>
        <span>9,906 views</span>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
      <figure class="effect-ming tm-video-item">
        <img src="img/img-04.jpg" alt="Image" class="img-fluid">
        <figcaption class="d-flex align-items-center justify-content-center">
          <h2>Plants</h2>
          <a href="#">View more</a>
        </figcaption>
      </figure>
      <div class="d-flex justify-content-between tm-text-gray">
        <span class="tm-text-gray-light">6 Oct 2020</span>
        <span>16,100 views</span>
      </div>
    </div>
  </div> <!-- row -->
  </div> <!-- container-fluid, tm-container-content -->


  <footer class="tm-bg-gray pb-3 tm-text-gray tm-footer" id="footer" style="padding-top: 5px;">
      <div class="container-fluid tm-container-small">
        <div class="row mt-5">
          <div class="col-lg-12 text-center">
            <h3 class="tm-text-primary tm-footer-title">Hubungi Kami</h3>
            <p>Silahkan Hubungi kami jika ada pertanyaan</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
            <ul class="tm-social-links d-flex justify-content-center pl-0 pt-3 mb-5">
              <!-- Social links here -->
              <li class="mb-2">
                <a href="https://www.facebook.com/profile.html?id=100063555219756" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Facebook"><i class="fab fa-facebook"></i></a>
              </li>
              <li class="mb-2">
                <a href="https://twitter.com/bangowanbumdesa" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="mb-2">
                <a href="https://www.instagram.com/desawisatabangowan/" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Instagram"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="mb-2">
                <a href="https://wa.me/6285641200447" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
              </li>
              <li class="mb-2">
                <a href="https://goo.gl/maps/62jLjwSRgj9dhmqV9" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Lokasi"><i class="fa fa-map-marker"></i></a>
              </li>
              <li class="mb-2">
                <a href="https://www.youtube.com/channel/UC_KUb-cSOummG-rBOy-2Xbg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="youtube"><i class="fa fa-play"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-7 col-12 px-5 mb-3 custom-align">Copyright 2022 - STT Ronggolawe - PEM Akamigas Cepu.</div>
          <div class="col-lg-4 col-md-5 col-12 px-5 mb-3 custom-align">Designed by <a href="https://www.sttrcepu.ac.id/informatikas1/home" class="tm-text-gray" rel="sponsored" target="_parent">Informatika - 2021</a></div>
        </div>
      </div>
    </footer>



  <script src="js/plugins.js"></script>

  <script>
    $(window).on("load", function() {

      $('body').addClass('loaded');

    });
  </script>

</body>

</html>
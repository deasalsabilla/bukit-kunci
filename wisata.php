<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desa Wisata Bangowan - Wisata</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <link rel="stylesheet" href="css/styleku.css">
  <link rel="shortcut icon" href="icon/icondesa.ico">

  <style>
    .tm-hero {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    #tm-video-container {
      width: 100%;
      max-height: 500px;
    }

    #tm-video {
      width: 45%;
      height: 100%;
      object-fit: cover;
    }

    .tm-gallery img {
      width: 100%;
      height: 200px;
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
            <a class="nav-link nav-link-1 " aria-current="page" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-2 " href="profil.html">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-3 active" href="wisata.php">Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-4" href="reservasi.html">Reservasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="tm-hero d-flex justify-content-center align-items-center" id="tm-video-container">
    <div class="hero-text">
      <img src="img/logo sttr.png" style="width: 100px;">
      <img src="img/logo pem nobg.png" style="width: 100px;">
    </div>
    <video autoplay muted loop id="tm-video">
      <source src="video/kunci.mp4" type="video/mp4" />
    </video>
    <i id="tm-video-control-button" class="fas fa-pause"></i>
  </div>

  <div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
      <h2 class="col-6 tm-text-primary">Kunjungan Desa Bangowan</h2>
    </div>
    <div>
      <h4>
        <ul>
          <li>Kebun Sawo Organik</li>
          <div class="row mb-3 tm-gallery">
            <?php
            include "admin/assets/conn/koneksi.php";
            $query = "SELECT postimage, nama, postDate FROM tb_img WHERE isActive = 1 && wisata = 'kebunsawo' ";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                  <img src="admin/menu/kelolafoto/img/<?php echo $row['postimage']; ?>" alt="Image" class="img-fluid">
                  <figcaption class="d-flex align-items-center justify-content-center">
                    <h2><?php echo $row['nama']; ?></h2>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                  <span class="tm-text-gray-light"><?php echo $row['postDate']; ?></span>
                  <span>11,402 views</span>
                </div>
              </div>
            <?php
            } ?>
          </div>


          <li>Wayang Thengul</li>
          <div class="row mb-3 tm-gallery">
            <?php
            include "./assets/conn/koneksi.php";
            $query = "SELECT postimage, nama, postDate FROM tb_img WHERE wisata = 'wayangthengul' ";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                  <img src="admin/menu/kelolafoto/img/<?php echo $row['postimage']; ?>" alt="Image" class="img-fluid">
                  <figcaption class="d-flex align-items-center justify-content-center">
                    <h2><?php echo $row['nama'] ?></h2>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                  <span class="tm-text-gray-light"><?php echo $row['postDate'] ?></span>
                  <span>11,402 views</span>
                </div>
              </div>
            <?php
            } ?>
          </div>

          <li>Bukit Kunci</li>
          <div class="row mb-3 tm-gallery">
            <?php
            include "./assets/conn/koneksi.php";
            $query = "SELECT postimage, nama, postDate FROM tb_img WHERE wisata = 'bukitkunci' ";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($result)) {
            ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                  <img src="admin/menu/kelolafoto/img/<?php echo $row['postimage']; ?>" alt="Image" class="img-fluid">
                  <figcaption class="d-flex align-items-center justify-content-center">
                    <h2><?php echo $row['nama'] ?></h2>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                  <span class="tm-text-gray-light"><?php echo $row['postDate'] ?></span>
                  <span>11,402 views</span>
                </div>
              </div>
            <?php
            } ?>
          </div>

        </ul>
      </h4>
    </div>
    <!-- row -->
    <br>
    <br>
    <br>
  </div>
  <!-- container-fluid, tm-container-content -->
  <!-- footer start-->
  <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer" id="footer">
    <div class="container-fluid tm-container-small">
      <div class="row">
        <div style="text-align: center">
          <h3 class="tm-text-primary mb-4 tm-footer-title">Hubungi Kami</h3>
          <p>Silahkan Hubungi kami jika ada pertanyaan</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5" style="margin-left: 450px">
          <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
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
        <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">Copyright 2022 - STT Ronggolawe - PEM Akamigas Cepu.</div>
        <div class="col-lg-4 col-md-5 col-12 px-5 text-right">Designed by <a href="https://www.sttrcepu.ac.id/informatikas1/home" class="tm-text-gray" rel="sponsored" target="_parent">Informatika - 2021</a></div>
      </div>
    </div>
  </footer>

  <!-- footer End-->

  <script src="js/plugins.js"></script>
  <script>
    $(window).on("load", function() {
      $("body").addClass("loaded");
    });

    $(function() {
      /************** Video background *********/

      function setVideoSize() {
        const vidWidth = 1280;
        const vidHeight = 720;
        const maxVidHeight = 400;
        let windowWidth = window.innerWidth;
        let newVidWidth = windowWidth;
        let newVidHeight = (windowWidth * vidHeight) / vidWidth;
        let marginLeft = 0;
        let marginTop = 0;

        if (newVidHeight < maxVidHeight) {
          newVidHeight = maxVidHeight;
          newVidWidth = (newVidHeight * vidWidth) / vidHeight;
        }

        if (newVidWidth > windowWidth) {
          marginLeft = -((newVidWidth - windowWidth) / 2);
        }

        if (newVidHeight > maxVidHeight) {
          marginTop = -((newVidHeight - $("#tm-video-container").height()) / 2);
        }

        const tmVideo = $("#tm-video");

        tmVideo.css("width", newVidWidth);
        tmVideo.css("height", newVidHeight);
        tmVideo.css("margin-left", marginLeft);
        tmVideo.css("margin-top", marginTop);
      }

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function() {
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
  </script>
</body>

</html>
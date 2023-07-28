<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desa Wisata Bangowan - Welcome</title>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <link rel="stylesheet" href="css/styleku.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="icon/icondesa.ico">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <style>
    /* CSS */
    .news-item {
      width: 100%;
      height: 400px;
      /* Sesuaikan tinggi container berita sesuai kebutuhan */
      overflow: hidden;
      margin-bottom: 20px;
    }

    .news-item .img-container {
      height: 60%;
      /* Tinggi relatif dari gambar di dalam container berita */
      overflow: hidden;
    }

    .news-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .news-item .content-container {
      padding: 10px;
      background-color: #f7f7f7;
      height: 40%;
      /* Tinggi relatif dari konten di dalam container berita */
    }

    .custom-desc {
      -webkit-line-clamp: 2;
      overflow: hidden;
      display: -webkit-box;
      -webkit-box-orient: vertical;
    }

    /* Custom CSS for mobile (up to 767px) */
    @media (max-width: 767px) {
      .custom-align {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  </head>

  <body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <!-- start nav -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/logodesa.jpg" alt="Image" class="fas img-fluid" style="width: 75px;">

          Desa Wisata Bangowan
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-link-1 active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-2" href="profil.html">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-3" href="wisata.php">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-4" href="reservasi.html">Reservasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- jumbotron start -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 100%; overflow: hidden; position: relative;">
      <div class="carousel-inner" style="width: 100%; max-height: 500px; margin-left: auto; margin-right: auto;">
        <div class="carousel-item active">
          <img src="./img/poto carosel 00.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="./img/poto carosel 4.jpg" class="d-block w-100" alt="..." style="object-fit: cover; height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="./img/poto carosel 3.jpg"" class=" d-block w-100" alt="..." style="object-fit: cover; height: 500px;">
        </div>
        <div class="hero-text" style="position: absolute; top: 50px; left: 120px;">
          <img src="img/logo sttr.png" style="width: 100px; display: inline-block; margin-right: 10px;">
          <img src="img/logo pem nobg.png" style="width: 100px; display: inline-block;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




    <!-- jumbotron end -->
    <div class="col-12" style="margin-top: 20px;">
      <div class="section-title">
        <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
      </div>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
      <div class="row">
        <?php
        include "admin/assets/conn/koneksi.php";

        $query = "SELECT * FROM tb_berita";
        $sql = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($sql)) {
          $tanggal_posting = date("d-m-Y", strtotime($row['date']));
        ?>

          <div class="col-lg-6">
            <div class="news-item">
              <div class="img-container">
                <img class="img-fluid" src="admin/menu/berita//img/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>">
              </div>
              <div class="content-container">
                <div class="mb-2">
                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                  <a class="text-body" href=""><small><?php echo $tanggal_posting; ?></small></a>
                </div>
                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="detailBerita.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a>
                <p class="m-0 custom-desc"><?php echo $row['deskripsi']; ?></p>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>
    </div>
    <!-- row -->
    <div class="row tm-mb-90">
      <!--<div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
            <div class="tm-paging d-flex">
              <a href="javascript:void(0);" class="active tm-paging-link">1</a>
              <a href="javascript:void(0);" class="tm-paging-link">2</a>
              <a href="javascript:void(0);" class="tm-paging-link">3</a>
              <a href="javascript:void(0);" class="tm-paging-link">4</a>
            </div>
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
          </div>-->
    </div>
    </div>
    <!-- container-fluid, tm-container-content -->

    <!-- footer start-->
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

    <!-- footer End-->

    <script src="js/plugins.js"></script>
    <script>
      $(window).on("load", function() {
        $("body").addClass("loaded");
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>

</html>
<?php
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .bg-custom {
      background-image: url('./images/bg2.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
      height: 100vh;
      /* width: 100vw; */
    }

    .bg-custom2 {
      background-image: url('./images/bg1.jpeg');
      background-size: cover;
      /* atau contain, sesuai kebutuhan Anda */
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
      height: 100vh;
      /* width: 100vw; */
    }

    .bg-custom3 {
      background-image: url('./bg3.jpg');
      background-size: cover;
      /* Untuk mengisi seluruh area background */
      background-repeat: no-repeat;
      background-attachment: fixed;
      /* Untuk membuat background tetap saat menggulir */
    }

    section {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .navbar-nav .nav-link {
      color: white !important;
      /* Menetapkan warna teks menjadi putih */
    }

    .logo {
      width: 40px;
    }
    .carouselimg {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      background-color: grey;
      /* padding: 5rem; */
    }
    .carousel-item img {
    width: 100%;
    height: 400px;
  }
  nav {
  position: sticky;
  top: 0;
  z-index: 1000; /* Atur nilai z-index sesuai kebutuhan */
}

#carouselExampleIndicators {
  z-index: 0; /* Atur nilai z-index sesuai kebutuhan */
}
.info1 {
  color: white;
  font-size: 40px;
  font-weight: 600;
  text-shadow: 2px 2px #000;
}
.info2 {
  color: white;
  font-size: 60px;
  font-weight: 600;
  text-shadow: 5px 5px #000;
}
#pmb p:nth-of-type(1),
#pmb p:nth-of-type(2) {
  display: unset;
    margin-block-start: unset;
    margin-block-end: unset;
    margin-inline-start: unset;
    margin-inline-end: unset;
  font-size: 40px;
  font-weight: 600;
}
#pmb p:nth-of-type(3),
#pmb p:nth-of-type(4) {
  display: unset;
    margin-block-start: unset;
    margin-block-end: unset;
    margin-inline-start: unset;
    margin-inline-end: unset;
  font-size: 55px;
  font-weight: 600;
  text-shadow: 3px 2px #000;
}
#pmb div span {
  background-color: red;
  border-radius: 8px;
  width: 400px;
  text-align: center;
  font-size: 25px;
  font-weight: 600;
}
.pmb {
  top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-bottom: 140px;
}
  </style>
  <nav class="navbar navbar-expand-lg top-0 position-sticky border-bottom border-dark shadow-lg bg-primary  ">
    <div class="container-fluid justify-content-between px-4 ">
      <a class="text-white " aria-current="page" href="#"><img class="logo rounded-2" src="./images/logo.jpeg
      " alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-evenly " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#pmb">PPDB</a>
          <a class="nav-link" href="#paud">PAUD</a>
          <a class="nav-link" href="#tk">TK</a>
          <a class="nav-link" href="#carouselimg">Galeri</a>
          <a class="nav-link" href="#about">About</a>
        </div>
      </div>
      <a class="btn btn-light" href="daftar.php" role="button">Daftar</a>
      <a class="btn btn-light mx-2 " href="page_crud.php" role="button">Admin</a>
    </div>
  </nav>
</head>

<body>
  <section id="home" class="bg-custom">
    <p class="info1">SISTEM INFORMASI</p>
    <p class="info2">SEKOLAH KOBER DAN TK </p>
      <p class="info2">HARAPAN IBU</p>
  </section>
  <section id="pmb" class="bg-custom2">
    <div class="pmb">
  <p>Penerimaan</p>
  <p>Peserta Didik Baru</p>
  <p> KOBER PAUD & TK</p> 
  <p> HARAPAN IBU</p>
  <span>TAHUN PELAJARAN 2023/2024</span>
  </div>
</section>

  <section id="paud" class=" bg-custom3  ">
    <!-- untuk mengeluarkan data -->
    <div class="container ">
      <div class="card-header text-white text-center fw-bold  bg-gradient bg-primary">
        Struktur Kepengurusan PAUD
      </div>
      <div class=" bg-white">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">jabatan</th>
              <th scope="col">Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql2   = "select * from paud order by id desc";
            $q2     = mysqli_query($koneksi, $sql2);
            $urut   = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id         = $r2['id'];
              $nip        = $r2['nip'];
              $nama       = $r2['nama'];
              $alamat     = $r2['alamat'];
              $jabatan     = $r2['jabatan'];
              $jenis_kelamin  = $r2['jenis_kelamin'];

            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <td scope="row"><?php echo $nip ?></td>
                <td scope="row"><?php echo $nama ?></td>
                <td scope="row"><?php echo $alamat ?></td>
                <td scope="row"><?php echo $jabatan ?></td>
                <td scope="row"><?php echo $jenis_kelamin ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </section>


  <section id="tk" class="bg-custom3 ">
    <!-- untuk mengeluarkan data -->
    <div class="container ">
      <div class="card-header text-white text-center fw-bold bg-gradient bg-primary">
        Struktur Kepengurusan TK
      </div>
      <div class="bg-white">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">jabatan</th>
              <th scope="col">Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql2   = "select * from paud order by id desc";
            $q2     = mysqli_query($koneksi, $sql2);
            $urut   = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id         = $r2['id'];
              $nip        = $r2['nip'];
              $nama       = $r2['nama'];
              $alamat     = $r2['alamat'];
              $jabatan     = $r2['jabatan'];
              $jenis_kelamin  = $r2['jenis_kelamin'];

            ?>
              <tr>
                <th scope="row"><?php echo $urut++ ?></th>
                <td scope="row"><?php echo $nip ?></td>
                <td scope="row"><?php echo $nama ?></td>
                <td scope="row"><?php echo $alamat ?></td>
                <td scope="row"><?php echo $jabatan ?></td>
                <td scope="row"><?php echo $jenis_kelamin ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </section>

  <section class="carouselimg bg-custom3" id="carouselimg">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/img1.jpeg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="./images/img2.jpeg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="./images/img3.jpeg" class="d-block w-100" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="./images/img4.jpeg" class="d-block w-100" alt="Slide 4">
    </div>
    <div class="carousel-item">
      <img src="./images/img5.jpeg" class="d-block w-100" alt="Slide 5">
    </div>
    <div class="carousel-item">
      <img src="./images/img6.jpeg" class="d-block w-100" alt="Slide 6">
    </div>
    <div class="carousel-item">
      <img src="./images/img7.jpeg" class="d-block w-100" alt="Slide 7">
    </div>
    <div class="carousel-item">
      <img src="./images/img8.jpeg" class="d-block w-100" alt="Slide 8">
    </div>
    <div class="carousel-item">
      <img src="./images/img9.jpeg" class="d-block w-100" alt="Slide 9">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  </section>

  <footer id="about" class="footer bg-secondary ">
    <div class="container py-3 ">
      <div class="row text-white">
        <div class="col-md-6  ">
          <h4>Alamat Sekolah PAUD dan TK</h4>
          <p>Kp. Cicango Rt 01/18 Desa Pangguh Kec. Ibun</p>
        </div>
        <div class="col-md-6">
          <h4>Kontak</h4>
          <p>Email PAUD: <a href="" class="link-info ">kbharapanibu.ccg@gmail.com</p></a>
          <p>Email TK: <a href="" class="link-info ">tkasysyifa2006ibun@gmail.com</p></a>
          <p>Contact Person PAUD: 0821-1873-5450</p>
          <p>Contact Person TK: 087791025189</p>
        </div>
      </div>
    </div>
    <div class="bg- style="width: 200px; height: 400px;"dark text-whit w-auto text-center ">copyright @2023</div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
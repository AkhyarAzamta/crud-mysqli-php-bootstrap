<?php
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informasi Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    .bg-custom {
      background-image: url('./bg2.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
      height: 100vh;
      /* width: 100vw; */
    }

    .bg-custom2 {
      background-image: url('./bg1.jpeg');
      background-size: cover;
      /* atau contain, sesuai kebutuhan Anda */
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
      height: 100vh;
      /* width: 100vw; */
    }

    .bg-custom3 {
    background-image: url('./bg3.jpg');
    background-size: cover; /* Untuk mengisi seluruh area background */
    background-repeat: no-repeat;
    background-attachment: fixed; /* Untuk membuat background tetap saat menggulir */
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
    img {
      width: 40px;
    }
  </style>
  <nav class="navbar navbar-expand-lg top-0 position-sticky border-bottom border-dark shadow-lg bg-primary  ">
    <div class="container-fluid justify-content-between px-4 ">
      <a class="text-white " aria-current="page" href="#"><img src="./logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-evenly " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#pmb">PPDB</a>
          <a class="nav-link" href="#paud">PAUD</a>
          <a class="nav-link" href="#tk">TK</a>
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

  </section>
  <section id="pmb" class="bg-custom2">

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
      <div class="card-header text-white text-center   fw-bold bg-gradient bg-primary">
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
    <div class="bg-dark text-white w-auto text-center ">copyright @2023</div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
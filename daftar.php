<?php
include 'koneksi.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM siswa WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM siswa WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $nik = $r1['nik'];
    $nama = $r1['nama'];
    $tempat_tanggal_lahir = $r1['tempat_tanggal_lahir'];
    $jenis_kelamin = $r1['jenis_kelamin'];
    $agama = $r1['agama'];
    $alamat = $r1['alamat'];
    $usia = $r1['usia'];
    $orang_tua = $r1['orang_tua'];
    $nomor_telepon = $r1['nomor_telepon'];

    if ($nik == '') {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $orang_tua = $_POST['orang_tua'];
    $nomor_telepon = $_POST['nomor_telepon'];

    if ($nik && $nama && $tempat_tanggal_lahir && $jenis_kelamin && $agama && $alamat && $usia && $orang_tua && $nomor_telepon) {
        if ($op == 'edit') {
            $sql1 = "UPDATE siswa SET nik = '$nik', nama='$nama', tempat_tanggal_lahir = '$tempat_tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama='$agama', alamat='$alamat', usia='$usia', orang_tua='$orang_tua', nomor_telepon='$nomor_telepon' WHERE id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else {
            $sql1 = "INSERT INTO siswa(nik, nama, tempat_tanggal_lahir, jenis_kelamin, agama, alamat, usia, orang_tua, nomor_telepon) VALUES ('$nik', '$nama', '$tempat_tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$usia', '$orang_tua', '$nomor_telepon')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Berhasil memasukkan data baru";
            } else {
                $error = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua datanya";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data jabatan Mahasiswa Karyawan Teknik Uninus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 95vw;
    }

    .card {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <section class="mx-auto m-5 ">
    <!-- untuk memasukkan data -->
    <div class="card">
      <div class="card-header bg-info bg-gradient ">
        Create / Edit Data
      </div>
      <div class="card-body">
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
          header("refresh:5;url=daftar.php"); //5 : detik
        }
        ?>
        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php
          header("refresh:5;url=daftar.php");
        }
        ?>

        <form action="" method="POST">
          <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tempat_tanggal_lahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" pattern="\d{4}-\d{2}-\d{2}" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="<?php echo $tempat_tanggal_lahir ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="Laki-Laki" <?php if ($jenis_kelamin == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") echo "selected" ?>>Perempuan</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="usia" name="usia" value="<?php echo $usia ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="orang_tua" class="col-sm-2 col-form-label">Orang Tua/Wali</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="orang_tua" name="orang_tua" value="<?php echo $orang_tua ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $nomor_telepon ?>">
            </div>
          </div>
          <div class="col-12">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-success" />
            <a class="btn btn-info" href="index.php" role="button">Home</a>
          </div>
        </form>

      </div>
    </div>

    <?php
include 'siswa.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
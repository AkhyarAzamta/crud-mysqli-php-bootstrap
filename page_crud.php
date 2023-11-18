<?php
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kepengurusan TK & PAUD</title>
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
                    header("refresh:5;url=page_crud.php"); //5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=page_crud.php");
                }
                ?>
                <form action="" method="POST">
                <div class="mb-3 ">
                    <span>Please select :</span>
                    <div class="col-sm-10">
                    <input type="radio" id="paud" name="table" value="paud" <?php if ($table == 'paud') echo 'checked' ?> required>
                    <label for="paud">PAUD</label><br>
                    <input type="radio" id="tk" name="table" value="tk" <?php if ($table == 'tk') echo 'checked' ?> required>
                    <label for="tk">TK</label><br>
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nip ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-2 col-form-label">jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $jabatan ?>">
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
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-success" />
                        <a class="btn btn-info " href="index.php" role="button">Home</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-gradient bg-primary">
                Data Kepengurusan PAUD
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">jabatan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $table1 = 'paud';
                        $sql2 = "SELECT * FROM $table1 ORDER BY jabatan = 'Kepala Sekolah' DESC, id DESC";
                        $q2 = mysqli_query($koneksi, $sql2);
                        
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
                                <td scope="row"><?php echo $jabatan ?></td>
                                <td scope="row"><?php echo $jenis_kelamin ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row">
                                    <a href="page_crud.php?op=edit&id=<?php echo $id ?>&table=<?php echo $table1 ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="page_crud.php?op=delete&id=<?php echo $id ?>&table=<?php echo $table1 ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>

                <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-gradient bg-primary">
                Data Kepengurusan TK
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">jabatan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $table2 = 'tk';
                        $sql2 = "SELECT * FROM $table2 ORDER BY jabatan = 'Kepala Sekolah' DESC, id DESC";
                        $q2 = mysqli_query($koneksi, $sql2);
                        
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
                                <td scope="row"><?php echo $jabatan ?></td>
                                <td scope="row"><?php echo $jenis_kelamin ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row">
                                    <a href="page_crud.php?op=edit&id=<?php echo $id ?>&table=<?php echo $table2 ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="page_crud.php?op=delete&id=<?php echo $id ?>&table=<?php echo $table2 ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
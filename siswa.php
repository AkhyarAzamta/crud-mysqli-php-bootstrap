<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>


  <!-- Display the data table -->
  <div class="card">
    <div class="card-header text-white bg-gradient bg-primary">
      Data Murid TK dan PAUD
    </div>
    <div class="card-body">
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">NIK</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Tempat Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Usia</th>
            <th scope="col">Orang Tua/Wali</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Fetch and display data from the database
          $sql = "SELECT * FROM siswa";
          $result = mysqli_query($koneksi, $sql);

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td scope='row'>" . $row['nik'] . "</td>";
            echo "<td scope='row'>" . $row['nama'] . "</td>";
            echo "<td scope='row'>" . $row['tempat_tanggal_lahir'] . "</td>";
            echo "<td scope='row'>" . $row['jenis_kelamin'] . "</td>";
            echo "<td scope='row'>" . $row['agama'] . "</td>";
            echo "<td scope='row'>" . $row['alamat'] . "</td>";
            echo "<td scope='row'>" . $row['usia'] . "</td>";
            echo "<td scope='row'>" . $row['orang_tua'] . "</td>";
            echo "<td scope='row'>" . $row['nomor_telepon'] . "</td>";
            echo "<td>
        <a href='?op=edit&id=" . $row['id'] . "'><button type='button' class='btn btn-warning'>Edit</button></a>
        <a href='?op=delete&id=" . $row['id'] . "' onclick=\"return confirm('Yakin mau delete data?')\"><button type='button' class='btn btn-danger'>Delete</button></a>
      </td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'koneksi.php';
include 'functions.php';

$nip        = "";
$nama       = "";
$alamat     = "";
$jabatan     = "";
$jenis_kelamin  = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $table = $_GET['table'];
    $sql1       = "delete from $table where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $table = $_GET['table'];
    $sql1       = "select * from $table where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nip        = $r1['nip'];
    $nama       = $r1['nama'];
    $alamat     = $r1['alamat'];
    $jabatan     = $r1['jabatan'];
    $jenis_kelamin  = $r1['jenis_kelamin'];

    if ($nip == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
  $table = isset($_POST['table']) ? $_POST['table'] : '';
    $nip        = $_POST['nip'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jabatan     = $_POST['jabatan'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];

    if ($nip && $nama && $alamat && $jabatan && $jenis_kelamin) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update $table set nip = '$nip',nama='$nama',alamat = '$alamat',jabatan = '$jabatan',jenis_kelamin='$jenis_kelamin' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into $table(nip,nama,alamat,jabatan,jenis_kelamin) values ('$nip','$nama','$alamat','$jabatan','$jenis_kelamin')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
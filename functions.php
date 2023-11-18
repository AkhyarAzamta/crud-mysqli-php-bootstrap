<?php
function getDataForEdit($id, $table) {
    global $koneksi;
    $sql = "select * from $table where id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    return mysqli_fetch_array($query);
}

function getAllData($table) {
    global $koneksi;
    $sql = "select * from $table order by id desc";
    $query = mysqli_query($koneksi, $sql);
    return $query;
}
?>

<?php
include "koneksi.php";

// Ambil data dari form
$user = $_POST['username'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];
$orang = $_POST['orang'];

// Validasi input
if (empty($user) || empty($cekin) || empty($cekout) || empty($orang)) {
    echo "<div style='color: red; font-family: Arial, sans-serif; font-size: 14px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px;'>
                Semua Harus diisi <a href=\"javascript:history.back()\" style='color: #721c24;'>kembali</a>
                </div>";
    exit();
}

// Pastikan id_user valid
$sql_user = "SELECT id_user FROM user WHERE username = '$user'";
$query_user = $koneksi->query($sql_user);
if ($query_user->num_rows == 1) {
    $data_user = $query_user->fetch_assoc();
    $id_user = $data_user['id_user'];
} else {
    die("User tidak ditemukan. <a href=\"javascript:history.back()\">kembali</a>");
}

// Insert ke tabel reservasi
$sql = "INSERT INTO reservasi (jml_org, id_user, check_in, check_out) VALUES ('$orang', '$id_user', '$cekin', '$cekout')";
$query = $koneksi->query($sql);
if ($query === true) {
    echo "Reservasi Berhasil";
    header('Location: bayar.php');
} else {
    echo "Reservasi Gagal: " . $koneksi->error;
}
?>
<?php
include "koneksi.php";

// Ambil data dari form
$user = $_POST['username'];
$nama_file = $_FILES['transfer']['name'];
$tmp_file = $_FILES['transfer']['tmp_name'];
$tipe_file = $_FILES['transfer']['type'];
$ukuran_file = $_FILES['transfer']['size'];

// Validasi input
if (empty($user) || empty($nama_file) || empty($tmp_file)) {
    die("Semua field harus diisi. <a href=\"javascript:history.back()\">kembali</a>");
}

// Pastikan id_user valid
$sql_reservasi = "SELECT id_reservasi FROM user, reservasi WHERE user.username = '$user' AND reservasi.id_user = user.id_user";
$query_reservasi = $koneksi->query($sql_reservasi);
if ($query_reservasi->num_rows == 1) {
    $data_reservasi = $query_reservasi->fetch_assoc();
    $id_reservasi = $data_reservasi['id_reservasi'];
} else {
    die("User atau reservasi tidak ditemukan. <a href=\"javascript:history.back()\">kembali</a>");
}

// Tentukan path untuk menyimpan file
$target_file = "uploads/" . basename($nama_file);

// Validasi tipe file dan ukuran file
if ($tipe_file == "image/png" || $tipe_file == "image/jpg" || $tipe_file == "image/jpeg") {
    if ($ukuran_file <= 5000000) {
        if (move_uploaded_file($tmp_file, $target_file)) {
            // Insert ke tabel pembayaran
            $tanggal = date('Y-m-d'); // Menentukan tanggal saat ini
            $sql = "INSERT INTO pembayaran (id_reservasi, metode_byr, total, tanggal, bukti_transfer) VALUES ('$id_reservasi', 'Transfer', '100.000', '$tanggal', '$nama_file')";
            $query = $koneksi->query($sql);
            if ($query === true) {
                echo "Reservasi Berhasil";
                echo "<script language='javascript'>
                        alert('Anda Berhasil Reservasi');
                        document.location = 'hasil_reservasi.php';
                      </script>";
            } else {
                echo "Reservasi Gagal: " . $koneksi->error;
            }
        } else {
            die("Upload file gagal. <a href=\"javascript:history.back()\">kembali</a>");
        }
    } else {
        echo "<script>alert('Ukuran File lebih dari 5 MB');history.go(-1);</script>";
    }
} else {
    echo "<script>alert('File Bukan Berekstensi PNG/JPG/JPEG');history.go(-1);</script>";
}
?>
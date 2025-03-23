<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses penambahan data pembayaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_reservasi = $_POST['id_reservasi'];
    $metode_byr = $_POST['metode_byr'];
    $total = $_POST['total'];
    $tanggal = $_POST['tanggal'];
    $bukti_transfer = $_FILES['bukti_transfer']['name'];
    $target_dir = "Uploads/";
    $target_file = $target_dir . basename($bukti_transfer);

    // Pindahkan file yang diupload ke direktori target
    if (move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], $target_file)) {
        // Tambah data pembayaran ke database
        $insertQuery = "INSERT INTO pembayaran (id_reservasi, metode_byr, total, tanggal, bukti_transfer) VALUES (?, ?, ?, ?, ?)";
        $stmt = $koneksi->prepare($insertQuery);
        $stmt->bind_param("isiss", $id_reservasi, $metode_byr, $total, $tanggal, $bukti_transfer);
        if ($stmt->execute()) {
            ?>
            <script language="javascript">
                alert("Data berhasil ditambahkan");
                document.location = "data_pembayaran.php";
            </script>
            <?php
        } else {
            ?>
            <script language="javascript">
                alert("Data gagal ditambahkan");
                document.location = "tambah_pembayaran.php";
            </script>
            <?php
        }

        $stmt->close();
    } else {
        ?>
        <script language="javascript">
            alert("Gagal mengunggah bukti transfer");
            document.location = "tambah_pembayaran.php";
        </script>
        <?php
    }
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembayaran</title>
    <link rel="shortcut icon" href="logo-uinma_hotel.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            text-align: center;
        }

        label {
            display: inline-block;
            width: 150px;
            text-align: left;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="file"],
        select {
            width: calc(100% - 160px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-container {
            text-align: center;
            margin-top: 10px;
        }

        .btn-container a {
            margin: 0 5px;
            text-decoration: none;
            color: #007bff;
        }

        .btn-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Data Pembayaran</h2>
        <form method="post" action="tambah_pembayaran.php" enctype="multipart/form-data">
            <label for="id_reservasi">ID Reservasi:</label>
            <select name="id_reservasi" id="id_reservasi" required>
                <option value="">Pilih ID Reservasi</option>
                <?php
                // Koneksi ke database lagi untuk mengambil data reservasi
                include ("koneksi.php");
                $userQuery = "SELECT id_reservasi FROM reservasi";
                $userResult = $koneksi->query($userQuery);
                if ($userResult->num_rows > 0) {
                    while ($user = $userResult->fetch_assoc()) {
                        echo '<option value="' . $user['id_reservasi'] . '">' . $user['id_reservasi'] . '</option>';
                    }
                } else {
                    echo '<option value="">No Reservasi Available</option>';
                }
                ?>
            </select><br><br>
            <label for="metode_byr">Metode Pembayaran:</label>
            <select name="metode_byr" id="metode_byr" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="Transfer">Transfer</option>
                <option value="Cash">Cash</option>
            </select>
            <label for="total">Total:</label>
            <input type="number" name="total" id="total" required><br><br>
            <label for="tanggal">Tanggal Pembayaran:</label>
            <input type="date" name="tanggal" id="tanggal" required><br><br>
            <label for="bukti_transfer">Bukti Transfer:</label>
            <input type="file" name="bukti_transfer" id="bukti_transfer" required><br><br>
            <button type="submit">Tambah</button>
        </form>
        <div class="btn-container">
            <a href="data_pembayaran.php">Data Pembayaran</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
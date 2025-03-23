<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data reservasi untuk dropdown
$reservasiQuery = "SELECT id_reservasi FROM reservasi";
$reservasiResult = $koneksi->query($reservasiQuery);

// Proses hapus reservasi
if (isset($_POST['hapus_reservasi'])) {
    $id_reservasi = $_POST['id_reservasi'];

    // Hapus data reservasi
    $deleteQuery = "DELETE FROM reservasi WHERE id_reservasi = ?";
    $stmt = $koneksi->prepare($deleteQuery);
    $stmt->bind_param("i", $id_reservasi);

    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data berhasil dihapus");
            document.location = "data_reservasi.php";
        </script>
        <?php
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }

    $stmt->close();
}

// Proses ubah reservasi
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['hapus_reservasi'])) {
    $id_reservasi = $_POST['id_reservasi'];
    $jml_org = $_POST['jml_org'];
    $id_user = $_POST['id_user'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Update data reservasi
    $updateQuery = "UPDATE reservasi SET jml_org = ?, id_user = ?, check_in = ?, check_out = ? WHERE id_reservasi = ?";
    $stmt = $koneksi->prepare($updateQuery);
    $stmt->bind_param("iisss", $jml_org, $id_user, $check_in, $check_out, $id_reservasi);

    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data berhasil diubah");
            document.location = "data_reservasi.php";
        </script>
        <?php
    } else {
        ?>
        <script language="javascript">
            alert("Data gagal diubah");
            document.location = "data_reservasi.php";
        </script>
        <?php
    }

    $stmt->close();
}

// Ambil data reservasi yang dipilih untuk diubah
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectQuery = "SELECT * FROM reservasi WHERE id_reservasi = ?";
    $stmt = $koneksi->prepare($selectQuery);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Reservasi</title>

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
            width: 100px;
            text-align: left;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        select {
            width: calc(100% - 110px);
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

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-container {
            text-align: center;
            margin-top: 10px;
        }

        .btn-container button {
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Ubah Data Reservasi</h2>
        <p>Pilih reservasi yang ingin diubah datanya.</p>
        <form method="post" action="ubah.php">
            <label for="id_reservasi">Pilih Id Reservasi:</label>
            <select name="id_reservasi" id="id_reservasi" onchange="window.location.href='ubah.php?id=' + this.value">
                <option value="">Pilih Id Reservasi</option>
                <?php while ($reservasi = $reservasiResult->fetch_assoc()) { ?>
                    <option value="<?php echo $reservasi['id_reservasi']; ?>" <?php if (isset($row) && $row['id_reservasi'] == $reservasi['id_reservasi'])
                           echo 'selected'; ?>>
                        <?php echo $reservasi['id_reservasi']; ?>
                    </option>
                <?php } ?>
            </select><br><br>

            <?php if (isset($row)) { ?>
                <label for="jml_org">Jumlah Orang:</label>
                <input type="number" name="jml_org" id="jml_org" value="<?php echo $row['jml_org']; ?>" required><br><br>

                <label for="id_user">ID User:</label>
                <input type="number" name="id_user" id="id_user" value="<?php echo $row['id_user']; ?>" required><br><br>

                <label for="check_in">Check-in:</label>
                <input type="date" name="check_in" id="check_in" value="<?php echo $row['check_in']; ?>" required><br><br>

                <label for="check_out">Check-out:</label>
                <input type="date" name="check_out" id="check_out" value="<?php echo $row['check_out']; ?>"
                    required><br><br>

                <button type="submit">Ubah</button>

                <!-- Tombol Hapus -->
                <button type="submit" class="btn-danger" name="hapus_reservasi"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
            <?php } ?>
        </form>
        <div class="btn-container">
            <a href="data_reservasi.php">Data Reservasi</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
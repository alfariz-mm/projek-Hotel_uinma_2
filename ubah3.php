<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data pembayaran untuk dropdown
$pembayaranQuery = "SELECT id_pembayaran FROM pembayaran";
$pembayaranResult = $koneksi->query($pembayaranQuery);

// Proses hapus pembayaran
if (isset($_POST['hapus_pembayaran'])) {
    $id_pembayaran = $_POST['id_pembayaran'];

    // Hapus data pembayaran
    $deleteQuery = "DELETE FROM pembayaran WHERE id_pembayaran = ?";
    $stmt = $koneksi->prepare($deleteQuery);
    $stmt->bind_param("i", $id_pembayaran);

    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data berhasil dihapus");
            document.location = "data_pembayaran.php";
        </script>
        <?php
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }

    $stmt->close();
}

// Proses ubah pembayaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pembayaran = $_POST['id_pembayaran'];
    $metode_byr = $_POST['metode']; // perbaikan nama input
    $total = $_POST['total'];
    $tanggal = $_POST['tanggal'];
    $bukti_transfer = $_POST['bukti']; // perbaikan nama input

    // Update data pembayaran
    $updateQuery = "UPDATE pembayaran SET metode_byr = ?, total = ?, tanggal = ?, bukti_transfer = ? WHERE id_pembayaran = ?";
    $stmt = $koneksi->prepare($updateQuery);
    $stmt->bind_param("ssssi", $metode_byr, $total, $tanggal, $bukti_transfer, $id_pembayaran); // tambahkan "s" untuk bukti_transfer

    if ($stmt->execute()) { ?>
        <script language="javascript">
            alert("Data Berhasil diubah");
            document.location = "data_pembayaran.php";
        </script>
        <?php
    } else { ?>
        <script language="javascript">
            alert("Data Gagal diubah");
            document.location = "data_pembayaran.php";
        </script>
        <?php
    }

    $stmt->close();
}

// Ambil data pembayaran yang dipilih untuk diubah
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectQuery = "SELECT * FROM pembayaran WHERE id_pembayaran = ?";
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
    <title>Ubah Data Pembayaran</title>
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
        input[type="date"],
        input[type="number"],
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
        <h2>Ubah Data Pembayaran</h2>
        <p>Pilih pembayaran yang ingin diubah datanya.</p>
        <form method="post" action="ubah3.php">
            <label for="id_pembayaran">Pilih pembayaran:</label>
            <select name="id_pembayaran" id="id_pembayaran" onchange="window.location.href='ubah3.php?id='+this.value">
                <option value="">Pilih pembayaran</option>
                <?php while ($pembayaran = $pembayaranResult->fetch_assoc()) { ?>
                    <option value="<?php echo $pembayaran['id_pembayaran']; ?>" <?php if (isset($row) && $row['id_pembayaran'] == $pembayaran['id_pembayaran'])
                           echo 'selected'; ?>>
                        <?php echo $pembayaran['id_pembayaran']; ?>
                    </option>
                <?php } ?>
            </select><br><br>

            <?php if (isset($row)) { ?>
                <label for="metode">Metode Pembayaran:</label>
                <input type="text" name="metode" id="metode" value="<?php echo $row['metode_byr']; ?>" required><br><br>

                <label for="tanggal">Tanggal Bayar:</label>
                <input type="date" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>" required><br><br>

                <label for="total">Total Bayar:</label>
                <input type="number" name="total" id="total" value="<?php echo $row['total']; ?>" required><br><br>

                <label for="bukti" style="text-align: left;">Bukti Transfer:</label>
                <input type="text" name="bukti" id="bukti" value="<?php echo htmlspecialchars($row['bukti_transfer']); ?>"
                    required><br><br>
                <div>
                    <img src="Uploads/<?php echo $row['bukti_transfer']; ?>" alt="Bukti Transfer"
                        style="max-width: 100px; height: auto;">
                </div>

                <button type="submit">Ubah</button>

                <!-- Tombol Hapus -->
                <button type="submit" class="btn-danger" name="hapus_pembayaran"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
            <?php } ?>
        </form>
        <div class="btn-container">
            <a href="data_pembayaran.php">Data pembayaran</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
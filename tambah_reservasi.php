<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses penambahan data reservasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id']; // Ambil dari form
    $jml_org = $_POST['jml_org']; // Ambil dari form
    $check_in = $_POST['check_in']; // Ambil dari form
    $check_out = $_POST['check_out']; // Ambil dari form

    // Tambah data reservasi
    $insertQuery = "INSERT INTO reservasi (id_user, jml_org, check_in, check_out) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($insertQuery);
    $stmt->bind_param("iiss", $user_id, $jml_org, $check_in, $check_out);
    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data berhasil ditambahkan");
            document.location = "data_reservasi.php";
        </script>
        <?php
    } else {
        ?>
        <script language="javascript">
            alert("Data gagal ditambahkan");
            document.location = "tambah_reservasi.php";
        </script>
        <?php
    }

    $stmt->close();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Reservasi</title>
    <link rel="shortcut icon" href="Logo uinma-hotel.jpeg" type="image/x-icon">
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

        select,
        input[type="date"],
        input[type="number"] {
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
        <h2>Tambah Data Reservasi</h2>
        <form method="post" action="tambah_reservasi.php">
            <label for="user_id">ID User:</label>
            <select name="user_id" id="user_id" required>
                <option value="">Pilih ID User</option>
                <?php
                // Query untuk mengambil data user
                $userQuery = "SELECT * FROM user";
                $userResult = $koneksi->query($userQuery);
                if ($userResult->num_rows > 0) {
                    while ($user = $userResult->fetch_assoc()) {
                        echo '<option value="' . $user['id_user'] . '">' . $user['id_user'] . ' - ' . $user['username'] . '</option>';
                    }
                } else {
                    echo '<option value="">No User Available</option>';
                }
                $koneksi->close();
                ?>
            </select><br><br>
            <label for="jml_org">Jumlah Orang:</label>
            <input type="number" name="jml_org" id="jml_org" required><br><br>
            <label for="check_in">Tanggal Check In:</label>
            <input type="date" name="check_in" id="check_in" required><br><br>
            <label for="check_out">Tanggal Check Out:</label>
            <input type="date" name="check_out" id="check_out" required><br><br>

            <button type="submit">Tambah</button>
        </form>
        <div class="btn-container">
            <a href="data_reservasi.php">Data Reservasi</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data user untuk dropdown
$userQuery = "SELECT id_user, username FROM user";
$userResult = $koneksi->query($userQuery);

// Proses hapus user
if (isset($_POST['hapus_user'])) {
    $id_user = $_POST['id_user'];

    // Hapus data user
    $deleteQuery = "DELETE FROM user WHERE id_user = ?";
    $stmt = $koneksi->prepare($deleteQuery);
    $stmt->bind_param("i", $id_user);

    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data berhasil dihapus");
            document.location = "data_user.php";
        </script>
        <?php
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }

    $stmt->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Update data pengguna
    $updateQuery = "UPDATE user SET username = ?, password = ?, email = ? WHERE id_user = ?";
    $stmt = $koneksi->prepare($updateQuery);
    $stmt->bind_param("sssi", $username, $password, $email, $id_user);

    if ($stmt->execute()) { ?>
        <script language="javascript">
            alert("Data Berhasil diubah");
            document.location = "data_user.php";
        </script>
        <?php
    } else {
        ?>
        <script language="javascript">
            alert("Data Gagal diubah");
            document.location = "data_user.php";
        </script>
        <?php
    }

    $stmt->close();
}

// Ambil data user yang dipilih untuk diubah
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectQuery = "SELECT * FROM user WHERE id_user = ?";
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
    <title>Ubah Data User</title>

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
        input[type="password"],
        input[type="email"],
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
        <h2>Ubah Data Pengguna</h2>
        <p>Pilih user yang ingin diubah datanya.</p>
        <form method="post" action="ubah2.php">
            <label for="id_user">Pilih User:</label>
            <select name="id_user" id="id_user" onchange="window.location.href='ubah2.php?id='+this.value">
                <option value="">Pilih User</option>
                <?php while ($user = $userResult->fetch_assoc()) { ?>
                    <option value="<?php echo $user['id_user']; ?>" <?php if (isset($row) && $row['id_user'] == $user['id_user'])
                           echo 'selected'; ?>>
                        <?php echo $user['username']; ?>
                    </option>
                <?php } ?>
            </select><br><br>

            <?php if (isset($row)) { ?>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" required><br><br>

                <label for="password">Password:</label>
                <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>" required><br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required><br><br>

                <button type="submit">Ubah</button>

                <!-- Tombol Hapus -->
                <button type="submit" class="btn-danger" name="hapus_user"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
            <?php } ?>
        </form>
        <div class="btn-container">
            <a href="data_user.php">Data User</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
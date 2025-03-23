<?php
// Koneksi ke database
include ("koneksi.php");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses penambahan data user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Tambah data user
    $insertQuery = "INSERT INTO user (username, password, email) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($insertQuery);
    $stmt->bind_param("sss", $username, $password, $email);
    if ($stmt->execute()) {
        ?>
        <script language="javascript">
            alert("Data user berhasil ditambahkan");
            document.location = "data_user.php";
        </script>
        <?php
    } else {
        ?>
        <script language="javascript">
            alert("Data user gagal ditambahkan");
            document.location = "tambah_user.php";
        </script>
        <?php
    }

    $stmt->close();
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
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
        <h2>Tambah Data User</h2>
        <form method="post" action="tambah_user.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <button type="submit">Tambah</button>
        </form>
        <div class="btn-container">
            <a href="data_user.php">Data User</a> |
            <a href="admin.php">Home</a>
        </div>
    </div>
</body>

</html>
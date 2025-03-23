<?php
include "koneksi.php";

// Query untuk mengambil data reservasi, pembayaran, dan user
$sql = "SELECT * FROM reservasi, user, pembayaran WHERE user.id_user=reservasi.id_user AND reservasi.id_reservasi=pembayaran.id_reservasi;";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Data ditemukan, tampilkan ke dalam tabel
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HotelUinma</title>
        <link rel="shortcut icon" href="logo-uinma_hotel.png" type="image/x-icon">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }

            .hasil-container {
                max-width: 800px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .hasil-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table,
            th,
            td {
                border: 1px solid #ddd;
            }

            th,
            td {
                padding: 10px;
            }

            th {
                background-color: #f2f2f2;
                color: #333;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            .hasil-container a {
                display: inline-block;
                padding: 10px 20px;
                margin-top: 10px;
                text-decoration: none;
                background-color: #FC2947;
                color: #fff;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .hasil-container a:hover {
                background-color: #A0153E;
            }

            .centered-buttons {
                text-align: center;
                margin-top: 10px;
            }

            .centered-buttons a {
                margin: 0 3px;
            }
        </style>
    </head>

    <body>
        <div class="hasil-container">
            <h2>Data Pembayaran</h2>
            <table border="1" style="text-align: center;">
                <tr>
                    <th>ID Pembayaran</th>
                    <th>Username</th>
                    <th>Metode Pembayaran</th>
                    <th>Total</th>
                    <th>Tanggal Bayar</th>
                    <th>Bukti Bayar</th>
                    <th>Download</th>
                </tr>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id_pembayaran']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['metode_byr']; ?>
                        </td>
                        <td>
                            <?php echo $row['total']; ?>
                        </td>

                        <td>
                            <?php echo $row['tanggal']; ?>
                        </td>
                        <td>
                            <img src="Uploads/<?php echo $row['bukti_transfer']; ?>" alt="Bukti Transfer"
                                style="max-width: 100px; height: auto;">
                        </td>
                        <td>
                            <a href="Uploads/<?php echo $row['bukti_transfer']; ?>" target="_blank">Buka</a> <br>
                            <a href="Uploads/<?php echo $row['bukti_transfer']; ?>" download="<?php echo $nmfile; ?>">Download</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <div class="centered-buttons">
                <a href="tambah_pembayaran.php">Tambah</a>
                <a href="ubah3.php">Ubah</a>
                <a href="admin.php">Home</a>
            </div>

        </div>
    </body>

    </html>
    <?php
} else {
    // Jika tidak ada data yang ditemukan
    echo "Belum ada data pembayaran.";
}
?>
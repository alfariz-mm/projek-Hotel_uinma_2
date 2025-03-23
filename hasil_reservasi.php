<?php
include "koneksi.php";

// Query untuk mengambil data reservasi, pembayaran, dan user
$sql = "SELECT p.tanggal, u.username, r.jml_org, r.check_in, r.check_out, p.bukti_transfer
FROM reservasi r
INNER JOIN pembayaran p ON r.id_reservasi = p.id_reservasi
INNER JOIN user u ON r.id_user = u.id_user
WHERE p.id_pembayaran = (SELECT MAX(id_pembayaran) FROM pembayaran)";
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
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f2f5;
                font-family: Arial, sans-serif;
                margin: 0;
            }

            .hasil-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-left: #FC2947 solid 5px;
                max-width: 1000px;
                width: 100%;
                margin-top: 20px;
            }

            .hasil-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            .hasil-container table {
                width: 100%;
                border-collapse: collapse;
            }

            .hasil-container th,
            .hasil-container td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            .hasil-container th {
                background-color: #f2f2f2;
                color: #333;
            }

            .hasil-container img {
                max-width: 100px;
                height: auto;
                display: block;
                margin: auto;
                border-radius: 4px;
            }

            .hasil-container a {
                text-decoration: none;
                color: #FC2947;
                display: block;
                text-align: center;
                margin-top: 20px;
                font-size: 16px;
            }

            .hasil-container a:hover {
                text-decoration: underline;
            }

            .hasil-container .btn-print {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
                text-align: center;
                display: block;
                margin: 20px auto;
                font-size: 16px;
            }

            .hasil-container .btn-print:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <div class="hasil-container">
            <h2>Hasil Reservasi Anda</h2>
            <table>
                <tr>
                    <th>Tanggal Pembayaran</th>
                    <th>Username</th>
                    <th>Jumlah Orang</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Bukti Transfer</th>
                </tr>
                <?php
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['tanggal']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['jml_org']; ?>
                        </td>
                        <td>
                            <?php echo $row['check_in']; ?>
                        </td>
                        <td>
                            <?php echo $row['check_out']; ?>
                        </td>
                        <td><img src="Uploads/<?php echo $row['bukti_transfer']; ?>" alt="Bukti Transfer"
                                style="max-width: 150px;"></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <button class="btn-print" onclick="window.print()">Cetak</button>
            <a href="home.php">Home</a>
        </div>
    </body>

    </html>
    <?php
} else {
    // Jika tidak ada data yang ditemukan
    echo "Belum ada data reservasi.";
}
?>
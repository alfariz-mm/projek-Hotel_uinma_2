<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelUinma</title>
    <link rel="shortcut icon" href="logo-uinma_hotel.png" type="image/x-icon">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140vh;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .reservasi-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: #FC2947 solid 5px;
            max-width: 700px;
            width: 100%;
        }

        .reservasi-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .reservasi-container table {
            width: 100%;
        }

        .reservasi-container td {
            padding: 10px 0;
        }

        .reservasi-container input[type="date"],
        .reservasi-container select,
        .reservasi-container input[type="text"],
        .reservasi-container input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .reservasi-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #FC2947;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .reservasi-container input[type="submit"]:hover {
            background-color: #A0153E;
        }

        .reservasi-container a {
            text-decoration: underline;
            color: #A0153E;
        }

        .reservasi-container p {
            text-decoration: none;
            color: #A0153E;
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .reservasi-container a:hover {
            color: #FC2947;
        }

        
    </style>
</head>

<body>
    <div class="reservasi-container">
        <h2>Form Reservasi</h2>
        <form action="aksi_reservasi.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" id="" required placeholder="masukkan username login"></td>
                </tr>
                <tr>
                    <td>Tanggal Check in</td>
                    <td><input type="date" name="cekin" id="" required></td>
                </tr>
                <tr>
                    <td>Tanggal Check out</td>
                    <td><input type="date" name="cekout" id="" required></td>
                </tr>
                <tr>
                    <td>Jumlah Orang</td>
                    <td><input type="number" name="orang" id="" required placeholder="jumlah orang"></td>
                </tr>
                <tr>
                    <td>Tipe Kamar</td>
                    <td>
                        <select name="kamar" id="">
                            <?php
                            // Sertakan file koneksi
                            include 'koneksi.php';

                            // Query untuk mengambil data dari tabel RoomTypes
                            $sql = "SELECT id_kamar, tipe_kmr FROM kamar";
                            $result = $koneksi->query($sql);
                            if ($result->num_rows > 0) {
                                // Loop data dan tampilkan dalam tag <option>
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['id_kamar'] . '">' . $row['tipe_kmr'] . '</option>';
                                }
                            } else {
                                echo '<option value="">Tidak ada data</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: center;">Tipe Kamar</th>
                    <th style="text-align: center;">Harga</th>
                </tr>

                <?php
                $sql = "SELECT tipe_kmr, harga FROM kamar";
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td style='text-align: center;'>" . $row["tipe_kmr"] . "</td>";
                        echo "<td style='text-align: center;'>" . $row["harga"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' style='text-align: center;'>Tidak ada data</td></tr>";
                }
                ?>

                <tr>
                    <td colspan="2"><input type="submit" name="login" value="Lanjut"><a href="bayar.php"></a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
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
            height: 100vh;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 50px;
            /* Added margin-top for better spacing */
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .container table {
            width: 100%;
            margin-top: 20px;
            /* Added margin-top for better spacing */
        }

        .container td {
            padding: 10px;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #FC2947;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            /* Added margin-bottom for better spacing between buttons */
        }

        .container button:hover {
            background-color: #A0153E;
        }

        .container a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Buka Halaman</h2>
        <table>
            <tr>
                <td><a href="home.php"><button>Customer</button></a></td>
                <td><a href="data_reservasi.php"><button>Data Reservasi</button></a></td>
            </tr>
            <tr>
                <td><a href="data_user.php"><button>Data User</button></a></td>
                <td><a href="data_pembayaran.php"><button>Data Pembayaran</button></a></td>
            </tr>
            <tr>
                <td colspan="2"><a href="logout.php"><button>Logout</button></a></td>
            </tr>
        </table>
    </div>
</body>

</html>
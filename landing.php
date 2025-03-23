<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelUinma - Pemesanan Hotel</title>
    <link rel="shortcut icon" href="logo-uinma_hotel.png" type="image/x-icon">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f2f5;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            background: url('images/about.png') center/cover no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FC2947;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #A0153E;
        }

        
        .booking {
            background-color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .booking form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .booking label,
        .booking input,
        .booking select {
            width: calc(50% - 20px);
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .booking label {
            text-align: right;
            margin-right: 10px;
        }

        .booking button {
            width: 100%;
            padding: 10px;
            background-color: #FC2947;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .booking button:hover {
            background-color: #A0153E;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 0px;
        }

        .footer p {
            margin: 0;
        }

        /* Responsive Design */

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .header p {
                font-size: 1.2rem;
            }

            .booking label,
            .booking input,
            .booking select {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1>Selamat Datang di Hotel Uinma</h1>
            <p>Pilihan sempurna Anda untuk pengalaman menginap yang berkesan</p>
            <a href="login.php" class="btn">Masuk</a>
        </div>
    </header>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 HotelUinma. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Panco Bali</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
            font-size: 24px;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

        a {
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat Datang, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Pengguna'; ?>!</h2>
        <p>Anda telah berhasil login ke Organisasi Panco Bali.</p>
        
        <!-- Tautan ke halaman transaksi -->
        <p><a href="form_transaksi.php" class="btn">Form Transaksi</a></p>

        <p><a href="logout.php" class="btn">Logout</a></p>
    </div>
</body>
</html>

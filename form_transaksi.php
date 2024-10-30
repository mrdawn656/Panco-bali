<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi - Organisasi Panco Bali</title>
</head>
<body>
    <h2>Form Transaksi</h2>
    <form action="transaksi.php" method="post">
        <label for="product_id">Pilih Produk:</label>
        <select name="product_id" id="product_id" required>
            <?php
            // Koneksi ke database
            $host = "localhost"; 
            $user = "root";      
            $password = "";      
            $database = "panco_bali"; 

            // membuat koneksi
            $conn = new mysqli($host, $user, $password, $database);

            // mengecek koneksi
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            // mengambil daftar produk dari database
            $result = $conn->query("SELECT id, name, price FROM products");

            // mengcek jika ada produk
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['name']} - Rp. " . number_format($row['price'], 2) . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada produk tersedia</option>";
            }

            $conn->close(); // Tutup koneksi
            ?>
        </select>
        <br><br>
        
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" required min="1" value="1">
        <br><br>
        
        <input type="submit" value="Proses Transaksi">
    </form>
</body>
</html>

<?php
// Koneksi ke database
$host = "localhost"; 
$user = "root";      
$password = "";      
$database = "panco_bali"; 

// Buat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Hitung total harga
$result = $conn->query("SELECT price FROM products WHERE id = $product_id");
$row = $result->fetch_assoc();
$total_price = $row['price'] * $quantity;

// Simpan transaksi ke database
$sql = "INSERT INTO transactions (product_id, quantity, total_price) VALUES ($product_id, $quantity, $total_price)";
if ($conn->query($sql) === TRUE) {
    echo "Transaksi berhasil! Total harga: Rp. " . number_format($total_price, 2);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Tutup 
?>

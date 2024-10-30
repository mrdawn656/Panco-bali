-- Membuat database panco_bali
CREATE DATABASE IF NOT EXISTS panco_bali;
USE panco_bali;

-- Membuat tabel produk
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

-- Menambahkan beberapa produk contoh
INSERT INTO products (name, price, stock) VALUES
('Alat Panco', 200000, 50),
('Sticker Panco', 10000, 100),
('Gripper Lengan', 50000, 30),
('Dumbell', 150000, 20);

-- Membuat tabel transaksi
CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

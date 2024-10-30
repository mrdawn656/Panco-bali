<?php
// Mulai sesi
session_start();

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password (contoh sederhana)
    if ($username === 'fajar' && $password === 'harry') {
        // Set sesi untuk menandai pengguna sudah login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Arahkan ke halaman sukses
        header("Location: welcome.php");
        exit;
    } else {
        // Tampilkan pesan kesalahan
        echo "Username atau password salah.";
    }
}
?>

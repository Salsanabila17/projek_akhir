<?php
// Mulai session untuk mengakses session cart
session_start();

// Cek apakah keranjang belanja (cart) ada di dalam session
if (isset($_SESSION['cart'])) {
    // Menghapus semua item dalam cart
    unset($_SESSION['cart']);
    
    // Redirect atau beri pesan bahwa keranjang sudah kosong
    echo "<script>alert('Keranjang belanja telah dikosongkan.'); window.location.href = 'eat_user.php';</script>";
} else {
    // Jika tidak ada cart yang ditemukan
    echo "<script>alert('Keranjang belanja kosong.'); window.location.href = 'eat_user.php';</script>";
}
?>

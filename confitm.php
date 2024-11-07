<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = htmlspecialchars($_POST['user_id']);
    $diamonds = htmlspecialchars($_POST['diamonds']);
    $price = htmlspecialchars($_POST['price']);
    
    // Simpan transaksi atau kirim data ke API pembayaran di sini
    
    echo "<h1>Terima Kasih!</h1>";
    echo "<p>Transaksi berhasil untuk User ID: $user_id</p>";
    echo "<p>Jumlah Diamond: $diamonds</p>";
    echo "<p>Total Harga: Rp" . number_format($price, 0, ',', '.') . "</p>";
}
?>

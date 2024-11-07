<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = htmlspecialchars($_POST['user_id']);
    $diamonds = htmlspecialchars($_POST['diamonds']);
    $price = ($diamonds == 50) ? 10000 : (($diamonds == 100) ? 20000 : 50000);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Konfirmasi Pembayaran</h1>
    <p>User ID: <?= $user_id ?></p>
    <p>Jumlah Diamond: <?= $diamonds ?></p>
    <p>Total Harga: Rp<?= number_format($price, 0, ',', '.') ?></p>
    
    <form action="confirm.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $user_id ?>">
        <input type="hidden" name="diamonds" value="<?= $diamonds ?>">
        <input type="hidden" name="price" value="<?= $price ?>">
        <button type="submit">Bayar Sekarang</button>
    </form>
</body>
</html>

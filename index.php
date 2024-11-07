<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top Up Mobile Legends</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Top Up Mobile Legends</h1>
    <form action="checkout.php" method="POST">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" required>
        
        <label for="diamonds">Pilih Paket Diamond:</label>
        <select name="diamonds" required>
            <option value="50">50 Diamonds - Rp10.000</option>
            <option value="100">100 Diamonds - Rp20.000</option>
            <option value="250">250 Diamonds - Rp50.000</option>
        </select>
        
        <button type="submit">Lanjutkan Pembayaran</button>
    </form>
</body>
</html>

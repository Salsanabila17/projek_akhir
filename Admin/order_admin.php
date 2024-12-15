<?php
session_start();

// Koneksi ke database
$host = 'localhost';
$dbname = 'restaurant_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Ambil semua pesanan dari database
$query = "SELECT * FROM orders ORDER BY created_at DESC";
$stmt = $pdo->query($query);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Pengguna - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #222;
        }

        tr:nth-child(even) {
            background-color: #333;
        }

        .header {
            background-color: #000;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .header nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">CC Restaurant - Admin</div>
        <nav>
            <a href="admin_dashboard.php">Home</a>
            <a href="eat_admin.php">Menu</a>
            <a href="reservations.php">Reservations</a>
            <a href="order_admin.php">Order In</a>
            <a href="contact.php">Contact</a>
    </header>
    </nav>

    <h1>Pesanan Pengguna</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Item</th>
                <th>Harga</th>
                <th>Waktu Pemesanan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($orders) > 0): ?>
                <?php foreach ($orders as $index => $order): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($order['username']) ?></td>
                        <td><?= htmlspecialchars($order['item']) ?></td>
                        <td>Rp <?= number_format($order['price'], 0, ',', '.') ?></td>
                        <td><?= $order['created_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Belum ada pesanan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>

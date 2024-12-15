<?php
// order_admin.php

// Simpan data menu dalam array untuk memvalidasi item yang masuk
$menuItems = [
    "Margherita Pizza" => 150000,
    "Pasta Carbonara" => 180000,
    "Caesar Salad" => 130000,
    "Classic Burger" => 160000,
    "Lasagna" => 200000,
    "Grilled Steak" => 270000,
    "Tiramisu" => 90000,
    "Ice Cream" => 60000,
];

// Ambil parameter item dan price dari URL
$item = isset($_GET['item']) ? $_GET['item'] : null;
$price = isset($_GET['price']) ? (int)$_GET['price'] : 0;

// Validasi data yang masuk
if ($item && isset($menuItems[$item]) && $menuItems[$item] === $price) {
    // Tambahkan pesanan ke sesi
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = [
        'item' => $item,
        'price' => $price
    ];

    $message = "$item berhasil ditambahkan ke keranjang!";
} else {
    $message = "Item tidak valid atau harga tidak cocok.";
}

// Hitung total harga
$totalPrice = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $cartItem) {
        $totalPrice += $cartItem['price'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Admin - CC Restaurant</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }

        /* Header */
        .header {
            background-color: #000;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .header nav {
            display: flex;
            gap: 15px;
        }

        .header nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 5px 10px;
        }

        .header nav a:hover {
            background-color: #a92a24;
            border-radius: 5px;
        }

        /* Cart Container */
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #222;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .message {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #00aaff;
            border-radius: 5px;
            color: #fff;
            text-align: center;
        }

        .cart-item {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        .total {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            background-color: #00ff00;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .button:hover {
            background-color: #00cc00;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="header">
        <div class="logo">
            <h1>CC</h1>
        </div>
        <nav>
            <a href="user_dashboard.php">Home</a>
            <a href="eat_user.php">Menu</a>
            <a href="reservations.php">Reservations</a>
            <a href="order_user.php">Order In</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- Order Section -->
    <div class="container">
        <div class="message"><?= $message ?></div>

        <h3>Keranjang Anda</h3>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <?php foreach ($_SESSION['cart'] as $cartItem): ?>
                <div class="cart-item">
                    <?= $cartItem['item'] ?> - Rp <?= number_format($cartItem['price'], 0, ',', '.') ?>
                </div>
            <?php endforeach; ?>
            <div class="total">Total: Rp <?= number_format($totalPrice, 0, ',', '.') ?></div>
        <?php else: ?>
            <p>Keranjang kosong.</p>
        <?php endif; ?>

        <a href="eat_user.php" class="button">Kembali ke Menu</a>
        <a href="clear_cart.php" class="button" style="background-color: #ff0000;">Kosongkan Keranjang</a>
    </div>
</body>
</html>

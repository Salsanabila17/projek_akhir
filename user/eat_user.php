<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Restaurant</title>
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

        /* Menu Section */
        .menu-container {
            padding: 20px;
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        .menu-container h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00aaff;
        }

        .menu-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .menu-item {
            background-color: #222;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease;
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .menu-item h3 {
            font-size: 24px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .menu-item p {
            font-size: 14px;
            color: #ddd;
            margin-bottom: 10px;
        }

        .menu-item span {
            font-weight: bold;
            color: #00ff00;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <!-- Header -->
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

    <!-- Eat Menu Section -->
    <section class="menu-container" id="menu-section">
        <h2>Our Menu</h2>
        <div class="menu-list">
        <div class="menu-item">
                <img src="../admin/uploads/pizza.jpg" alt="Margherita Pizza">
                <h3>Margherita Pizza</h3>
                <p>Classic Margherita with mozzarella and fresh tomato.</p>
                <span>Rp 150,000</span>
                <button onclick="addToCart('Margherita Pizza', 150000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/pasta carbonara.jpg" alt="Pasta Carbonara">
                <h3>Pasta Carbonara</h3>
                <p>Creamy pasta with bacon and parmesan cheese.</p>
                <span>Rp 180,000</span>
                <button onclick="addToCart('Pasta Carbonara', 180000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/salad.jpg" alt="Caesar Salad">
                <h3>Caesar Salad</h3>
                <p>Fresh romaine lettuce with Caesar dressing, croutons, and Parmesan.</p>
                <span>Rp 130,000</span>
                <button onclick="addToCart('Caesar Salad', 130000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/burger.jpg" alt="Classic Burger">
                <h3>Classic Burger</h3>
                <p>Beef patty with lettuce, tomato, cheese, and special sauce.</p>
                <span>Rp 160,000</span>
                <button onclick="addToCart('Classic Burger', 160000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/lasagna.jpg" alt="Lasagna">
                <h3>Lasagna</h3>
                <p>Layers of pasta, cheese, and meat sauce, baked to perfection.</p>
                <span>Rp 200,000</span>
                <button onclick="addToCart('Lasagna', 200000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/steak.jpg" alt="Grilled Steak">
                <h3>Grilled Steak</h3>
                <p>Juicy grilled steak served with garlic butter and side salad.</p>
                <span>Rp 270,000</span>
                <button onclick="addToCart('Grilled Steak', 270000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/tiramisu.jpg" alt="Tiramisu">
                <h3>Tiramisu</h3>
                <p>Classic Italian dessert with layers of coffee-soaked ladyfingers and mascarpone.</p>
                <span>Rp 90,000</span>
                <button onclick="addToCart('Tiramisu', 90000)">Add to Cart</button>
            </div>
            <div class="menu-item">
                <img src="../admin/uploads/ice.jpg" alt="Ice Cream">
                <h3>Ice Cream</h3>
                <p>Choice of vanilla, chocolate, or strawberry ice cream.</p>
                <span>Rp 60,000</span>
                <button onclick="addToCart('Ice Cream', 60000)">Add to Cart</button>
            </div>
        </div>
            <!-- Add more menu items as needed -->
        </div>
    </section>

    <script>
        function addToCart(item, price) {
            const url = `order_user.php?item=${encodeURIComponent(item)}&price=${price}`;
            window.location.href = url;
        }
    </script>
</body>
</html>

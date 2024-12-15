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
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        /* Header */
        .header {
            background-color: #222;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .header .logo {
            font-size: 24px;  /* Reduced font size */
            font-weight: bold;
            color: #fff;
            letter-spacing: 1px;
        }

        .header nav {
            display: flex;
            gap: 15px;  /* Reduced gap */
        }

        .header nav a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;  /* Reduced font size */
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .header nav a:hover {
            background-color: #00aaff;
        }

        /* Welcome Message */
        .welcome-message {
            font-size: 22px;  /* Reduced font size */
            text-align: center;
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            position: relative;
            text-align: center;
            color: white;
            background-color: #333;
        }

        .hero img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hero h2 {
            font-size: 48px;  /* Reduced font size */
            font-family: 'Brush Script MT', cursive;
            color: #fff;
            margin-bottom: 10px;
        }

        .hero button {
            padding: 12px 25px;  /* Reduced padding */
            font-size: 16px;  /* Reduced font size */
            background-color: #00aaff;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .hero button:hover {
            background-color: #0088cc;
        }

        /* Menu Section */
        .menu-container {
            padding: 30px 20px;  /* Reduced padding */
            text-align: center;
            background-color: #fff;
        }

        .menu-container h2 {
            font-size: 28px;  /* Reduced font size */
            margin-bottom: 25px;  /* Reduced margin */
            color: #00aaff;
        }

        .menu-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;  /* Reduced gap */
            justify-content: center;
        }

        .menu-item {
            background-color: #fff;
            color: #333;
            padding: 15px;  /* Reduced padding */
            border-radius: 8px;  /* Reduced border radius */
            width: 200px;  /* Reduced width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .menu-item img {
            width: 100%;
            height: 180px;  /* Reduced height */
            object-fit: cover;
            border-radius: 6px;  /* Reduced border radius */
        }

        .menu-item h3 {
            font-size: 18px;  /* Reduced font size */
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .menu-item p {
            font-size: 12px;  /* Reduced font size */
            color: #777;
            margin-bottom: 8px;
        }

        .menu-item span {
            font-weight: bold;
            color: #00ff00;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        /* Cart Section */
        .cart-container {
            position: fixed;
            right: 20px;
            top: 20px;
            background-color: #222;
            color: #fff;
            padding: 15px;  /* Reduced padding */
            border-radius: 8px;
            width: 280px;  /* Reduced width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .cart-container h3 {
            font-size: 20px;  /* Reduced font size */
            margin-bottom: 12px;  /* Reduced margin */
        }

        .cart-item {
            margin-bottom: 8px;  /* Reduced margin */
        }

        .cart-item span {
            color: #00ff00;
        }

        .cart-total {
            margin-top: 12px;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header nav {
                flex-direction: column;
                align-items: center;
                gap: 10px;  /* Reduced gap */
            }

            .hero h2 {
                font-size: 40px;  /* Reduced font size */
            }

            .menu-item {
                width: 180px;  /* Reduced width */
                padding: 12px;  /* Reduced padding */
            }

            .menu-container {
                padding: 20px 10px;  /* Reduced padding */
            }
        }

        @media (max-width: 480px) {
            .header nav {
                gap: 8px;  /* Reduced gap */
            }

            .hero h2 {
                font-size: 30px;  /* Reduced font size */
            }

            .menu-item {
                width: 100%;  /* Full width for small screens */
                padding: 10px;  /* Reduced padding */
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <h1>CC Restaurant</h1>
        </div>
        <nav>
            <a href="user_dashboard.php">Home</a>
            <a href="reservations.php">Reservations</a>
            <a href="order_user.php">Order In</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>


    <!-- Hero Section (Home Page) -->
    <section class="hero" id="home-section">
    <img src="../admin/uploads/freshh.jpg" alt="Fresh Salad">
        <div class="overlay">
            <h2>Fresh Insalata</h2>
            <a href="eat_user.php">
                <button>View Our Menu</button>
            </a>
        </div>
    </section>
</body>
</html>

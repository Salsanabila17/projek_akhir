<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background: #111;
            color: #f1f1f1;
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

        .container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            background: #222;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.5);
            margin-top: 100px; /* Adjusts for the fixed header height */
        }

        .contact-form, .contact-info {
            padding: 40px;
            flex: 1;
        }

        .contact-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form input, .contact-form textarea {
            margin-bottom: 15px;
            padding: 12px;
            font-size: 16px;
            background: #333;
            border: none;
            border-radius: 5px;
            color: #f1f1f1;
            outline: none;
        }

        .contact-form textarea {
            height: 120px;
            resize: none;
        }

        .contact-form button {
            padding: 12px;
            background: #555;
            color: #f1f1f1;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #777;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #ccc;
        }

        .contact-info p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .contact-info p:first-of-type {
            font-weight: bold;
            color: #fff;
            margin-bottom: 10px;
        }

        .social-links a {
            text-decoration: none;
            color: #bbb;
            font-size: 16px;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #fff;
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
            <a href="admin_dashboard.php">Home</a>
            <a href="eat_admin.php">Menu</a>
            <a href="reservations.php">Reservations</a>
            <a href="order_admin.php">Order In</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <div class="container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="NAME" required>
                <input type="email" name="email" placeholder="EMAIL" required>
                <input type="text" name="subject" placeholder="SUBJECT" required>
                <textarea name="message" placeholder="MESSAGE" required></textarea>
                <button type="submit">SEND</button>
            </form>
        </div>
        <div class="contact-info">
            <p>ADDRESS:</p>
            <p>Main Street 123<br>City, Country</p>
            <p>PHONE:</p>
            <p>+123 456 7890</p>
            <p>EMAIL:</p>
            <p>info@example.com</p>
            <div class="social-links">
                <a href="#">Like</a>
                <a href="#">Share</a>
            </div>
        </div>
    </div>
</body>
</html>

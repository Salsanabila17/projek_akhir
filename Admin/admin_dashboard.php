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
    background: linear-gradient(45deg, #000, #333); /* Black gradient */
    padding: 15px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

.header .logo {
    font-size: 18px; /* Reduced font size for the logo */
    font-weight: bold;
    color: #fff;
    letter-spacing: 1px;
}


.header nav {
    display: flex;
    gap: 15px; /* Reduced gap between navbar items */
}

.header nav a {
    color: #fff;
    text-decoration: none;
    font-size: 14px; /* Reduced font size for navbar items */
    font-weight: bold;
    padding: 8px 12px; /* Reduced padding */
    border-radius: 5px;
    transition: background-color 0.3s ease;
    background: linear-gradient(45deg, #333, #555); /* Black gradient */
}

.header nav a:hover {
    background: linear-gradient(45deg, #555, #777); /* Lighter gradient */
}

        /* Hero Section */
        .hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero img {
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hero h2 {
            font-size: 48px;
            font-family: 'Brush Script MT', cursive;
            color: #fff;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 12px 30px;
            font-size: 18px;
            background: linear-gradient(45deg, #00aaff, #007bff);
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .hero button:hover {
            background: linear-gradient(45deg, #007bff, #0056b3);
            transform: scale(1.1);
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

        .menu-item span {
            font-weight: bold;
            color: #00ff00;
        }

        .menu-item button {
            margin-top: 10px;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

        .menu-item .edit-button {
            background-color: #00aaff;
            color: #fff;
        }

        .menu-item .edit-button:hover {
            background-color: #0088cc;
        }

        .menu-item .delete-button {
            background-color: #ff4444;
            color: #fff;
        }

        .menu-item .delete-button:hover {
            background-color: #cc0000;
        }

        .edit-input {
            display: none;
            margin-top: 10px;
        }

        .edit-input input,
        .edit-input textarea {
            width: 100%;
            margin-bottom: 5px;
            padding: 5px;
            border: none;
            border-radius: 5px;
        }

        .edit-input button {
            background-color: #00ff00;
            color: #000;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header nav {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .hero h2 {
                font-size: 40px;
            }

            .menu-item {
                width: 250px;
            }
        }

        @media (max-width: 480px) {
            .hero h2 {
                font-size: 32px;
            }

            .menu-item {
                width: 100%;
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
            <a href="admin_dashboard.php">Home</a>
            <a href="reservations.php">Reservations</a>
            <a href="order_admin.php">Order In</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="uploads/freshh.jpg" alt="Fresh Salad">
        <div class="overlay">
            <h2>Welcome Admin</h2>
            <a href="eat_admin.php">
                <button>View Our Menu</button>
            </a>
        </div>
    </section>

    <script>
        function toggleEdit(id) {
            const inputSection = document.getElementById(`edit-input-${id}`);
            inputSection.style.display = inputSection.style.display === "block" ? "none" : "block";
        }

        function saveChanges(id) {
            const name = document.getElementById(`edit-name-${id}`).value;
            const desc = document.getElementById(`edit-desc-${id}`).value;
            const img = document.getElementById(`edit-image-${id}`).files[0];
            if (name) document.getElementById(`name-${id}`).textContent = name;
            if (desc) document.getElementById(`description-${id}`).textContent = desc;
            if (img) document.getElementById(`image-${id}`).src = URL.createObjectURL(img);
            toggleEdit(id);
        }

        function updateImage(event, id) {
            const reader = new FileReader();
            reader.onload = function () {
                const imgElement = document.getElementById(`image-${id}`);
                imgElement.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function deleteMenuItem(id) {
            const item = document.getElementById(`menu-item-${id}`);
            item.remove();
        }
    </script>
</body>
</html>

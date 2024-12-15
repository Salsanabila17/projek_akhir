<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reservation Dashboard</title>
    <style>
        /* General reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
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

        /* Dashboard container */
        .dashboard {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 30px;
            gap: 30px;
            max-width: 1200px;
            margin: auto;
        }
/* Sidebar for store information */
.sidebar {
    background-color: #000000;
    width: 320px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(255, 255, 255, 0.1);
}

.sidebar h2, .sidebar p, .sidebar a {
    color: #f5f5f5;
}

/* Reservation list */
.reservations {
    background-color: #000000;
    width: 540px;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(255, 255, 255, 0.1);
}

    /* Tambahkan styling untuk tulisan Active Reservations */
    .reservations h2 {
        color: #ffcc00; /* Warna kuning cerah agar lebih jelas */
        font-size: 28px; /* Ukuran font diperbesar */
        font-weight: bold; /* Membuat tulisan lebih tegas */
        text-align: center; /* Menyelaraskan ke tengah */
        margin-bottom: 20px; /* Tambahkan jarak di bawah */
    }


/* Reservation form */
.reservation-form {
    background-color: #000000;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(255, 255, 255, 0.1);
}

.reservation-form h3 {
    color: #e74c3c;
}

.reservation-form label {
    color: #f5f5f5;
}

/* Reservation card */
.reservation-card {
    background-color: #1a1a1a;
    border: 1px solid #333;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    color: #f5f5f5;
}

.reservation-card h3 {
    color: #e74c3c;
}


        .reservation-card p {
            font-size: 15px;
            color: #333;
        }

        .reservation-actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn-confirm {
            background-color: #27ae60;
        }

        .btn-confirm:hover {
            background-color: #1e8449;
        }

        .btn-cancel {
            background-color: #e74c3c;
        }

        .btn-cancel:hover {
            background-color: #c0392b;
        }

        /* Form styling */
        .reservation-form {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }

        .reservation-form h3 {
            margin-bottom: 20px;
            color: #e74c3c;
            font-size: 22px;
        }

        .reservation-form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #34495e;
        }

        .reservation-form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .reservation-form button {
            background-color: #2980b9;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .reservation-form button:hover {
            background-color: #1e6b94;
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

    <div class="dashboard">
        <!-- Reservation Form -->
        <div class="reservation-form">
            <h3>Add New Reservation</h3>
            <form id="reservationForm">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" required>

                <label for="contact">Contact</label>
                <input type="text" id="contact" required>

                <label for="date">Date</label>
                <input type="date" id="date" required>

                <label for="time">Time</label>
                <input type="time" id="time" required>

                <label for="table">Table Number</label>
                <input type="number" id="table" required>

                <label for="guests">Guests</label>
                <input type="number" id="guests" required>

                <button type="button" onclick="addReservation()">Add Reservation</button>
            </form>
        </div>

        <!-- Sidebar for store information -->
        <div class="sidebar">
            <h2>Store Information</h2>
            <p><strong>Name:</strong> CC Restaurant</p>
            <p><strong>Location:</strong> H&M Café Bandung</p>
            <p><strong>Contact:</strong> +628123456789</p>
            <p><strong>Website:</strong> <a href="#">www.cc-restaurant.com</a></p>
        </div>

        <div class="reservations">
    <h2>Active Reservations</h2>
    <div id="reservationList">
        <!-- Reservations will be added here dynamically -->
    </div>
</div>


    <script>
        function addReservation() {
            const customerName = document.getElementById('customerName').value;
            const contact = document.getElementById('contact').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const table = document.getElementById('table').value;
            const guests = document.getElementById('guests').value;

            const reservationList = document.getElementById('reservationList');

            // Create a new reservation card
            const reservationCard = document.createElement('div');
            reservationCard.className = 'reservation-card';

            reservationCard.innerHTML = `
                <h3>Reservation ID: ${Math.random().toString(36).substring(2, 8).toUpperCase()}</h3>
                <p><strong>Customer:</strong> ${customerName}</p>
                <p><strong>Contact:</strong> ${contact}</p>
                <p><strong>Date & Time:</strong> ${date} at ${time}</p>
                <p><strong>Table Number:</strong> ${table}</p>
                <p><strong>Guests:</strong> ${guests}</p>
                <div class="reservation-actions">
                    <button class="btn btn-confirm">Confirm</button>
                    <button class="btn btn-cancel">Cancel</button>
                </div>
            `;

            // Append the new reservation to the reservation list
            reservationList.appendChild(reservationCard);

            // Add functionality for the "Confirm" button
            const confirmButton = reservationCard.querySelector('.btn-confirm');
            confirmButton.addEventListener('click', () => {
                const confirmationMessage = reservationCard.querySelector('h3');
                confirmationMessage.textContent = 'Reservation Confirmed';
                confirmButton.disabled = true;  // Disable the button after confirming
                confirmButton.style.backgroundColor = '#2ecc71';  // Change button color to green
            });

            // Add functionality for the "Cancel" button
            const cancelButton = reservationCard.querySelector('.btn-cancel');
            cancelButton.addEventListener('click', () => {
                reservationList.removeChild(reservationCard);  // Remove the reservation card
            });

            // Reset the form after adding the reservation
            document.getElementById('reservationForm').reset();
        }
    </script>

</body>
</html>

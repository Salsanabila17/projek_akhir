<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CC Restaurant</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    /* Body styling */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #000; /* Black background */
      color: #fff; /* White text */
    }

    /* Main container */
    .container {
      text-align: center;
      max-width: 1200px;
      padding: 20px;
    }

    /* Heading Styling */
    h1 {
      font-size: 3rem;
      color: #fff; /* White text */
      margin-bottom: 30px;
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff; /* White glow */
    }

    /* User options section styling */
    .user-options {
      margin-top: 50px;
    }

    .user-options p {
      font-size: 1.2rem;
      margin-top: 20px;
      color: #fff; /* White text for paragraph */
    }

    /* Button styling */
    .btn {
      display: inline-block;
      padding: 16px 35px;
      margin: 15px;
      background: #fff; /* White background */
      color: #000; /* Black text */
      font-size: 1.2rem;
      font-weight: bold;
      text-decoration: none;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5), 0 0 25px rgba(255, 255, 255, 0.5); /* White shadow */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-shadow: 0 0 10px #000, 0 0 20px #000; /* Black text shadow */
    }

    /* Button hover effect */
    .btn:hover {
      background: #000; /* Black background on hover */
      color: #fff; /* White text on hover */
      transform: translateY(-3px);
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.7), 0 0 35px rgba(0, 0, 0, 0.7); /* Glow effect on hover */
      text-shadow: 0 0 20px #fff, 0 0 30px #fff; /* White glow on hover */
    }

    /* Link styling inside paragraph */
    .user-options a {
      color: #fff; /* White text for links */
      text-decoration: none;
      font-weight: bold;
      text-shadow: 0 0 5px #fff; /* White shadow */
    }

    .user-options a:hover {
      text-decoration: underline;
      text-shadow: 0 0 10px #fff, 0 0 20px #fff; /* White glow on hover */
    }

    /* Media Query for Mobile */
    @media screen and (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
      }
      .btn {
        padding: 12px 28px;
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to CC Restaurant</h1>
    <div class="user-options">
      
      <!-- Updated buttons with black and white colors -->
      <a href="user/user_register.php" class="btn">Register as Guest</a>
      <a href="user/user_login.php" class="btn">Login as Guest</a>
      <p>Are you an admin? <a href="admin/admin_login.php">Click here to Login as Admin</a></p>
    </div>
  </div>
</body>
</html>

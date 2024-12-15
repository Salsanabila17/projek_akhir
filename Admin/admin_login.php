<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glow in the Dark Login</title>
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
      background-color: #0d0d0d;
      color: #fff;
    }

    /* Login container */
    .login-container {
      width: 300px;
      padding: 30px;
      background-color: #1a1a1a;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(0, 255, 255, 0.2), 0 0 30px rgba(0, 255, 255, 0.4);
      text-align: center;
    }

    /* Title */
    .login-container h2 {
      margin-bottom: 20px;
    }

    /* Input fields */
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background: #333;
      border: none;
      outline: none;
      color: #fff;
      border-radius: 5px;
      font-size: 1em;
    }

    /* Submit button */
    .login-container button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #00ccff;
      border: none;
      color: #000;
      font-weight: bold;
      font-size: 1em;
      cursor: pointer;
      border-radius: 5px;
      transition: box-shadow 0.3s ease;
    }

    /* Glow effect on button */
    .login-container button:hover {
      box-shadow: 0 0 5px #00ccff, 0 0 15px #00ccff, 0 0 20px #00ccff;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <!-- Form submits to the same PHP page -->
    <form action="admin_dashboard.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">SUBMIT</button>
    </form>
  </div>

  <?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check credentials
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin'] = true;
            header('Location: admin_dashboard.php');
            exit(); // Don't forget to call exit() after the header redirection
        } else {
            echo "<script>alert('Invalid username or password.');</script>";
        }
    }
  ?>
</body>
</html>

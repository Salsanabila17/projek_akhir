<?php
// Mulai sesi
session_start();

// Koneksi ke database
$host = 'localhost'; // Ganti sesuai dengan konfigurasi database Anda
$dbname = 'restaurant_db'; // Ganti sesuai dengan nama database Anda
$username = 'root'; // Ganti sesuai dengan username database Anda
$password = ''; // Ganti sesuai dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $inputUsername);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validasi user dan password
    if ($user && password_verify($inputPassword, $user['password'])) {
        // Simpan informasi pengguna di sesi
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
        ];
        
        // Redirect ke dashboard pengguna setelah login berhasil
        header("Location: user_dashboard.php");
        exit;
    } else {
        // Jika username atau password salah
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #2a2a3d);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #0df0f0;
            text-shadow: 0px 0px 10px #0df0f0, 0px 0px 20px #0df0f0;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #dcdcdc;
            text-align: left;
            display: block;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid #3a3a5c;
            border-radius: 10px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #0df0f0;
            box-shadow: 0px 0px 10px #0df0f0;
            outline: none;
        }

        .btn-primary {
            background: #0df0f0;
            border: none;
            padding: 10px 15px;
            border-radius: 10px;
            color: #121212;
            font-weight: bold;
            transition: all 0.3s ease;
            text-shadow: 0px 0px 10px #0df0f0;
            box-shadow: 0px 0px 15px #0df0f0;
        }

        .btn-primary:hover {
            background: #0bbdbd;
            box-shadow: 0px 0px 20px #0df0f0;
        }

        a {
            color: #0df0f0;
            text-decoration: none;
        }

        a:hover {
            color: #0bbdbd;
            text-decoration: underline;
        }

        .alert-danger {
            background-color: #440000;
            border: 1px solid #ff4c4c;
            color: #ff4c4c;
            text-shadow: 0px 0px 10px #ff4c4c;
        }

        .alert-success {
            background-color: #004400;
            border: 1px solid #4cff4c;
            color: #4cff4c;
            text-shadow: 0px 0px 10px #4cff4c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Pengguna</h2>
        <p>Silakan login untuk mengakses akun Anda.</p>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="mt-3 text-center">
            <p>Belum punya akun? <a href="user_register.php">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>

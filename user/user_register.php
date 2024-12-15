<?php
session_start();
include('../db.php');

// Proses registrasi saat form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password sebelum menyimpan ke database
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Cek apakah username atau email sudah ada
    $check_sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username atau Email sudah terdaftar!";
    } else {
        // Simpan user baru ke database
        $insert_sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, 'user')";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        if ($stmt->execute()) {
            // Setelah registrasi berhasil, redirect ke halaman login
            header("Location: user_login.php"); 
            exit(); // Pastikan eksekusi dihentikan setelah redirect
        } else {
            $error = "Terjadi kesalahan saat registrasi. Silakan coba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>
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

        .register-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        .register-container h2 {
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
    <div class="register-container">
        <h2>Register</h2>
        <p>Silakan isi data Anda untuk membuat akun.</p>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php elseif (isset($success)): ?>
            <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <div class="mt-3 text-center">
            <p>Sudah punya akun? <a href="user_login.php">Login di sini</a></p>
        </div>
    </div>
</body>
</html>

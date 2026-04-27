<?php
include 'koneksi.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $confirm = mysqli_real_escape_string($koneksi, $_POST['confirm']);

    // Validasi
    if ($password !== $confirm) {
        $error = "Password dan konfirmasi tidak sama.";
    } else {
        // Cek username/email sudah ada
        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' OR email='$email'");
        if (mysqli_num_rows($cek) > 0) {
            $error = "Username atau Email sudah terdaftar.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = mysqli_query($koneksi, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')");
            if ($insert) {
                $success = "Pendaftaran berhasil! Silakan login.";
            } else {
                $error = "Terjadi kesalahan saat menyimpan data.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/Logo.png" type="image/x-icon">
    <title>Register</title>
    <style>
        body {
            background: linear-gradient(to right, rgba(255, 248, 220, 0.9), rgba(252, 228, 109, 0.9)),
                        url('image/foto4.jpg') no-repeat center center fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-box {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 450px;
        }

        .register-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: goldenrod;
        }

        .register-box input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-box button {
            width: 100%;
            padding: 12px;
            background-color: goldenrod;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .register-box button:hover {
            background-color: darkgoldenrod;
        }

        .error, .success {
            text-align: center;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .error { color: red; }
        .success { color: green; }

        .register-box p {
            text-align: center;
            font-size: 0.9em;
        }

        .register-box a {
            color: goldenrod;
            text-decoration: none;
        }

        .register-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form class="register-box" method="POST">
        <h2>Register</h2>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm" placeholder="Konfirmasi Password" required>

        <button type="submit">Daftar</button>

        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </form>
</body>
</html>

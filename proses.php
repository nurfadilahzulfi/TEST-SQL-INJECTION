<?php
// Mulai session
session_start();

// Konfigurasi database
$host = 'localhost';
$db_username = 'root';
$db_password = '';
$database = 'test';

// Koneksi database
$koneksi = mysqli_connect($host, $db_username, $db_password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah form disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form tanpa sanitasi
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa username dan password langsung disisipkan tanpa perlindungan
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    // Periksa username dan password
    if ($user) {
        // Login berhasil
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Username atau password salah
        $error = "Username atau password salah!";
    }

    // Tutup koneksi
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proses Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }
        .error-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
        }
        .error-message {
            color: red;
            margin-bottom: 20px;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <?php if (isset($error)): ?>
            <h2>Login Gagal</h2>
            <p class="error-message"><?php echo $error; ?></p>
            <a href="login1.php" class="back-btn">Kembali ke Login</a>
        <?php endif;?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        a.button {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #45a049;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Selamat Datang!</h1>
        <p>Anda telah berhasil masuk ke halaman dashboard.</p>
        <div class="button-container">
            <a href="#" class="button">Profil</a>
            <a href="#" class="button">Pengaturan</a>
            <a href="login1.php" class="button">Logout</a>
        </div>
        <div class="footer">
            <p>&copy; 2024 Miftahul Jannah. Semua Hak Dilindungi.</p>
        </div>
    </div>
</body>
</html>

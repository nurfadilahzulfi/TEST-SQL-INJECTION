<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #333;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #4CAF50;
            font-size: 24px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .footer {
            margin-top: 10px;
            font-size: 12px;
            color: #666;
        }

        .footer a {
            color: #2575fc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="proses.php" method="post">
            <h2>Login</h2>
            <label for="name">Username</label>
            <input id="name" name="username" placeholder="Enter your username" type="text" required>

            <label for="password">Password</label>
            <input id="password" name="password" placeholder="********" type="password" required>

            <input type="submit" name="submit" id="submit" value="Login">
        </form>
        <div class="footer">
            <p>Belum punya akun? <a href="#">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>

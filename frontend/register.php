<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background: linear-gradient(120deg, #43cea2, #185a9d);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .register-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            width: 370px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .register-container h2 {
            margin-bottom: 24px;
            color: #185a9d;
        }
        .register-container input[type="text"],
        .register-container input[type="password"],
        .register-container input[type="email"] {
            width: 100%;
            padding: 12px 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .register-container button {
            width: 100%;
            padding: 12px;
            background: #185a9d;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .register-container button:hover {
            background: #1570b7;
        }
        .register-container .login-link {
            margin-top: 18px;
            font-size: 14px;
        }
        .register-container .login-link a {
            color: #185a9d;
            text-decoration: none;
        }
        .register-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form class="register-container" method="post" action="">
        <h2>Register</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </form>
</body>
</html>

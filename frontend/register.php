<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #43cea2, #185a9d);
            min-height: 100vh;
        }
        .register-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 40px 30px;
        }
    </style>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <form class="register-container w-100" style="max-width: 400px;" method="post" action="">
            <h2 class="mb-4 text-center text-primary">Register</h2>
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
            <div class="login-link mt-3 text-center">
                Already have an account? <a href="login.php" class="text-primary">Login</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS (optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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

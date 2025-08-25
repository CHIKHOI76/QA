
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		body {
			background: linear-gradient(120deg, #2980b9, #6dd5fa);
			height: 100vh;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}
		.login-container {
			background: #fff;
			padding: 40px 30px;
			border-radius: 12px;
			box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
			width: 350px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		.login-container h2 {
			margin-bottom: 24px;
			color: #2980b9;
		}
		.login-container input[type="text"],
		.login-container input[type="password"] {
			width: 100%;
			padding: 12px 10px;
			margin: 10px 0 20px 0;
			border: 1px solid #ccc;
			border-radius: 6px;
			font-size: 16px;
		}
		.login-container button {
			width: 100%;
			padding: 12px;
			background: #2980b9;
			color: #fff;
			border: none;
			border-radius: 6px;
			font-size: 16px;
			cursor: pointer;
			transition: background 0.2s;
		}
		.login-container button:hover {
			background: #2573a6;
		}
		.login-container .register-link {
			margin-top: 18px;
			font-size: 14px;
		}
		.login-container .register-link a {
			color: #2980b9;
			text-decoration: none;
		}
		.login-container .register-link a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<form class="login-container" method="post" action="">
		<h2>Login</h2>
		<input type="text" name="username" placeholder="Username" required>
		<input type="password" name="password" placeholder="Password" required>
		<button type="submit">Login</button>
		<div class="register-link">
			Don't have an account? <a href="#">Register</a>
		</div>
	</form>
</body>
</html>

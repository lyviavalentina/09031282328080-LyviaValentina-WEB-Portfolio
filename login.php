<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        header("Location: portofolio.php"); 
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Via's Website</title>
    <style>
        @font-face {
            font-family: 'Sweet Sans Heavy';
            src: url('SweetSansProHeavy.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            background: url('bg.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            font-family: 'Sweet Sans Heavy';
            text-align: center; 
            margin-bottom: 20px;
        }
        .login-container {
            background: white;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .input-group {
            font-family: Arial;
            margin-bottom: 15px;
        }
        .input-group label {
            font-size: 14px;
            color: #333;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-group input:focus {
            border-color: #007BFF;
        }
        .btn {
            font-family: Arial;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter Username..." required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password..." required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
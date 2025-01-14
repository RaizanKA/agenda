<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;

    if($username == '' ){
        $error = "Username $username tidak tersedia";
    }else if ($password == ''){
        $error = "password tidak sesuai";
    } 

    if(empty($error)){
        $_SESSION['username'] = $username;
        $query = mysqli_query($koneksi,"SELECT * FROM user where username = '$username'");
        $level = mysqli_fetch_array($query);
        if($level['level'] == "siswa"){
            header('Location: dashboardSiswa.php');
        }else if($level['level'] == "admin"){
            header('Location: dashboard.php');
        } else{
            header('Location: login.php');
        }
    }



}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: #d9534f;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 30%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>

            <input type="submit" value="Login">
        </form>
    </div>

    <script>

        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.querySelector('.toggle-password');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "🙈";  
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "👁️";  
            }
        }
    </script>

</body>
</html>

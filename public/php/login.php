<?php
include "config/database.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class action="/views/assets/login.php" method="post">
            <label for="">E-mail</label>
            <input type="email" name="email" required>

            <label for="">Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Sign In</button>
        </form>
    </div>
</body>
</html>
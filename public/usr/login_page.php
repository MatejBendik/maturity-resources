<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maturita 2021</title>

    <link rel="stylesheet" href="../../src/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <div class="main">
        <img class="img" src="../../src/img/login_background_1.jpg" alt="login">
        <div class="formular">
            <form action="login_page.php" method="post">
                <h1>Login with your Nickname and Password</h1>
                <div class="password">
                    <input type="text" name="Nickname" placeholder="Nickname" required>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="Password" required id="password">
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword()"></i>
                    </div>
                    <div class="remember_me">
                        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
            <!--  <a class="signup" href="usr/signup_page.php">or Sign up</a> -->
        </div>
    </div>

    <script src="../../src/js/script.js?<?php echo time(); ?>"></script>
</body>

</html>
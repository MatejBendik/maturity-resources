<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maturita 2021</title>

    <link rel="stylesheet" href="../../src/css/login.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <div class="main">
        <img class="img" src="../../src/img/login_background_1.jpg" alt="login">
        <div class="formular">
            <form action="../../src/utils/login_validation.php" method="post">
                <h1>Login with your Nickname and Password</h1>
                <div class="password">
                    <input type="text" name="nickname" placeholder="Nickname" required>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="Password" required id="password">
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword()"></i>
                    </div>
                    <div class="remember_me">
                        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
                    </div>
                </div>
                <button name="submit" type="submit">Login</button>
            </form>
            <?php

            if(isset($_GET["error"])){
                if(!empty($_GET["error" == "wrongLogin"])){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> Incorrect login information ! </p>";
                }           
            }
            
            ?>

            <p class="notice">Not registered yet ?</p><br>
            <a class="register" href="signup_page.php">Create an Account</a>
        </div>
    </div>

    <script src="../../src/js/script.js?<?php echo time(); ?>"></script>
</body>

</html>
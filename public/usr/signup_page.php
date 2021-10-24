<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Maturita 2021</title>

    <link rel="stylesheet" href="../../src/css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <div class="main">
        <img class="img" src="../../src/img/login_background_1.jpg" alt="login">
        <div class="formular">
            <form action="signup_page.php" method="post">
                <h1>Registration to our page</h1>
                <div class="password">
                    <input type="text" name="firstame" placeholder="First name" required>
                    <input type="text" name="lastname" placeholder="Last name" required>
                    <input type="text" name="nickname" placeholder="Nickname" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="Password" required id="password1">
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword1()"></i> 
                    </div>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="Repeat your password" required id="password2" >
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword2()"></i> 
                    </div>
                  
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <script src="../../src/js/signup_page_script.js?<?php echo time(); ?>"></script>
</body>

</html>
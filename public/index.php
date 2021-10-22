<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maturita 2021</title>

    <link rel="stylesheet" href="../src/css/password.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <div class="main">
        <img class="img" src="../src/img/background.png">
        <div class="formular">
            <form action="index.php" method="post">
                <h1>Login into well of knowledge</h1>
                <div class="password">
                    <input type="password" name="password" placeholder="Password" required> <i class="far fa-eye" id="togglePassword"></i>
                </div>
                <button type="submit">Sign in</button>
            </form>
            <a class="signup" href="usr/signup_page.php">or Sign up</a>
        </div>
    </div>
</body>

</html>
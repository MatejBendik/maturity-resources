
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
            <form action="../../src/utils/register_validation.php" method="post">
                <h1>Registration to our page</h1>
                <div class="password">
                    <input type="text" name="firstname" placeholder="First name" required>
                    <input type="text" name="lastname" placeholder="Last name" required>
                    <input type="text" name="nickname" placeholder="Nickname" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="Password" required id="password1">
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword1()"></i> 
                    </div>
                    <div class="password_input">
                        <input type="password" name="passwordRepeat" placeholder="Repeat your password" required id="password2" >
                        <i class="far fa-eye" id="togglePassword" onclick="showHidePassword2()"></i> 
                    </div>
                  
                </div>
                <button type="submit" name="submit">Register</button>
            </form>
            <?php 
            
            // $_GET preto lebo tu bereme data z url ktore mozeme vidiet, a nas zaujima error message
            if(isset($_GET["error"])){
                if(!empty($_GET["error" == "invalidNickname"])){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> Your name contains forbidden characters ! </p>";
                }elseif($_GET["error"] == "passwordsDontMatch"){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> Your passwords dont match ! </p>";
                }elseif($_GET["error"] == "nicknameTaken"){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> The nickname is already taken ! </p>";
                } elseif($_GET["error"] == "stmtFailed"){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> Something went wrong ! </p>"; 
                } elseif($_GET["error"] == "none"){
                    echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 8px; width: 300px; margin-left: 7%; margin-bottom:40px; margin-top:30px;'> Congratulations you registered correctly ! </p>"; 
                }
            }
            
            
            ?>
        </div>
    </div>

    <script src="../../src/js/signup_page_script.js?<?php echo time(); ?>"></script>
</body>

</html>
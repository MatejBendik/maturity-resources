<?php 

include "../src/utils/pwd_validation.php";

?>

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
                    <input type="password" name="password" placeholder="Password" required id="password"> 
                    <i class="far fa-eye" id="togglePassword" onclick="showHidePassword()"></i>
                </div>
                <button name="submit" type="submit">Continue</button>
            </form>
        <!--  <a class="signup" href="usr/signup_page.php">or Sign up</a> -->
                <?php
                    
                    if(isset($_POST["submit"])){
                        $userInput = $_POST['password'];
                        if($userInput == $password[0]){
                            header("location: usr/login_page.php");
                        }else{
                            /* header("location: /maturity-resources/public/index.php?error=wrongPassword"); */
                            echo "<p class='warning' style='color:white; text-align:center; font-size: 1rem; background-color: rgba(165, 161, 161, 0.65); border-radius: 60px; padding: 5px 0 5px 0; width: 250px; margin-left: 15%; '> Wrong password ! </p>";
                        }
                    } 
                ?>
        </div>
    </div>

    <script src="../src/js/script.js?<?php echo time(); ?>"></script>
</body>

</html>
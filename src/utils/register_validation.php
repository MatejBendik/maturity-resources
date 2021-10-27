<?php 

// podmienka - ak je tlacidlo submit stlacene vykona sa blok prikazov ktory je v nej

if(isset($_POST["submit"])){
    
    // bereme udaje od uzivatela ktore zadal v register formulare a ukladame ich do premennych

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $nickName = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    // require_oncle znamena ze to pouzijeme iba raz a to prave v tejto podmienke

    require_once "db_handler.php";
    require_once "functions.php";


    // Error handling 
    
    // vsetky pouzite funkcie returnu bud true alebo false 


    // zle zadane meno
    if(invalidNickname($nickName) !== false){
        header("location: ../../maturity-resources/public/usr/signup_page.php?error=invalidNickname"); // toto je vypis v url prehliadaci
        exit();
    }

    // hesla sa nezhoduju
    if(passwordMatch($password, $passwordRepeat)!== false){
        header("location: ../../maturity-resources/public/usr/signup_page.php?error=passwordsDontMatch"); // toto je vypis v url prehliadaci
        exit();
    }

    // nickname uz exituje v databaze
    if(nicknameExists($conn, $nickName, $email)!== false){
        header("location: /../../maturity-resources/public/usr/signup_page.php?error=nicknameTaken"); // toto je vypis v url prehliadaci
        exit();
    }

    createUser($conn, $firstName, $lastName, $nickName, $email, $password);


} else{
    header("location: ../../maturity-resources/public/usr/signup_page.php");
}

?>
<?php 

if(isset($_POST["submit"])){

    $nickName = $_POST["nickname"];
    $password = $_POST["password"];

    require_once "db_handler.php";
    require_once "functions.php";

    loginUser($conn,$nickName,$password);

} else{
    header("location: ../../maturity-resources/public/usr/login_page.php"); // toto je vypis v url prehliadaci
    exit();
}


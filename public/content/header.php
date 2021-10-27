<?php 

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Príprava Na Maturity</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/anim.css?<?php echo time();?>">
    <link rel="stylesheet" href="../../src/css/main.css?<?php echo time();?>">

</head>
<body>
    <div class ="header">

        <div class ="d-flex justify-content-center">
            <img class="logo_header" src="../../src/img/logo_header.png" alt="logo">
        </div>
        <div class ="d-flex justify-content-center">
            <div style="border-color: rgb(55,55,55);" class="logo_button">Les crew</div>
        </div>
        
        <div class ="d-flex justify-content-center">
            <div class="line_header"></div>
        </div>
        
        <div class="header_nav d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="#">DOMOV<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PREDMETY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PROJEKTY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MATERIÁLY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAKT</a>
                        </li> 
                        <?php 
                            if(isset($_SESSION["userNickname"])) {
                                echo '<li class="nav-item"><a class="nav-link" href="#" style="text-transform: uppercase;">' . $_SESSION['userNickname'] . '</a></li> ';
                                echo '<li class="nav-item"><a class="nav-link" href="../index.php">LOGOUT</a></li> ';
                            } else{

                            }                                               
                        ?>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

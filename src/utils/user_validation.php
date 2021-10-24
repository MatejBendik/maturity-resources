<?php 

include "db_handler.php";

    $db = mysqli_select_db($conn,"maturity_resources");
    $query = mysqli_query($conn, "SELECT * FROM users");

    $nickname = [];
    $password=[];

    while($row = mysqli_fetch_array($query)){
        $nickname[] = $row['nickname'];
        $password[] = $row['password'];
    }


?>
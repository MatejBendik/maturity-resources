<?php 

include "db_handler.php";

    $db = mysqli_select_db($conn,"maturity_resources");
    $query = mysqli_query($conn, "SELECT * FROM secret");

    $password=[];

    while($row = mysqli_fetch_array($query)){
        $password[] = $row['password'];
    }


?>
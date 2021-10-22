<?php

function emptyInputSignup($name,$surname,$email,$pwd,$pwdRepeat){
    $result;
    if(empty($name) || empty($surname) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;

    } else{
        $result = false;
    }

    return $result;
}



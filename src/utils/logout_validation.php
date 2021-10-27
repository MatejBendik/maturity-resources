<?php

session_start();
session_unset();
session_destroy();


header("location: ../../maturity-resources/public/index.php"); // toto je vypis v url prehliadaci
exit();

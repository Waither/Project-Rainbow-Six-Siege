<?php
    session_start();
    if(isset($_SESSION["logowanie"])) {
        unset($_SESSION["logowanie"]);
    }
    $sesja=session_destroy();
    header("location:index.php");
    exit();
?>
<?php
    $username = $_POST["username"];
    $tel = $_POST["tel"];
    $message = $_POST["msg"];

    if (empty($username)) {
        echo "Вы не указали своё имя";
    } else  {
        echo $username . "\br";
        echo $tel . "\br";
        echo $msg . "\br";


    }

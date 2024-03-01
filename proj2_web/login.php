<?php

    require_once "index.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    session_start();
    $_SESSION["user_name"] = $_POST["nome"];

    echo "<br>Seja bem vindo     ".$_SESSION["user_name"];


    }else{
        echo "Requisição Invalida";
    }
?>

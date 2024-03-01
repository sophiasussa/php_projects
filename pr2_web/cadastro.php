<?php

    require_once "usuario.php";

    $usuario = new Usuario();
    $usuario->nome=$_POST["nome"];
    $usuario->email=$_POST["email"];
    $usuario->idade=$_POST["idade"];

    session_start();
    if(isset($_SESSION["user_name"])){
        echo "Variável existe!<br>";
        echo "<br>". $_SESSION["user_name"] ."<br>";
    }else{
        echo "Varável não existe!<br>";
        $_SESSION["user_name"] = $usuario->nome;
        echo "Variável criada => ". $_SESSION["user_name"];
    }

    echo "Usuário Cadastrado!<br>";

    $usuario->mostrar();

?>
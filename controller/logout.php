<?php
    session_start();    
    unset(
    	$_SESSION['status'],
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioAvatar'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha']
    );    
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: ../pages/login.html");
?>


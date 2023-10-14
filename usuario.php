<?php
include("conexao.php");
if(isset($_POST['login']) && strlen($_POST['login']) > 0){

    if(!isset($_SESSION))
        session_start();

    $_SESSION['login']  = $mysql->escape_string($_POST['login']);
    $_SESSION['senha']  = md5(md5($_POST['senha']));
    
    $sql_code = "SELECT senha, sla, FROM usuario WHERE sla = '$_SESSION[login]'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;
    

    if($total == 0){
        $erro[] = "Esse login não esta cadastrado no sistema.";
        }else{

            if($dado['senha'] == $_SESSION['senha']){

                $_SESSION['usuario'] = $dado['login'];

            }else{
                $erro[] = "Senha Incorreta.";
            }
        }
}   

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" media="screen and (min-width: 900px)" href="css/usuario.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Área do Cliente</title>
    
</head>
<body>
    <section>
        <article id="fade" class="hide"></article>
        <article id="modal" class="hide">
            <article class="modal-header">
                <h2 id="mensagem"></h2>
                <button id="fechar-modal"> Fechar </button>
            </article>    
        <article>
    </section>
    <a href="index.html"><img class="logo-user" src="assets/img/logos/Honda-Civic-Logo-1987.png"
            alt="logotelecall" /></a>
    <main class="container" id="container">


        <section class="form-container sign-up-container">

            <form action="#">
                <h1 class="titulo">Crie sua conta</h1>
                <section class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </section>
                <span>ou use seu email para cadastrar-se</span>
                <a href="cadastro.html" class="button-form">Cadastre-se</a>
            </form>
        </section>
        <section class="form-container sign-in-container">



            <form id="user_name">
                <h1 class="titulo">Área do Cliente</h1>
                <section class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </section>
                <span>ou use sua conta</span>
                <label for="text">CPF</label>
                <input type="text" id="cpf" placeholder="CPF" class="entradas"/>
                <label for="text"> Senha</label>
                <input class="pass entradas" id="pass" type="password" placeholder="Senha" required />
                <img src="assets/img/carossel/eye.png" id="olho" class="olho">
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
                <button id="button-login" class="button-form">Login</button>
            </form>
        </section>
        <section class="overlay-container">
            <section class="overlay">
                <section class="overlay-panel overlay-left">
                    <h1 class="titulo">Bem vindo de volta!</h1>
                    <p class="text">Já é um cliente? Faça seu Login </p>
                    <button class="ghost" id="Login">Login</button>
                </section>
                <section class="overlay-panel overlay-right">
                    <h1 class="titulo">Olá, amigo!</h1>
                    <p class="text">Não é cliente? Crie sua conta </p>
                    <button class="ghost" id="Cadastro">Cadastre-se</button>
                </section>
            </section>
        </section>

    </main>
    <script src="js/transitionForm.js"></script>
    <script src="js/logar.js"></script>
</body>

</html>
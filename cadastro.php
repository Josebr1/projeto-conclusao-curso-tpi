<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Import style-->
    <link type="text/css" rel="stylesheet" href="css/styles.css" media="screen,projection"/>

    <!--Import material-->
    <link rel="stylesheet" href="material/material.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body class="background-login">

<div class="voltar-tela-principal">
    <a href="#"><i class="material-icons" style="font-size: 60px;" id="tt4">keyboard_arrow_left</i></a>
    <div class="mdl-tooltip" for="tt4">
        Voltar para tela inicial
    </div>
</div>

<div class="panel-login mdl-cell--2-col">

    <div>
        <h4 align="center">Cadastre-se, é rápido!</h4>
        <p align="center">Já é um aluno? Faça o <a href="login.php">login</a> agora mesmo</p>
    </div>

    <form action="#">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="femail">
            <label class="mdl-textfield__label" for="femail">Nome completo</label>
        </div>

        <br/>

        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="email" id="fname">
            <label class="mdl-textfield__label" for="fname">E-Mail</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenha">
            <label class="mdl-textfield__label" for="fsenha">Senha</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaRep">
            <label class="mdl-textfield__label" for="fsenhaRep">Repita a senha</label>
        </div>

        <br/>

        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-cell--12-col">
            Login
        </button>
    </form>
</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>
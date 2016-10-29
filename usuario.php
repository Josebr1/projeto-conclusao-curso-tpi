<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu do usuário</title>

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

<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"> <?php
                                                session_start();
                                                if(!isset($_SESSION["usuario"])){
                                                    header("Location:login.php");#retorna para a tela main
                                                } else {
                                                    echo $_SESSION["usuario"];
                                                }
                                            ?>
            </span>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Home</a>
            <a href="#scroll-tab-2" class="mdl-layout__tab">MEUS CURSOS</a>
            <a href="#scroll-tab-3" class="mdl-layout__tab">ALTERAR DADOS PESSOAIS</a>
            <a href="#scroll-tab-4" class="mdl-layout__tab">ALTERAR SENHA</a>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Pão Code</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Home Site</a>
            <a class="mdl-navigation__link" href="">Cursos</a>
            <a class="mdl-navigation__link" href="">Dados pessoais</a>
            <a class="mdl-navigation__link" href="login.php">Sair</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-2">
            <div class="page-content"><iframe style="width:100%; height:100%; position: absolute" src="http://www.w3schools.com/tags/tag_iframe.asp" frameborder="no"></iframe></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-3">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-4">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
    </main>
</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>
</body>
</html>
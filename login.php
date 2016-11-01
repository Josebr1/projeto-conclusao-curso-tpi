<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Import style-->
    <link type="text/css" rel="stylesheet" href="css/styles.css" media="screen,projection"/>

    <!--Import material-->
    <link rel="stylesheet" href="material/material.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <?php       
        session_start();
        session_destroy();  
        $email = isset($_GET['email'])?$_GET['email']:'';
        include("validarLogin.php");                
    ?>

</head>



<body class="background-login">
</script>
<div class="voltar-tela-principal">
    <a href="#"><i class="material-icons" style="font-size: 60px;" id="tt4">keyboard_arrow_left</i></a>
    <div class="mdl-tooltip" for="tt4">
        Voltar para tela inicial
    </div>
</div>

<div class="panel-login mdl-cell--2-col">

    <div>
        <h1 align="center"><img src="img/img200.gif" class="center-img-login mdl-cell--9-col"></h1>
    </div>


    <form action="?logar&email=<?php echo $email ?>" method="POST">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="email" id="femail" name="femail" required="true" value="<?php if (isset($_GET['email'])) {
                echo $_GET['email'];
            }?>">
            <label class="mdl-textfield__label" for="femail">E-Mail</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenha" name="fsenha" required="true">
            <label class="mdl-textfield__label" for="fsenha">Senha</label>
        </div>
        <br />

        <div>
            <p align="center">Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>

        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
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
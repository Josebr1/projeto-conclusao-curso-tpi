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

    <!--JQuery e script php para incluir a validação do cadastro-->
    <script type="text/javascript" src="js/jquery-3.1.1.js"> </script>

    <?php        
        session_start();
        session_destroy();   
        include("validarCadastro.php");
    ?>

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

    <form action="?cadastrar=true" method="post">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" name="fname" type="text" id="femail" required="true" pattern="[a-zA-Z\s]{3,40}$" title="O nome deve conter: no mínimo 3 caracteres; no máximo 40 caracteres; apenas letras.">
            <label class="mdl-textfield__label" for="femail">Nome completo</label>
        </div>

        <br/>

        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" name="femail" type="email" id="fname" required="true" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
            <label class="mdl-textfield__label" for="fname">E-Mail</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input"  name="fsenha" type="password" id="fsenha" required="true" title="O senha deve conter: no mínimo 8 caracteres; no máximo 28 caracteres; apenas letras e números." pattern="[a-zA-Z0-9]{8,28}$">
            <label class="mdl-textfield__label" for="fsenha">Senha</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input"  name="fsenhaRep" type="password" id="fsenhaRep" required="true" title="O senha deve conter: no mínimo 8 caracteres; no máximo 28 caracteres; apenas letras e números." pattern="[a-zA-Z0-9]{8,28}$">
            <label class="mdl-textfield__label" for="fsenhaRep">Repita a senha</label>
        </div>

        <br/>

        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="width: 100%" title="click para se cadastrar" id="btLogin">
            Login
        </button>
    </form>
</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>
<script>
    /*Este script verifica se os campos senha e confirmar senha são iguais.
    * Se sim, aparece o icone "done". Se não, aparece o icone "clear" e desabilita o botão de "login".
    * A verificação é feita a cada tecla solta.
    */
        function certo() {            
            $('#btLogin').prop('disabled', false);
            $('#btLogin').attr('title', 'click para se cadastrar');
        }
        function errado() {
            $('#btLogin').prop('disabled', true);
            $('#btLogin').attr('title', 'senhas não correspondem');         
        }
        function verificaIgualdade() {
            if(($('#fsenha').val() != "") || ($('#fsenhaRep').val() != "")){
                if(($('#fsenhaRep').val() != $('#fsenha').val())) {
                    errado();
                } else {
                    certo();
                } 
            } 
        }
        
        $('#fsenhaRep').keyup(function() {
           verificaIgualdade();
        });      
        $('#fsenha').keyup(function() {
            verificaIgualdade();
        });  
        /*Dois keydown para desativar botão pois sem eles mesmo com senhas incompatíveis era possível cadastrar*/
        $('#fsenhaRep').keydown(function() {
           errado();
        });      
        $('#fsenha').keydown(function() {
           errado();
        });           
    </script>

</body>
</html>
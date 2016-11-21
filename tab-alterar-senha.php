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

    <script type="text/javascript" src="js/jquery-3.1.1.js"> </script>

    <?php
        include("alterarSenha.php");
    ?>

</head>
<body style="background: #ffffff;">

<div class="panel-container">

    <div class="user-container">
        <table>
            <tr>
                <td><h4>Alterar senha</h4></td>
            </tr>
            <tr>
                <td><p>Fique sempre à vontade para alterar a sua senha. Segurança é tudo! Por isso utilizamos as melhores práticas do mercado para criptografia de senhas.</p></td>
            </tr>
        </table>

    </div>
</div>

<hr>

<div class="panel-login mdl-cell--2-col">
    <form action="?alterado=true" method="post">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaAtinga" name="senhaAntiga" required="true" title="O senha deve conter: no mínimo 8 caracteres; no máximo 28 caracteres; apenas letras e números." pattern="[a-zA-Z0-9]{8,28}$">
            <label class="mdl-textfield__label" for="fsenhaAtinga">Senha Antiga</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaNova" name="senhaNova" required="true" title="O senha deve conter: no mínimo 8 caracteres; no máximo 28 caracteres; apenas letras e números." pattern="[a-zA-Z0-9]{8,28}$">
            <label class="mdl-textfield__label" for="fsenhaNova">Nova senha</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaNovaNovamente" name="senhaNovaRep" required="true" title="O senha deve conter: no mínimo 8 caracteres; no máximo 28 caracteres; apenas letras e números." pattern="[a-zA-Z0-9]{8,28}$">
            <label class="mdl-textfield__label" for="fsenhaNovaNovamente">Nova senha novamente</label>
        </div>

        <!-- Accent-colored raised button with ripple -->
        <button id="btAlterar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" title="click para alterar a senha">
            Salvar
        </button>
    </form>


</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>

<dir id="footer-fixed"></dir>

<script>
    /*Este script verifica se os campos senha e confirmar senha são iguais.
    * Se sim, aparece o icone "done". Se não, aparece o icone "clear" e desabilita o botão de "login".
    * A verificação é feita a cada tecla solta.
    */
        function certo() {            
            $('#btAlterar').prop('disabled', false);
            $('#btAlterar').attr('title', 'click para alterar a senha');
        }
        function errado() {
            $('#btAlterar').prop('disabled', true);
            $('#btAlterar').attr('title', 'senhas não correspondem');         
        }
        function verificaIgualdade() {
            if(($('#fsenhaNova').val() != "") || ($('#fsenhaNovaNovamente').val() != "")){
                if(($('#fsenhaNova').val() != $('#fsenhaNovaNovamente').val())) {
                    errado();
                } else {
                    certo();
                } 
            } 
        }
        
        $('#fsenhaNova').keyup(function() {
           verificaIgualdade();
        });      
        $('#fsenhaNovaNovamente').keyup(function() {
            verificaIgualdade();
        });  
        /*Dois keydown para desativar botão pois sem eles mesmo com senhas incompatíveis era possível cadastrar*/
        $('#fsenhaNova').keydown(function() {
           errado();
        });      
        $('#fsenhaNovaNovamente').keydown(function() {
           errado();
        });           
    </script>
</body>
</html>
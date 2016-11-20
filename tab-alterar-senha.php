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
    <form action="#">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaAtinga">
            <label class="mdl-textfield__label" for="fsenhaAtinga">Senha Antiga</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaNova">
            <label class="mdl-textfield__label" for="fsenhaNova">Nova senha</label>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="password" id="fsenhaNovaNovamente">
            <label class="mdl-textfield__label" for="fsenhaNovaNovamente">Nova senha novamente</label>
        </div>

        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Salvar
        </button>
    </form>


</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>

<dir id="footer-fixed"></dir>
</body>
</html>
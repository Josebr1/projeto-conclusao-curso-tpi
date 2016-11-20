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
                <td><h4>Dados pessoais</h4></td>
            </tr>
            <tr>
                <td><p>Aqui você pode manter seus dados sempre atualizados para que possamos sempre lhe atender da
                        melhor forma.</p></td>
            </tr>
        </table>

    </div>
</div>

<hr>

<div class="panel-container-dados">

    <form action="#">


    <table class="table-shadow" style="width: 100%;">
        <tr>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Nome completo</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">E-Mail</label>
                </div>
            </td>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Telefone</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1" style="margin-right: 50px">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                    <span class="mdl-radio__label">Masculino</span>
                </label>

                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                    <span class="mdl-radio__label">Feminino</span>
                </label>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" style="float: right">
                    Salvar
                </button>
            </td>
        </tr>
    </table>


    </form>
</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>

<dir id="footer-fixed"></dir>
</body>
</html>
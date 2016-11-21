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

    <?php
        include ("alterarDadosPessoais.php");
    ?>
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

    <form enctype="multipart/form-data" action="?alterado=true" method="post">


    <table class="table-shadow" style="width: 100%;">
        <tr>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input name="nome" class="mdl-textfield__input" type="text" id="sample3"  pattern="[a-zA-Z\s]{3,40}$" title="O nome deve conter: no mínimo 3 caracteres; no máximo 40 caracteres; apenas letras.">
                    <label class="mdl-textfield__label" for="sample3">Nome</label>
                </div>
            </td>
            <td> 
                <div class="file_input_div">
                    <div class="file_input">
                        <label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                            <i class="material-icons">file_upload</i>
                            <input id="file_input_file" class="none" type="file" name="imagem"/>
                        </label>
                    </div>
                    <div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo">
                        <input class="file_input_text mdl-textfield__input" type="text" disabled readonly id="file_input_text" placeholder="Avatar"  />
                        <label class="mdl-textfield__label" for="file_input_text"></label>
                    </div>
                </div>
            </td>
            <style type="text/css">
                .file_input_div {
                  margin: auto;
                  width: 100%;
                  height: 40px;
                }

                .file_input {
                  float: left;
                }

                #file_input_text_div {
                  width: 200px;
                  margin-top: -8px;
                  margin-left: 5px;
                }

                .none {
                  display: none;
                }
             </style>
             
        </tr>
        <tr>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input name="email" class="mdl-textfield__input" type="email" id="sample3" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
                    <label class="mdl-textfield__label" for="sample3">E-Mail</label>
                </div>
            </td>
            <td>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input name="tel" class="mdl-textfield__input" type="text" id="sample3" maxlength="12" minlength="10" pattern="[0-9]{10,12}$">
                    <label class="mdl-textfield__label" for="sample3">Telefone</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1" style="margin-right: 50px">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value=1 checked>
                    <span class="mdl-radio__label">Masculino</span>
                </label>

                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value=2>
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
<script type="text/javascript">
    var fileInputTextDiv = document.getElementById('file_input_text_div');
var fileInput = document.getElementById('file_input_file');
var fileInputText = document.getElementById('file_input_text');

fileInput.addEventListener('change', changeInputText);
fileInput.addEventListener('change', changeState);

function changeInputText() {
  var str = fileInput.value;
  var i;
  if (str.lastIndexOf('\\')) {
    i = str.lastIndexOf('\\') + 1;
  } else if (str.lastIndexOf('/')) {
    i = str.lastIndexOf('/') + 1;
  }
  fileInputText.value = str.slice(i, str.length);
}

function changeState() {
  if (fileInputText.value.length != 0) {
    if (!fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.add('is-focused');
    }
  } else {
    if (fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.remove('is-focused');
    }
  }
}
</script>
</body>
</html>
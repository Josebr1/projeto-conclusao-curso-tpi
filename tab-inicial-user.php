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
      session_start();
    ?>
</head>
<body style="background: #ffffff;">


<div class="panel-container">

<div class="user-container">
<table>
    <tr>
        <td> <img src="imagem.php?usuario" class="img-user" width="200" height="200"  /> </td>
        <td> <h4><?php if(!isset($_SESSION["usuario"])){ header("Location:login.php");
        } else { echo $_SESSION["usuario"];} ?>
 </h4> </td>
    </tr>
</table>

</div>
</div>

<hr>

<div class="panel-container">

<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%;">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">## Cursos ##</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td class='mdl-data-table__cell--non-numeric'><table><tr><td><img src='imagem.php?curso&curso_id=1' class='img-logo-curso' /></td><td>Curso de desenvolvimento front-end e back-end</td></tr></table></td>
      <td>Último acesso<?php if(isset($_COOKIE["UltimoAcesso"])) echo ": " . $_COOKIE["UltimoAcesso"]; else echo ""?></td>
    </tr>

  </tbody>
</table>

</div>

<!--Import jQuery before material.js-->
<script src="material/material.min.js"></script>
<!--Import js.js-->
<script type="text/javascript" src="js/js.js"></script>

<dir id="footer-fixed"></dir>
</body>
</html>
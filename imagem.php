<?php
  include 'conecta.php';
  $sql = "";
  if(isset($_GET['usuario'])){
    session_start("usuario");
    $sql = "SELECT logo FROM usuario WHERE email='". $_SESSION["email"] ."'";
  } else if(isset($_GET['curso'])) {
    $sql = "SELECT logo FROM curso WHERE Id_curso='". $_GET["curso_id"] ."'";
  }
  $result = $conexao->prepare($sql);
  $result->execute();
  $dados = $result->fetch(PDO::FETCH_OBJ);
  header("Content-type: image");
  echo $dados->logo;
?>
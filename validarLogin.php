<?php
	if(isset($_GET["logar"]) && $_GET["logar"] == true) {
		/*Estabelece conexão com o banco de dados*/
			include("conecta.php");
		/*Declaração de variáveis*/
			$emailLogin = $_POST["femail"];
			$senhaLogin = md5($_POST["fsenha"]);
			$consultaBD = null;
			$resultadoLogin = null;
			$dados = null;
		/*Fim da declaração*/
		/*Tratamento da entrada de dados*/
			$emailLogin = strtolower($emailLogin);
			$consultaBD = "SELECT nome FROM usuario WHERE email = '$emailLogin' AND senha = '$senhaLogin'";
		/*Autenticação*/
			$resultadoLogin = $conexao->prepare($consultaBD);
			if($resultadoLogin->execute()) {
				if($resultadoLogin->rowCount() > 0) {
					#echo "Autenticado com sucesso";					
					$dados = $resultadoLogin->fetch(PDO::FETCH_OBJ);
					session_start("usuario");
					$_SESSION["usuario"] = "".$dados->nome;
					$_SESSION["email"] = "".$emailLogin;
				    #setcookie("usuario", "".$dados->nome);#Cookie para salvar o nome do usuário (para usar na tela principal)
				    header("Location:menu-tabs-user.php");#redireciona para o menu principal
				} else {
					echo "<script>if(confirm('Email ou Senha incorretos')) document.location = 'login.php?email=$emailLogin';</script>";
				}
			}
		/*Fim da autenticação*/
	}
?>
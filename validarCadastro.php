<?php
	if(isset($_GET["cadastrar"])){
		/*Estabelece conexão com o banco de dados*/
			include("conecta.php");
		/*Declaração de variáveis*/
			$nomeUsuario = $_POST["fname"];
			$emailCadastro = $_POST["femail"];
			$senhaCadastro = $_POST["fsenha"];
			$insereBD = "";
			$jaCadastrado = null;
			$insere = null;
			$dados = null;
		/*Fim da declaração*/
		/*Tratando entrada de dados*/
			$emailCadastro = strtolower($emailCadastro);
			$consultaBD = "SELECT email FROM usuario WHERE email = '$emailCadastro'";
		/*Fim do tratamento*/
		/*Verifica se já está cadastrado*/
			$jaCadastrado = $conexao->prepare($consultaBD);
			if($jaCadastrado->execute()) {
				if($jaCadastrado->rowCount() > 0) {				
					$dados = $jaCadastrado->fetch(PDO::FETCH_OBJ);
					#session_start();
					#$_SESSION["email"] = $dados->email;
					setcookie("email", $emailCadastro);
				    header("Location:login.php?email=$emailCadastro");#redireciona para o login	
				} else { #Se não estiver cadastrado
					$insereBD = "INSERT INTO usuario (id_user, nome, email, senha, foto) VALUES(null, '$nomeUsuario', '$emailCadastro', '$senhaCadastro', null)";
					$insere = $conexao->prepare($insereBD);
					$insere->execute();

					/*Verifica se inseriu*/
					if($jaCadastrado->execute()) {
						if($jaCadastrado->rowCount() > 0) {				
						$dados = $jaCadastrado->fetch(PDO::FETCH_OBJ);								    
					    header("Location:login.php?email=$emailCadastro");#redireciona para o login	
						}
					}
				}
			}
	}
?>
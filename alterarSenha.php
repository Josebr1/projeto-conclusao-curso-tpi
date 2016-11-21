<?php
	

		function comparaSenha($conexao, $senhaAntiga, $email)
	{
		$verificaSenhaSQL = "SELECT senha from usuario where email='$email'";
		$verificaSenha = $conexao->prepare($verificaSenhaSQL);
		if($verificaSenha->execute()) {
			if($verificaSenha->rowCount() > 0) {				
				$senha = $verificaSenha->fetch(PDO::FETCH_OBJ);
				if($senha->senha != $senhaAntiga) {
					return false;
				} else {
					return true;
				}
			}  else {
				return false;
			}
		}   else {
				return false;
		}
	}

	if(isset($_GET["alterado"]) && $_GET["alterado"] == true){
		include("conecta.php");
		session_start();
		$senhaAntiga = md5($_POST["senhaAntiga"]);
		if(comparaSenha($conexao, $senhaAntiga, $_SESSION["email"])) {
			$senhaNova = md5($_POST["senhaNova"]);
			$update = "UPDATE usuario SET senha='$senhaNova' WHERE email='". $_SESSION["email"]."'";
			$atualizaSenha = $conexao->prepare($update);
			$atualizaSenha->execute();

			if($atualizaSenha->rowCount() > 0) {
				echo "<script>confirm('Senha atualizada!')</script>";
			} else {
				echo "<script>confirm('Erro ao mudar senha.')</script>";
			}
		}  else {
			echo "<script>confirm('Erro ao mudar senha. A senha antiga não é esta.')</script>";
		}
	}


	
?>
<?php
	if(isset($_GET["alterado"]) && $_GET["alterado"] == true) {
		include("conecta.php");
		session_start("usuario");
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["tel"];
		$sexo = $_POST["options"];
		$update = "UPDATE usuario SET sexo='$sexo'";
		if($nome != "") {
			$update .= ", nome='$nome'";
		}
		if($telefone != "") {
			$update .= ", telefone='$telefone'";
		}		
		if($email != ""){
			$update .= ", email='$email'";
		} 
		if(isset($_FILES['imagem'])){	
			$arquivo = $_FILES['imagem']['tmp_name']; 
			$tamanho = $_FILES['imagem']['size'];
			$tipo    = $_FILES['imagem']['type'];
			$allowed = array("image/gif", "image/jpg", "image/jpeg", "image/png");
if(in_array($tipo, $allowed)) {

	      	if ( $arquivo != "none")  { 
		        $fp = fopen($arquivo, "rb");
		        $conteudo = fread($fp, $tamanho);
		        $conteudo = addslashes($conteudo); 
		        fclose($fp); 
		        $update .= ", logo='$conteudo'"; 
			}
		} else {
			echo "<script>confirm('Imagem não foi atualizada: Formato inválido. Formatos permitidos: gif, jpg, jpeg e png.')</script>";
		}
		}

		$update .= " where email='". $_SESSION["email"]."'";

		$atualiza = $conexao->prepare($update);
			if($atualiza->execute()) {
				if($atualiza->rowCount() > 0) {
					if($nome != "") {
						$_SESSION["usuario"] = $nome;
					}
					if($email != ""){ 
						$_SESSION["email"] = $email;
					}

					echo "<script>confirm('Dados atualizados com sucesso! Recomendamos que atualize a página.')</script>";
				
				} else {
					echo "<script>confirm('Não atualizado. Talvez você não tenha alterado nada ou um erro ocorreu.');</script>";	
				}
			}
	}
?>
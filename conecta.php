<?php
	/*Declaração de variáveis*/
		$servidor = "localhost";
		$bancoDados = "pao_code";
		$usuario = "root";
		$senha = "";
		$conexao = null;
	/*Fim da declaração*/

	/*Conexão*/
		try {
		 	$conexao = new PDO("mysql:host=$servidor;dbname=$bancoDados", $usuario, $senha);
		 	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 } catch (PDOException $e) {
		 	echo "Erro: " . $e->getMessage();
		 } 
	/*Fim da conexão*/
?>
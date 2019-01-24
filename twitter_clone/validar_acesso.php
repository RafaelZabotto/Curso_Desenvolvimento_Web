<?php

	require_once('db_connection.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

	$objDB = new db();
	$consulta = $objDB->conecta_mysql();

	$resultado_id = mysqli_query($consulta,$sql);

	//Esta válidação serve para saber erros de sintaxe e de consulta, não de autenticação do usuário
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			echo "Usuário existe";
		}else{

			header('Location: index.php?erro=1');
		}
	}else{
		echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
	}


	//update
	//insert
	//select
	//delete


?>
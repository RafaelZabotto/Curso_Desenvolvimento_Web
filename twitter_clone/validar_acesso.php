<?php

	session_start();

	require_once('db_connection.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

	$objDB = new db();
	$consulta = $objDB->conecta_mysql();

	$resultado_id = mysqli_query($consulta,$sql);

	//Esta válidação serve para saber erros de sintaxe e de consulta, não de autenticação do usuário
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		//essa valida o usuário
		if(isset($dados_usuario['usuario'])){

			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: home.php');
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
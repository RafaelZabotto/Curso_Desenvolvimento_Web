<?php

require_once('db_connection.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	//instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
	$link = $objDB->conecta_mysql();

	//sempre aspas simples na clausula dos valores
	$sql = "INSERT INTO usuarios(usuario,email,senha) VALUES('$usuario','$email','$senha')";

	//executar a query
	//mysqli_query(conexao,sql);

	if(mysqli_query($link,$sql)){
		echo "Usuário registrado com sucesso!";

	}else{
		echo "Erro ao registrar o usuário";
	}
?>
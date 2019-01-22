<?php

	//Funções dessa aula: login.php, valida_login.php, funcoes_validar_login.php

	require_once("funcoes_validar_login.php");

	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$usuario_validado = validar_login($login,$senha);

	if($usuario_validado){
		echo "Acesso Permitido";
	}else{
		echo "Acesso Negado";
	}

?>
<?php
	//Funções dessa aula: login.php, valida_login.php, funcoes_validar_login.php

	function validar_login($login,$senha){

		//Correto é validar no banco de dados
		$login_bd = "rafael.zabotto";
		$senha_bd = "123";
		//exemplo fictício, simulando um BD

		if($login == $login_bd && $senha == $senha_bd){

			return true;
		}

		return false;
	}

?>
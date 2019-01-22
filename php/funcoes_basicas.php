<?php

$valor = 120;

//isset(), valores iniciados

	if(isset($valor)){

		echo "Valor iniciado, com valor diferente de NULL";
	}

// empty(), retorna true sempre que uma variável estiver sozinha
	//true -> '', 0, '0', false, null, array()

$valor2 = '';

	if(empty($valor2)){

		echo "Variável vazia";
	}


//is_numeric, testa se uma variável é um número ou uma string numérica
	//true-> numero e string de numero. Ex: '120','152.45', false->todo resto

$valor3 = 4;

	if(is_numeric($valor3)){
		echo "É um número";
	}

?>
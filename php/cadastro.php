<?php

//VALIDAÇÃO DE FORMULÁRIO COM AS FUNÇÕES BÁSICAS APRESENTADAS

if(isset($_POST['nome']) && empty($_POST['nome'])){

	echo "Preencha o nome completo.<br>";
}

if(isset($_POST['cpf']) && empty($_POST['cpf'])){

	echo "Preencha o CPF.<br>";
}

if(isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){

	echo "Apenas números no cpf.<br>";
}


?>

<form method = "post" action = "">
	
	<label>
		Nome Completo*:
		<input type="text" name="nome">
	</label>

	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

		<input type="submit" name="cadastrar">
</form>
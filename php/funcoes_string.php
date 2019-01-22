<?php

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
$total_string_cpf = strlen($cpf);

if($total_string_cpf != 11 && $cpf != ''){

	echo "CPF inválido";
}

?>

<form method="post" action="">
	<label>CPF:
		<input type="text" name="cpf">
	</label>

		<input type="submit" name="Cadastrar">
</form>

<!-- Utilização da tag str_replace-->

<?php

	$texto = '345.332.456-40';
	$cpf = str_replace(".","",$texto);
	$cpf = str_replace("-","",$cpf);
	echo $cpf;

?>

<!-- utilização da substr-->
<?php
			//123456789...
	$texto = "Entenda porque seu smartphone esquenta tanto, se voce tem um smartphone."

	substr($texto, 0, 2);

?>
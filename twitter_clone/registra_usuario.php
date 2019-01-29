<?php

require_once('db_connection.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	//instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
	$link = $objDB->conecta_mysql();

	$usuario_existe = false;
	$email_existe = false;

	//verificar se o usuário já existe

	$sql = "Select * from usuarios where usuario = '$usuario'";

		if($resultado_id = mysqli_query($link,$sql)){

			$dados_usuarios = (mysqli_fetch_array($resultado_id));

			if(isset($dados_usuarios['usuario'])){
				$usuario_existe = true;
				
			}
		}else{
			echo "Erro ao tentar localizar o registro de usuário";
		}

	//verificar se o email já existe

	$sql = "Select * from email where usuario = '$email'";

		if($resultado_id = mysqli_query($link,$sql)){

			$dados_email = (mysqli_fetch_array($resultado_id));

			if(isset($dados_email['email'])){
				$email_existe = true;
			
			}

		}else{
			echo "Erro ao tentar localizar o registro de email";
		}

	if($usuario_existe || $email_existe){

		$retorno_get = "";

		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}
		header("Location: inscrevase.php?".$retorno_get);
	}

	die();

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
<?php

	require_once('db_connection.php');

	$sql = "SELECT * FROM usuarios";

	$objDB = new db();
	$consulta = $objDB->conecta_mysql();

	$resultado_id = mysqli_query($consulta,$sql);

	if($resultado_id){
        $dados_usuario = array();
        
        //usar sempre o fetch para ter controle das consultas. Utilizar laços para percorrer
        while($linhas = mysqli_fetch_array($resultado_id, MYSQLI_NUM)){ //para retornar apenas um array numerico, outras tads; ASSOC, para array associativo, BOTH traz os dois tipos
            $dados_usuario[] = $linha;
        }
        
        //outro metodo de pegar o conteudo dos arrays
        foreach($dados_usuario as $usuario){
            echo $usuario['email'];
            '<br/>';
        }

	}else{
		echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
	}

?>
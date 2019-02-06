<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?erro=1');
    }

    require_once('db_connection.php');

    $id_usuario = $_SESSION['id'];

    //instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "SELECT * FROM tweet WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            var_dump($registro);
        }

    }else{

        echo "Erro na consulta de tweets no DB";
    }

?>
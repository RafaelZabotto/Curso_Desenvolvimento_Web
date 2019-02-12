<?php

    //sempre que vai trabalhar com var de sessão é preciso dar session_start
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?erro=1');
    }

    require_once('db_connection.php');

    $id_usuario = $_SESSION['id_usuario'];
    $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];

    if($id_usuario == '' || $seguir_id_usuario == ''){
        die();
    }

    //instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "DELETE FROM usuarios_seguidores WHERE id_usuario = '$id_usuario' AND seguindo_id_usuario = '$deixar_seguir_id_usuario";
    
    mysqli_query($link,$sql)


?>
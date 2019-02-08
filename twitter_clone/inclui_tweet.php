<?php

    //sempre que vai trabalhar com var de sessão é preciso dar session_start
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?erro=1');
    }

    require_once('db_connection.php');

    $texto_tweet = $_POST['texto_tweet'];
    $id_usuario = $_SESSION['id_usuario'];

    if($texto_tweet == '' || $id_usuario == ''){
        die();
    }

    //instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "INSERT INTO tweet(id_usuario, tweet) values('$id_usuario', '$texto_tweet')";
    
    mysqli_query($link,$sql)


?>
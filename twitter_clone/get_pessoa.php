<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?erro=1');
    }

    require_once('db_connection.php');

    $nome_pessoa = $_POST['nome_pessoa'];
    $id_usuario = $_SESSION['id_usuario'];

    //instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "SELECT * FROM usuarios WHERE usuario LIKE '%$nome_pessoa%' AND id <> '$id_usuario'"; 
   
    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['usuarios'].'</strong><small> - '.$registro['email'].' </small>';   
            echo '</a>';
        }

    }else{

        echo "Erro na consulta de tweets no DB";
    }

?>
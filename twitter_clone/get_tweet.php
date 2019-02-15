<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location:index.php?erro=1');
    }

    require_once('db_connection.php');

    $id_usuario = $_SESSION['id_usuario'];

    //instanciamos a classe do db e pegamos o retorno na var link
	$objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = " SELECT DATE_FORMAT(t.data_inclusao,'%d %b %Y %T') AS 'data_inclusao_formatada', t.tweet, u.usuario "; 
    $sql.= " FROM tweet t JOIN usuarios u ON u.id = t.id_usuario "; 
    $sql.= " WHERE t.id_usuario = '$id_usuario' ";
    $sql.= " OR id_usuario IN (select seguindo_id_usuario from usuario_seguidores where id_usuario = '$id_usuario') "; 
    $sql.= " ORDER BY t.data_inclusao DESC ";

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            echo '<a href="#" class="list-group-item">';
                echo '<h4 class="list-group-item-heading">'.$registro['usuario'].'<small> - '.$registro['data_inclusao_formatada'].'</small></h4>';
                echo '<p class="list-group-item-text">'.$registro['tweet'].'</p>';
            echo '</a>';
        }

    }else{

        echo "Erro na consulta de tweets no DB";
    }

?>
<?php

    //is_array, verifica se é array

    $array = array('String',"notebook","relógio");
    $retorno = is_array($array);

    if($retorno ){

        echo "É array";
    }else{

        echo "Não é array";
    }

    //in_array, verifica se o parametro esta no array

    $array = array('String',"notebook","relógio");
    $retorno = in_array("notebook", $array);
    
    if($retorno ){
    
        echo "É array";
    }else{
    
        echo "Não é array";
    }

    //array_keys, recupera as chaves do array

    $produtos = array(10=>'String',11=>"notebook");
    $chaves_array = array_keys($produtos);
    
    var_export($chaves_array);

    //sort, ordena um array

    $frutas = array(0  => "Banana", 1 => "Amora", 2 => "Carambola");

    sort($frutas);
    var_export($frutas);


    //asort, ordena mas mantem a relação chave/valor

    $frutas = array(0  => "Banana", 1 => "Amora", 2 => "Carambola");

    asort($frutas);
    var_export($frutas);


    //count, conta quantos itens tem no array

    $frutas = array(0  => "Banana", 1 => "Amora", 2 => "Carambola");

    $n_itens = count($frutas);
    echo $n_itens;


    //array_merge, ine dois ou mais arrays

    $array1 = array("mac", "linux");
    $array2 = array("windows");
    $array3 = array("solaris");

    $novo_array = array_merge($arry1,$array2,$array3);
    var_export($novo_array);


    //explode retira um delimitador e retorna um array

    $string = "20/10/2020";
    $retorno = explode("/", $string);

    var_export($retorno);

    //implode, junta elementos de um array numa string

    $nova_string = implode("/", $retorno);
    echo $nova_string;

?>
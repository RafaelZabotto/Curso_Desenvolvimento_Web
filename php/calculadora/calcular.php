<?php

    require_once("Calculadora.php");

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    echo $operacao = $_POST['operacao'];


    //instanciando classe
    $calculadora = new Calculadora();

    //Setando Valores
    $calculadora->setNumero1($numero1);
    $calculadora->setNumero2($numero2);

    $calculadora->somar();

    switch($operacao){

        case 'somar':
            $calculadora->somar();
            break;

        case 'dividir':
            $calculadora->subtrair();
            break;

        case 'multiplicar':
            $calculadora->multiplicar();
            break;

        case 'dividir':
            $calculadora->dividir();
            break;

        default;
    }

    echo $calculadora->getTotal();

    
?>
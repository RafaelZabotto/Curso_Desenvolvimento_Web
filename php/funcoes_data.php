<?php

	//date
	echo date("d/m/Y"); echo'<br>';
	echo date("d-m-Y");  echo'<br>';
	echo date("Ymd");  echo'<br>';
	echo date("dmY");  echo'<br>';

	echo date("Y-m-d H:i");  echo'<br>';

	//strtotime converte uma string para uma data

	$data_inicial = "2015-04-02";
	$data_final = "2015-04-05";

	$time_inicial = strtotime($data_inicial); //transforma a data para segundos
	$time_final = strtotime($data_final);

	$diferenca_times = $time_final - $time_inicial;

	$diaSegundos = 24*60*60;
	$diferenca_dias = $diferenca_times/ $diaSegundos;
	echo $diferenca_dias;


?>
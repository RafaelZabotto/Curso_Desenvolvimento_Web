<?php

    session_start();

    //Eliminando as variaveis que guardam os dados das var de sessão
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);

    echo 'Logout efetuado';

?>
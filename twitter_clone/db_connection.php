<?php

    class db{

        //host
        private $host = 'localhost';


        //usuario
        private $usuario = 'root';

        //senha
        private $senha = 'p4ssword';

        //banco de dados
        private $database = 'twitter_clone';

        public function conecta_mysql(){

            //criar a conexão
            //mysqli_connect(localizacao do bd, usuario,senha,banco);
            $con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

            //ajustar o charset de cominucação entre a aplicação e o banco de dados
            mysqli_set_charset($con, 'utf8');

             //Verifica se houve erro de conexão
            if (mysqli_connect_errno()){
                echo 'Houve um erro ao tentar se conectar ao banco de dados: '.mysqli_connect_error();
            }

            return $con;
        }

    }
?>

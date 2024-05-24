<?php 

    try {
        //$conexao = new PDO('mysql: host = localhost; dbname=webii', 'root', '');
        $db_name = 'test';
        $db_host = 'localhost:3306';
        $db_user = 'root';
        $db_password = '';
        $conexao = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
    }  catch (Exception $erro) {
        try {
            $conexao = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
        } catch (Exception $e) {
            echo $erro -> getMessage();
            echo "<br>";
            echo $erro -> getCode();
        }

    }
#arrumar conexão
?>
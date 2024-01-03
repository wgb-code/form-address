<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'formaddress';

    $Conn = mysqli_connect($servername, $username, $password, $database);

    //echo ($conn) ? 'Conexão Sucedida!' : 'Não conectou';
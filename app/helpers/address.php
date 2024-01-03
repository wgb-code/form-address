<?php 
    require '/xampp/htdocs/formAddress/app/database/conect.php';

    $Endereco = $_POST['endereco'];
    $Cidade = $_POST['cidade'];
    $Pais = $_POST['pais'];
    $Cep = $_POST['cep'];
    $Opcional = $_POST['opcional'];

    $Sql = "INSERT INTO endereco(endereco, cidade, pais, cep, descricao) VALUES ('$Endereco', '$Cidade', '$Pais', '$Cep', '$Opcional')";
    
    echo (mysqli_query($Conn, $Sql)) ? 'Dados salvos na base de dados' : 'Os dados não foram salvos';
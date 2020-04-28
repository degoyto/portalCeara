<?php 
    session_start();
    include('api/db.php');

    $nomeCidade = mysqli_real_escape_string($connect, trim($_POST['nome']));
    $resumoCidade = mysqli_real_escape_string($connect, trim($_POST['resumo']));
    $areaCidade = mysqli_real_escape_string($connect, trim($_POST['area']));
    $limiteCidade = mysqli_real_escape_string($connect, trim($_POST['limite']));
    $pibCidade = mysqli_real_escape_string($connect, trim($_POST['pib']));
    $populacaoCidade = mysqli_real_escape_string($connect, trim($_POST['populacao']));
    $aniversarioCidade = mysqli_real_escape_string($connect, trim($_POST['aniversario']));

    $queryCadastroCidade = "INSERT INTO cidades (nome, resumo, area, limite, id, populacao, aniversario, data_registro) VALUES('$nomeCidade',
    '$resumoCidade', '$areaCidade', '$limiteCidade', '$pibCidade','$populacaoCidade', '$aniversarioCidade', NOW())";

    if($connect->query($queryCadastroCidade) === TRUE){
        $_SESSION["cadastro_sucesso"] = true;
        echo $_SESSION["cadastro_sucesso"];
    }
    
    
    $connect ->close();
    header('Location: cadastro_cidade');

?>
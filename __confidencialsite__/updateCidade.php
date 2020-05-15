<?php 
    session_start();
    include('api/db.php');

    $nomeCidade = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $resumoCidade =  $_POST['resumo'];
    $areaCidade =  filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
    $limiteCidade =  filter_input(INPUT_POST, 'limite', FILTER_SANITIZE_STRING);
    $pibCidade =  filter_input(INPUT_POST, 'pib', FILTER_SANITIZE_STRING);
    $populacaoCidade =  filter_input(INPUT_POST, 'populacao', FILTER_SANITIZE_STRING);
    $aniversarioCidade =  filter_input(INPUT_POST, 'aniversario', FILTER_SANITIZE_STRING);

    // $nomeCidade = "ADFSDFAFDSSDF"
    // $resumoCidade = "dfasdffasdf";
    // $areaCidade = 12312312;
    // $limiteCidade = "ADFSDFAFDSSDF"
    // $pibCidade = 32123;
    // $populacaoCidade = 312312;
    // $aniversarioCidade = 31231;
    echo $aniversarioCidade;
    $tituloSemAcento =  preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nomeCidade ) );
    $titulo_novo = preg_replace('<\W+>', "-", $tituloSemAcento); 
    $nomeMinusculo = strtolower($titulo_novo);

    $queryCadastroCidade = "UPDATE cidades SET nome = '$nomeCidade', resumo = '$resumoCidade' , area = '$areaCidade', 
    limite = '$limiteCidade', populacao = '$populacaoCidade', aniversario = '$aniversarioCidade', nomecru = '$nomeMinusculo', updatedAt = NOW() WHERE id='$pibCidade'";

    if($connect->query($queryCadastroCidade) === TRUE){
        $_SESSION["cadastro_sucesso"] = true;
        
        echo $_SESSION["cadastro_sucesso"];
    }
    
    
    
    $connect ->close();
    header('Location: editar_cidade/'.$pibCidade);

?>
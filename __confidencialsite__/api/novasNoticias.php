<?php 
    include("db.php");
    include("pegaIdCidade.php");
    mysqli_set_charset($connect,"utf8");
    $idCidadeNovo = $exibeIdCidade['id'] ;
    $principais = mysqli_query($connect, "SELECT id, titulo, foto, tituloConvertido, cidade FROM noticias  WHERE cidade= $idCidadeNovo ORDER BY createdAt DESC limit 6");
    // $principaisLista = array();
    
   
    
?>
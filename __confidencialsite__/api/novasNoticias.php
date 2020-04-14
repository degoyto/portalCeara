<?php 
    include("db.php");
    mysqli_set_charset($connect,"utf8");
    $novas = mysqli_query($connect, "SELECT * FROM Noticia ORDER BY createdAt DESC limit 4");
    $listaNovaNoticia = array();
    while ($exibeNovas = mysqli_fetch_assoc($novas)){
        array_push($listaNovaNoticia, $exibeNovas);
    };


?>


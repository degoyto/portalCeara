<?php 
    include("db.php");
    mysqli_set_charset($connect,"utf8");
    $principais = mysqli_query($connect, "SELECT * FROM Noticia WHERE destaque=1 ORDER BY createdAt DESC limit 5");
    // $principaisLista = array();
    
    $listaNoticia = array();
    while ($exibePrincipais = mysqli_fetch_assoc($principais)){
        array_push($listaNoticia, $exibePrincipais);
    };
?>
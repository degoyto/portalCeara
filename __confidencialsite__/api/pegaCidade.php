<?php 
    include("db.php");

    mysqli_set_charset($connect,"utf8");
    $id = array_search($URL[1], $listaPalavras);
        
    $result = mysqli_query($connect, "SELECT * FROM cidades WHERE id=$id");
    $exibe = mysqli_fetch_assoc($result);
    
?>
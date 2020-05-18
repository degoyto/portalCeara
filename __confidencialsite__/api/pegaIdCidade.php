<?php 
    include("db.php");
    
    mysqli_set_charset($connect,"utf8");
    $idCidadeResult = mysqli_query($connect, "SELECT id FROM cidades WHERE nomecru='$URL[1]'");
    
    
    
    $exibeIdCidade = mysqli_fetch_assoc($idCidadeResult);
    
    
   
    
?>
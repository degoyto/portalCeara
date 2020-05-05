<?php 

    include("db.php");
    
    
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    
    
    mysqli_set_charset($connect,"utf8");
    $resultTodasCidades = mysqli_query($connect, "SELECT * FROM cidades");
    
    
    
   
?>
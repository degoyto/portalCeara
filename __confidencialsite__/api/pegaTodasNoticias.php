<?php 

    include("db.php");
    
    
    // $url = explode('/', $_SERVER['SCRIPT_URI']);
    
    
    mysqli_set_charset($connect,"utf8");
    $resultTodasNoticias = mysqli_query($connect, "SELECT id, titulo, foto, cidade, tituloConvertido FROM noticias ORDER BY createdAt ASC");
    
    function pegaCidade($connect, $idRecebido){
        mysqli_set_charset($connect ,"utf8");
        $resultTodasNoticias = mysqli_query($connect, "SELECT nomecru FROM cidades where id=$idRecebido");
        mysqli_error($connect);
        $exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias);
        return $exibeTodasNoticias['nomecru'];
    }
    
   
?>
<?php
    include("api/pegaTodasNoticias.php");
    
        header("Location: http://localhost/portalceara/noticias/".pegaCidade($connect,$_POST['cidade']));


    

       

   

    exit();




?>
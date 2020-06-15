<?php 
    include("api/db.php");
    include("api/pegaTodasCidades.php");  
    include("api/noticiaPrincipal.php");  
 




?>
<!DOCTYPE html>

<html>
    <head><meta charset="gb18030">
        <?php include("componente/headGeral.php")?>
        <title>Repórteres e Correspondentes - O Portal do Ceará </title>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/missao.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/junte.css"/>
        
        <link type="text/css" rel="stylesheet" href="css/propaganda/propaganda.css"/>
        
        <link rel="stylesheet" href="css/geral/gallery.theme.css">
        <link rel="stylesheet" href="css/geral/gallery.min.css">
        <link type="text/css" rel="stylesheet" href="css/geral/rodape.css"/>
        <link type="text/css" rel="stylesheet" href="css/geral/navbar.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
        <script src="js/pesquisa.js"></script>

        
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
    
        </style>

    </head>
    
    
    <body>
        <?php include("componente/geral/navbar.html") ?>
       
        <div style="padding-top:5%;">
            <?php 
                $linkDaPropaganda = "https://jornalportodopecem.com.br/";
                $imagemDaPropaganda = "https://www.mafans.com/wp-content/uploads/2019/08/1100x160-Cashback.gif";
        
                include("componente/propagandas/superBanner.php") 
            ?>

        </div>
        <div id="correspondentes">
            <?php include("componente/PaginaInicial/junte.html") ?>

        </div>
        <div >
            <?php 
                $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/propagandas%2FportoPecemSuperBanner.jpg?alt=media&token=e98759b3-e912-4195-99c6-e250840a30e8";
                $linkDaPropaganda = "https://jornalportodopecem.com.br/";
                include("componente/propagandas/superBanner.php") 
            ?>

        </div>
        
        <div>
            <?php include("componente/geral/rodape.php") ?>
        </div>
        
        
    </body>
    


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</html>



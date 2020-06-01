<?php 
    include("api/db.php");
    include("api/pegaTodasCidades.php");  
    include("api/noticiaPrincipal.php");  
 




?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("componente/headGeral.php")?>
        <title>Página Inicial - O Portal do Ceará </title>
        <link type="text/css" rel="stylesheet" href="css/geral/cabecalho.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/capa.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/cidadeDestaque.css"/>

        <link type="text/css" rel="stylesheet" href="css/paginaInicial/missao.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/junte.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/ceara.css"/>
        <link type="text/css" rel="stylesheet" href="css/paginaInicial/mapaID.css"/>
        
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
        <div id='inicio'>
            <?php include("componente/PaginaInicial/capa.html") ?>

        </div>
        <div id="hoje">
            <?php include("componente/PaginaInicial/noticiaHoje.php") ?>

        </div>
        <div id="perfil">
            <?php include("componente/PaginaInicial/cidadesDestaque.php") ?>

        </div>
        <div id="correspondentes">
            <?php //include("componente/PaginaInicial/missao2.html") ?>

        </div>
        
        <div class="container-flex">
            <?php //include("componente/PaginaInicial/ceara.php") ?>

        </div>
        <div>
            <?php //include("componente/PaginaInicial/junte.html") ?>
        </div>
        <div>
            <?php //include("componente/geral/rodape.php") ?>
        </div>
        
        
    </body>
    


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
</html>



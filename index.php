<?php 
    include("__confidencialsite__/api/converteNome.php");
    session_start();

    //$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
    $REQUEST_URI = $_SERVER['REQUEST_URI'];
    $INITE = strpos($REQUEST_URI, "?");
    $idAnterior = 0;
    if($INITE){
        $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
    }
    $REQUEST_URI_PASTA = substr($REQUEST_URI, 13);
    //$REQUEST_URI_PASTA = substr($REQUEST_URI, 1);

    $URL = explode("/", $REQUEST_URI_PASTA);
    if ($URL[0] == ''){
        $URL[0] = 'home';
    }
    if ($URL[0] == "municipios"){
        include("__confidencialsite__/api/pegaCidade.php");

    }
    
    if(file_exists('__confidencialsite__/'.$URL[0].".php")){
        // if ($URL[0] == "noticia" && !isset($URL[1]) && !isset($URL[2])){
        //     require ('__confidencialsite__/404.php');
            
        // }
        // if ($URL[0] == "noticia" && isset($URL[2])){
        //     include("__confidencialsite__/api/pegaNoticiaPorId.php");
            
        //     if (is_numeric($URL[2]) && !isset($URL[3])){
        //         $idRecebidoNoticiaPorId = $URL[2];
        //         $exibeNoticiaPorId = pegaTudoNoticiaPorId($connect, $idRecebidoNoticiaPorId);
        //         $nomeCruNoticiaPorId = pegaCidadeNoticiaPorId($connect, $exibeNoticiaPorId['cidade']);
        //         $_SESSION['idnoticia'] = $URL[2];
        //         header("Location: /portalceara/noticia/".$nomeCruNoticiaPorId."/".$exibeNoticiaPorId['id']."/".$exibeNoticiaPorId['tituloConvertido']);
        //         exit();

        //      }
        //      else{
        //         $exibeNoticiaPorId = pegaTudoNoticiaPorId($connect, $URL[2]);
        //         $nomeCruNoticiaPorId = pegaCidadeNoticiaPorId($connect, $exibeNoticiaPorId['cidade']);
                
        //         if ($URL[3] == $exibeNoticiaPorId['tituloConvertido'] ){
        //             require ('__confidencialsite__/'.$URL[0].".php");
                    
        //         }
        //         else{
                    
        //             header("Location: /portalceara/noticia/".$nomeCruNoticiaPorId."/".$exibeNoticiaPorId['id']."/".$exibeNoticiaPorId['tituloConvertido']);
        //             exit();
        //         }
                
                
                
        //      }
             
           
            
        // }
        
        // if ($URL[0] == "noticia" && is_numeric($URL[1])){
        //     $idRecebidoNoticiaPorId = $URL[1];
        //     include("__confidencialsite__/api/pegaNoticiaPorId.php");
        //     header("Location:".$nomeCruNoticiaPorId."/".$exibeNoticiaPorId['id']."/".$exibeNoticiaPorId['tituloConvertido']);

        //     require ('__confidencialsite__/404.php');
        // }
        if ($URL[0] == "municipios" && !isset($URL[1])){
            require ('__confidencialsite__/404.php');
        }

        if ($URL[0] == "municipios" && is_numeric($URL[1])){
            if(mysqli_num_rows($result) > 0){
                header("Location:".$exibe['nomecru']);
                exit();
            }
            else{
                require ('__confidencialsite__/404.php');
            }
            
           
        }

        if ($URL[0] == "municipios" && !is_numeric($URL[1])){
            if($numeroDeLinhas > 0){
                
                require ('__confidencialsite__/'.$URL[0].".php");
            }
            else{
                
            }
            
        }
        if($URL[0]!= "municipios"){
            
            require ('__confidencialsite__/'.$URL[0].".php");
        }

        
        
    }
    if (is_dir('__confidencialsite__/'.$URL[0])) {
        if($URL[0]=='api' or $URL[0]=='assets' or $URL[0]=='componente' or $URL[0]=='css'){
            require ('__confidencialsite__/404.php');
        }
    }

    if(!file_exists('__confidencialsite__/'.$URL[0].".php")){
       
        require ('__confidencialsite__/404.php');
    }
    





?>





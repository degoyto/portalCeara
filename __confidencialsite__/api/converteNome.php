<?php

    $listaPalavras = array(
                           0 => "todas-noticias",
                           1 => "artigos", 
                           2 => "boletim-portuario",
                           3 => "caucaia",
                           4 => "comercio-exterior",
                           5 => "complexo-portuario",
                           6 => "destaques-portuarios",
                           7 => "entrevistas",
                           8 => "eventos",
                           9 => "logistica-transporte",
                           10 => "noticia-internacional",
                           11 => "noticia-nacional",
                           12 => "portos-brasil",
                           13 => "porto-turismo",
                           14 => "sao-goncalo",
                           15 => "noticia"
                        );
    $listaPalavrasConvertidas = array(
                            0 => "Todas as Notícias",
                            1 => "Artigos", 
                            2 => "Boletim portuário",
                            3 => "Notícias de Caucaia",
                            4 => "Comércio Exterior",
                            5 => "Complexo Portuário",
                            6 => "Destaques Portuário",
                            7 => "Entrevistas",
                            8 => "Eventos",
                            9 => "Logística e Transporte",
                            10 => "Notícias Internacionais",
                            11 => "Notícias Nacionais",
                            12 => "Portos do Brasil",
                            13 => "Porto e Turismo",
                            14 => "São Gonçalo",
                            15 => "Notícias"
                         );
    
    function converteNome($numeroRecebido){
         
    }
    function encontraPalavra($palavraRecebida, $listaPalavras){
        
        
        if (in_array($palavraRecebida, $listaPalavras)){
            return array_search($palavraRecebida, $listaPalavras);
        }
        else{
            return -1;
        }
        
    }
    

?>
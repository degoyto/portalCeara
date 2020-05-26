<?php 
    $exibeCidadeNoticia = pegaCidadeNoticiaPorId($connect, $exibeNoticiaPorId['cidade']);
    
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
        return $dataParaExibir;
        
        
    }
?>

<div class='container divPrincipal'>
    <div class="container caixaNoticia">
        <div class="container conteudoNoticia">
            <div class="caixaInfoNoticia">
                <a href="http://localhost/portalceara/municipios/<?php echo $exibeCidadeNoticia['nomecru'] ?>">
                    <?php echo  $exibeCidadeNoticia['nome'];?>

                </a>
            </div>
            <div class="caixaInfoNoticia">
                <h1>
                    <?php echo  $exibeNoticiaPorId['titulo'];?>

                </h1>
            </div>
            <div class="caixaInfoNoticia">
                <h2>
                    <?php echo  $exibeNoticiaPorId['resumo'];?>

                </h2>
            </div>
            <div class="caixaInfoNoticia noticiaData">
                <h3>
                     <?php echo  "Por ".$exibeNoticiaPorId['autor'];?>

                </h3>
                <h3>
                    <?php echo  data($exibeNoticiaPorId['createdAt']);?>

                </h3>
            </div>
            <div class="caixaInfoNoticia noticiaImagem">
                <img src ="<?php echo  $exibeNoticiaPorId['foto'];?>"/>
                    

                
            </div>
            <div class="caixaInfoNoticia noticiaConteudo">
                <p>
                    <?php echo  $exibeNoticiaPorId['conteudo'];?>

                </p>
                    

                
            </div>
        </div>
        <div class="fb-share-button" data-href="<?php echo $_SERVER['REQUEST_URI']; ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
        
    </div>
</div>
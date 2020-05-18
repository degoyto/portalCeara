<?php 
    session_start();
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    function data($data){
       
        $datinha = $data;
        $dataP = explode('-', $data);
        $dataParaExibir = $dataP[2].'-'.$dataP[1].'-2020';
        
        return utf8_encode(strftime('%d de %B', strtotime($dataParaExibir)));
        
    }
    if (ISSET($_SESSION['usuario'])){
        
        echo "<a href='http://localhost/portalceara/editar_cidade/".$exibe['id']."'>editar</a>";
    }
    
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active primeiroItem">
        <div class="container tituloItem">
            
            
        <div>
        <div class="conteudoItem">
            <h3>
               <b></b><i> <?php echo $exibe['apelido'] ?> </i></b>
            </h3>
            <p><br>
                <?php echo $exibe['resumo'] ?>
            </p>
            <p><br><br>
                <b>Mesorregião:</b> <?php echo $exibe['mesorregiao'] ?><br><br>
                <b>Microrregião:</b> <?php echo $exibe['microrregiao'] ?><br><br>
                <b>Área:</b> <?php echo $exibe['area'] ?> km²<br><br>
                <b>População:</b> <?php echo $exibe['populacao'].' habitantes' ?>  <br><br>
                <b>Municípios Limitrófes:</b> <?php echo $exibe['limite'] ?> <br><br>
                <b>Aniversário da Cidade:</b> <?php  echo data($exibe['aniversario']) ?> <br><br>
        
            </p>
        </div>
    </div>
    
    
  </div>
  
</div>
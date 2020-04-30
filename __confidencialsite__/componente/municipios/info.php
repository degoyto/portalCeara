

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active primeiroItem">
        <div class="container tituloItem">
            <h1><?php echo $exibe['nome'] ?></h1>
            
        <div>
        <div class="conteudoItem">
            <p>
                <?php echo $exibe['resumo'] ?>
            </p>
            <p>
                <b>Área:</b> <?php echo $exibe['area'] ?> km²<br><br>
                <b>População:</b> <?php echo $exibe['populacao'] ?> <br><br>
                <b>Municípios Limitrófes:</b> <?php echo $exibe['limite'] ?> <br><br>
                <b>Aniversário da Cidade:</b> <?php  ?> <br><br>
        
            </p>
        </div>
    </div>
    
    
  </div>
  
</div>
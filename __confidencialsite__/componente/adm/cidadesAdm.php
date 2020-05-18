

<div>
    <div class="listaCidades">
        <?php 
        
            while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                $linkFotoAdm = $exibeTodasCidades['foto'];
                $linkPaginaCidade = "municipios/".$exibeTodasCidades['nomecru'];
                echo 
                "<div class='cadaCidade'>
                        <div class='imagemCidadeAdm' style=background-image:url('".$linkFotoAdm."')></div>
                        

                    

                    <div class='tituloCidadeAdm'>
                        
                        <a href='".$linkPaginaCidade."'>".$exibeTodasCidades['nome']."</a>
                    </div>
                
                </div>";
            }
        ?>
    </div>    
</div>
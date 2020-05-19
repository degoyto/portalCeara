<div>
    <div class="listaNoticias">
        <?php 
        
            while($exibeTodasNoticias = mysqli_fetch_assoc($resultTodasNoticias)){
                $linkFotoNoticia = $exibeTodasNoticias['foto'];
                $linkPaginaNoticia = "municipios/".$exibeTodasNoticias['tituloConvertido'];
                $linkPaginaCidade = "/portalceara/municipios/".$exibeTodasNoticias['cidade'];
                echo 
                "<div class='cadaNoticia'>
                    <div class='imagemCidadeAdm' style=background-image:url('".$linkFotoNoticia."')></div>
                        

                    

                    <div class='tituloCidadeAdm'>
                        <a href='".$linkPaginaCidade."'>".pegaCidade($connect, $exibeTodasNoticias['cidade'])."</a>
                        <a href='".$linkPaginaNoticia."'>".$exibeTodasNoticias['titulo']."</a>
                        
                    </div>
                
                </div>";
            }
        ?>
    </div>    
</div>
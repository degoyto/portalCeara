<div class="noticiasCidade container">
    
    <h1>Últimas Notícias</h1>
    
    <div class="divNoticias">
        <?php 

            while ($exibePrincipais = mysqli_fetch_assoc($principais)){
                $linkImg = $exibePrincipais['foto'];
                $linkNoticia = "/portalceara/noticia/".$exibePrincipais['id'];
            
                echo 
                "<a class='linkNoticia' href='".$linkNoticia."'>
                    <div class='cadaNoticia'>
                        <div class='imgNoticia' style=background-image:url('".$linkImg."')>
    
                        </div>
                        <div class='tituloNoticia'>
                            <h2>".$exibePrincipais['titulo']."</h2>
                        </div>
                    </div>
                </a>";
            
            };
            if (mysqli_num_rows($principais)>=6){
                echo "

                    <div class='divVejaMais'>
                        <a href='/portalceara/noticias/".$exibe['nomecru']."'>Veja todas as notícia de ". $exibe['nome']."</a>

                    </div>";
            }
            
        ?>
        
        
        
    </div>

</div>
<div class="noticiasCidade container">
    
    <h1>Últimas Notícias</h1>
    
    <div class="divNoticias">
        <?php 

            while ($exibePrincipais = mysqli_fetch_assoc($principais)){
                $linkImg = $exibePrincipais['foto'];
            
                echo "<div class='cadaNoticia'>
                <div class='imgNoticia' style=background-image:url('".$linkImg."')>
    
                </div>
                <h2>".$exibePrincipais['titulo']."</h2>
            </div>";
            
            };
        ?>
        
        
        
    </div>

</div>
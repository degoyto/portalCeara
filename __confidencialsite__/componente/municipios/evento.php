<?php 

?>

<div class="eventosCidade container">
    
    <h1>Eventos</h1>
    
    <div class="divEventos">
        <?php 

            while ($exibePrincipais = mysqli_fetch_assoc($principaisEventos)){
                $linkImg = $exibePrincipais['foto'];
                $linkEvento = "/portalceara/evento/".$exibePrincipais['id'];
            
                echo 
                "<a class='linkEvento' href='".$linkEvento."'>
                    <div class='cadaEvento'>
                        <div class='imgEvento' style=background-image:url('".$linkImg."')>
    
                        </div>
                        <div class='infoEvento'>
                            <h2>".$exibePrincipais['titulo']."</h2>
                            <h3>".$exibePrincipais['resumo']."</h3>
                            <div class='dataPreco'>
                                <p><b>Preço:</b> ".$exibePrincipais['preco']."</p>
                                <p><b>O evento ocorrerá no dia:</b> ".data($exibePrincipais['dataEvento'])."</p>
                            </div>
                            
                        </div>
                    </div>
                </a>";
            
            };
            if (mysqli_num_rows($principaisEventos)>=3){
                echo "

                    <div class='divVejaMais'>
                        <a href='/portalceara/noticia/".$exibe['nomecru']."'>Veja todas as notícia de ". $exibe['nome']."</a>

                    </div>";
            }
        ?>
        
        
        
    </div>

</div>
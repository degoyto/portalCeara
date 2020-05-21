<div class="container-flex divMissao divDestaque" id="destaques">

    <h1>As Notícias e os perfis das cidades</h1>
    <div class="container mapaCidade">
        <div class="mapSvg">
            <?php include("mapaID.html") ?>
            
        </div>
        <div class="linksCidades">
            <?php 
                while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                    $linkCidade = "municipios/".$exibeTodasCidades['nomecru'];
                    echo "<a href='".$linkCidade."'>".$exibeTodasCidades['nome']."</a>";
                }
            ?>
        </div>
        
    </div>
</div>